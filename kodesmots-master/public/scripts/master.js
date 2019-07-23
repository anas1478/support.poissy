var myName = 'master';
var socket;
var theRound = 0;
document.observe("dom:loaded",
  function(){
    message("Document ready !! Let's go !")
    setFontSize();
    $('panneau').hide();
    $('panneau').setStyle({'display' : 'none'});
    $('debut').setStyle({'display' : 'none'});
    $('fin').setStyle({'display' : 'none'});
    $('fin').update(leTexteDeFin.replace(/>/g , "<br/>"));
    start(); 
  });


function start(){
  socket = connect(host);

  socket.addEventListener("open", function(event) {
    message("Connected");
    sayHello(myName, socket);
    requestInfo();
  });

  socket.addEventListener("message", function(event) {
    d = JSON.parse(event.data);
    if(d['cmd'] == 'text'){
      changeText(d['from'], d['text'] , d['caret']);
    }else if(d['cmd'] == 'time'){
      doSetTime(d['time'], $('time'));
    }else if(d['cmd'] == 'scoreupdate'){
      setScore(d['scoreblue'], d['scorered']);
    }else if(d['cmd'] == 'setround'){
      doSetRound(d['round']);
    }else if(d['cmd'] == 'blitzstart'){
      setBlitzStart(d['to']);
    }else if(d['cmd'] == 'blitzswitch'){
      setBlitzDisplay(d['from']);
    }else if(d['cmd'] == 'setblitztime'){
      updateBlitzClocks(d['from'], d['time']);
    }else if(d['cmd'] == 'resetblitz'){
      resetBlitzDisplay();
    }else if(d['cmd'] == 'clear'){
      doClearAll();
    }else if(d['cmd'] == 'panneau'){
      setPanneau(d);
    }else if(d['cmd'] == 'blueOnly'){
      $('containerBlue').addClassName('alone');
      $('containerBlue').show();
      $('containerRed').hide();
    }else if(d['cmd'] == 'redOnly'){
      $('containerBlue').hide();
      $('containerRed').addClassName('alone');
      $('containerRed').show();
    }else if(d['cmd'] == 'bothColor'){
      $('containerBlue').removeClassName('alone');
      $('containerRed').removeClassName('alone');
      $('containerBlue').show();
      $('containerRed').show();
    }
  });

  socket.addEventListener("error", function(event) {
    message("Error: " + event);
  });

  socket.addEventListener("close", function(event) {
    message("Not Connected");

  });

}

function requestInfo(){
  jSend({"from" : myName , "cmd" : "diffuse" , "action" : "requestinfo"} , socket);
}
function changeText(client, text, caret){
  var txtA;
  var scroll;

  if(client == 'blue'){
    txtA   = $('textAreaBlue');
    scroll   = $('scrollBlue') ;
  }else if(client == 'red'){
    txtA   = $('textAreaRed');
    scroll   = $('scrollRed') ;
  }else{
    return;
  }

  celSize = 6;
  if(caret < celSize){
    celSize = caret
  }

  celPos = caret - celSize;

  startA  = text.substring(0, celPos) ; 
  startB  = text.substring(celPos, caret-1); 
  end     = text.substring(caret, text.length);
  selText = text.substring(caret-1, caret )


  if(selText == " "){
    selText = "&nbsp;";
    selClass = 'selectionEmpty';
  }else{
    selClass = 'selection';
  }

  if(selText =='\n'){
    selText = '<br>&nbsp';
  }

  sel     = '<span class="' + selClass + ' blink" id="caret' + client +'">' + selText + '</span>';  
  start = startA + startB


  fullText   = start + sel + end;
  fullText   = fullText.replace(/\n/g , " <br> ");


  txtA.update(fullText);

  setScroll(txtA , scroll , $('caret' + client));
}
function setBlitzStart(first){
  $('centerinfo').setStyle({'display' : 'none'})
  $('blitzinfo').setStyle({'display' : 'block'})

  if(first == 'blue'){
    setBlitzDisplay('red');
  }else{
    setBlitzDisplay('blue');
  }
}
function setBlitzDisplay(from){
  if(from == 'blue'){
    $('containerBlue').addClassName('pause');
    $('containerRed').removeClassName('pause');
  }else{
    $('containerRed').addClassName('pause');
    $('containerBlue').removeClassName('pause');
  }
}
function updateBlitzClocks(from, time){
  if(from == 'blue'){
    doSetTime(time, $('bluetime'));
    if(time == 0){
      $('containerBlue').addClassName('pause');
    }

  }else{
    doSetTime(time, $('redtime'));
    if(time == 0){
      $('containerRed').addClassName('pause');
    }
  }
}
function resetBlitzDisplay(){
  $('centerinfo').setStyle({'display' : 'block'})
  $('containerBlue').removeClassName('pause');
  $('containerRed').removeClassName('pause');
  $('blitzinfo').setStyle({'display':'none'});
}
var debutSet = false;
var finSet = false;
function setPanneau(data){
  $('panneau').hide();
  $('panneau').setStyle({'display': 'none'});
  if(data['id'] == 1){
    showDebut();
  }else{
    showFin();
  }
  // $('panneaucontent').update(text);
  // $('panneau').removeClassName('anim');
  // $('panneau').addClassName('anim');
  // // $('panneauwrap').appear(0.2);
  // // $('panneau').appear({ duration: 0.11 , delay : 1});
  // // $('panneau').slideDown({duration:2 , delay : 2});
  // // $('panneauwrap').hide({delay:2.5});
}
function showDebut(){
  if(!debutSet){
    $('debut').setStyle({'display': 'block'});
    $('fin').setStyle({'display': 'none'});
    $('panneau').setStyle({'display': 'block'});
    $('panneau').hide();
    $('panneau').appear({duration:1});
  }
  debutSet = !debutSet;
  finSet = false;
}
function showFin(){
  if(!finSet){
    $('fin').setStyle({'display': 'block'});
    $('debut').setStyle({'display': 'none'});

    $('panneau').setStyle({'display': 'block'});
    $('panneau').hide();
    $('panneau').appear({duration:1});
  }
  finSet = !finSet;
  debutSet = false;
}
function doClearAll(){
  $('textAreaBlue').update('');
  $('textAreaRed').update('');
  resetBlitzDisplay();
}
var lockAct = false;
function doSetRound(leRound){
  if(Effect != undefined && !lockAct){
    lockAct = true;
    $('centerinfo').dropOut({delay:0.3 });
    $('centerinfo').blindDown({delay:1.3 , transition: Effect.Transitions.linear , duration : 0.5 , afterFinish : function(){lockAct=false}});
  }
  setTimeout(function(){setRound(leRound , $('round'));} , 1000)
}

function setFontSize(){
  $('textAreaBlue').setStyle({'fontSize' : masterFont + 'px'});
  $('textAreaRed').setStyle({'fontSize' : masterFont + 'px'});
}

