var fs = require('fs');
var exec = require('child_process').exec;

var WebSocketServer = require('websocket').server;
var http = require('http');
var express = require('express');
var app = express();
var express_port = process.env.PORT || 3000;
var ws_port = process.env.WS_PORT || 9090;

app.use(express.static(__dirname + '/public'));
app.get('/eteindre', function(req,res) {
  child = exec("sudo shutdown -h now", function(error, stdout, stderr) {
    res.end("Shutdown...");
  });
})

var webserver = app.listen(express_port, function() {
  console.log((new Date().toUTCString()) + ' WebServer is listening on port ' + express_port);
});

wsServer = new WebSocketServer({
    httpServer: webserver,
    // You should not use autoAcceptConnections for production
    // applications, as it defeats all standard cross-origin protection
    // facilities built into the protocol and the browser.  You should
    // *always* verify the connection's origin and decide whether or not
    // to accept it.
    autoAcceptConnections: false
    
});

function originIsAllowed(origin) {
  // put logic here to detect whether the specified origin is allowed.
  return true;
}


var connections = new Array();
var timerID;
var maxTime = 1 * 30;

wsServer.on('request', function(request) {
    if (!originIsAllowed(request.origin)) {
      // Make sure we only accept requests from an allowed origin
      request.reject();
      console.log((new Date().toUTCString()) + ' Connection from origin ' + request.origin + ' rejected.');
      return;
    }
    
    connection = request.accept('chaos-protocol', request.origin);
    console.log((new Date().toUTCString()) + ' Connection accepted.');

    connection.sendJSONData = function(data){
        if(this.connected){
            this.sendUTF(JSON.stringify(data));
        }
    };
    
    
    connection.isItMe = function(sayMyName){
        this.me = sayMyName;
        connections[sayMyName] = this;
        console.log("hello " + sayMyName);
    };

    connection.on('message', function(message) {
        var data;
        
        if (message.type === 'utf8') {
            // console.log('Received Message');
            data = JSON.parse(message.utf8Data)
            
            if(data['cmd'] !== undefined){
                switch(data['cmd']){
                    case 'starttime':
                        return startTimer();
                    case 'stoptime':
                        return stopTimer();
                    case 'diffuse' :
                        data['cmd'] = data['action'];
                        return diffuse(data);
                    case 'setmaxtime':
                        return setMaxTime(data['maxtime']);
                    case 'hello' : 
                        return connection.isItMe(data['from']); // you're looking for ? 
                    case 'text' : 
                        return diffuseText(data);
                    case 'savetext' : 
                        return saveText(data['text'] , data['filename']);
                    case 'requeststateinfo' :
                        return sendStateInfo(this);
                
                }
                return;
            }

        }else if(message.type === 'binary') {
            console.log('Received Binary Message of ' + message.binaryData.length + ' bytes');
            //connection.sendBytes(message.binaryData);
        }
    });
    connection.on('close', function(reasonCode, description) {
        
        if(connection!=undefined){
            console.log((new Date().toUTCString()) + ' Peer ' + connection.remoteAddress + ' disconnected.');
            delete(connections[this.me]);
            console.log('Disconnected ' + this.me);
        }else{
            console.log("Disconnected but not destroyed " + this.me);
        }
    });

    var debutTime; 
    var theTime;
    var timerIsOn = false;
    function setMaxTime(mxt){
        maxTime = mxt;
    }
    function startTimer(){
        if(!timerIsOn){
            timerIsOn = true;
            debutTime = Date.now();
            diffuseTime();
            timerID = setInterval(diffuseTime , 350);
        }

    }

    function stopTimer(){
        timerIsOn = false;
        clearInterval(timerID);

    }
    function diffuseTime(){
        theTime = Date.now() - debutTime;
        theTime = Math.round(theTime / 1000); 
        timeLeft = maxTime - theTime;

        toSend  = {'cmd' : 'time' , 'time' : timeLeft};
               
        diffuse(toSend);
        
        if(timeLeft == 0){
            stopTimer();
            return;
        }

    }
    function diffuse(data){
        for(keys in connections){
            connections[keys].sendJSONData(data);
        }
    }
    function diffuseText(data){
        toLog ="";
        if(connections['master'] != undefined){
            connections['master'].sendJSONData(data);
        }else{
            toLog = 'no master to diffuse';
        }

        if(connections['control'] != undefined){
            connections['control'].sendJSONData(data);
        }else{
            toLog = toLog + ' / no control to diffuse';
        }

        if(connections['observer'] != undefined){
            connections['observer'].sendJSONData(data);
            console.log('sending to observer');
        }
        

        data['text'] = data['text'].substring(data['text'].length-220, data['text'].length);
        if(data['from'] == "blue"){
            if(connections['red'] != undefined){

                connections['red'].sendJSONData(data);
            }
        }
        if(data['from'] == "red"){
            if(connections['blue'] != undefined){
                connections['blue'].sendJSONData(data);
            }
        }

        if(toLog != ""){
            //console.log(toLog);
        }
    }
    
    function saveText(theText, name){
        append = "Le chaos des mots \r\n" + new Date().toUTCString() + "\r\n\r\n\r\n";
        fs.writeFile('textes/' + name, append + theText, function(err) {
                if(err) {
                    console.log(err);
                } else {
                    console.log("Fichier enregistré");
                }
            }); 

    }

    function sendStateInfo(to){
        var conexs = new Object();
        var i = 0;
        for(key in connections){
            if(connections[key] !== undefined ){
                conexs[key] = connections[key].connected;
                i++;
            }
        }
        

        to.sendJSONData({'cmd' : 'stateinfo' , 'users' : conexs , 'n' : i});
    }


});
