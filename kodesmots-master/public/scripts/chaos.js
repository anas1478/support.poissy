var host = location.origin.replace(/^http/, 'ws');

function connect(host){
	var socket;
	try{  
	    socket = new WebSocket(host, "chaos-protocol");
	} catch(exception){  
		message('Socket error :' + exception);  
	}
	
	window.addEventListener("unload", function( event ) {
		socket.close();
	});

	return socket;  
}
function setConnected(el){
	el.update('@');
	el.addClassName('ok');
}        
function setDisconnected(el){
	el.update('!');
	el.removeClassName('ok');	
}
function jSend(data, socket){
	if(socket){
		socket.send(JSON.stringify(data));
	}
}

function sayHello(myName , socket){
	jSend( {'cmd' :'hello' ,'from' : myName} , socket);
}


function message(data){
	console.log(data);
}

function setScore(scoreBlue, scoreRed){
	if(scoreBlue != $('scoreBlue').innerHTML && Element.pulsate){
		$('scoreBlue').pulsate({pulses:3, from:0.5, duration : 0.8});
	}
	if(scoreRed != $('scoreRed').innerHTML && Element.pulsate){
		$('scoreRed').pulsate({pulses:3, from:0.5, duration : 0.8});
	}
	$('scoreBlue').update(scoreBlue);
	$('scoreRed').update(scoreRed);
	
}

function setRound(rd , roundElement){
	
	roundElement.update('ROUND ' + rd + ' ');
	if(round != undefined){
		round = rd;
	}

}
function doSetTime(time, timeElement){
	if(time == 0){
		//clockStr = '';
		clockStr = ' <span class="clocksymbol">' + (clock[0]) + '</span>';
		if(Element.shake)
			timeElement.shake();
	}else{
		clockStr = ' <span class="clocksymbol">' + (clock[clockIndex++]) + '</span>';
	}
	timeElement.update(formatTime(time) + clockStr);
	if(clockIndex == clock.length)
		clockIndex = 0;
}


function formatTime(time){
	minutes = Math.floor(time / 60);
	seconds = time%60;
	return(pad2z(minutes) +':' + pad2z(seconds));
}

function pad2z(str){
	return pad(str, 2,'0');
}
function pad(str, length, padstr){
	str = str + "";
	while ( str.length < length){
        str = padstr + str;
    }
    return str;
}

var clock = [	"🕐", "🕑", "🕒", "🕓", "🕔", "🕕", "🕖", "🕗", "🕘", "🕙", "🕚", "🕛" ];
var clockIndex = 0;




function setScroll(el, scroll, caret){
	var prop = el.getHeight() / el.scrollHeight; 
	var layout = new Element.Layout(el);
	if(scroll == undefined){
		
		return;
	}
	caret.scrollIntoView(false);

	if( prop == 1){
		stTop = layout.get('padding-top') + 'px';
		scroll.setStyle({display: 'none' , bottom : 'auto' , top : 0});
	}else{
		h = prop * el.getHeight() + 'px';
		
		//calc position of scroll handle
		offset = caret.cumulativeScrollOffset();
		offsetBottom = 1 - ( offset.top / (el.scrollHeight - el.getHeight()) );
		
		if(offsetBottom == 1){
			stTop 		= layout.get('padding-top') + 'px';
			stBottom 	= 'auto';
		}else{
			heightSpace = el.getHeight() - scroll.getHeight() - layout.get('padding-top') - layout.get('padding-bottom');
			stBottom 	= (offsetBottom * heightSpace + layout.get('padding-bottom')) + 'px';
			stTop		= 'auto';
		}
		// set new styles
		scroll.setStyle({height: h , display : 'block', top : stTop , bottom : stBottom});
	}
	
}
