var td =document.getElementsByTagName('td');
var input = document.getElementsByTagName('input');
var button = document.querySelector('button');


button.onclick =function(e){
    e.preventDefault();
  
    if( input[3].value.length < 10 || input[3].value.length>10){
        alert('vous devez entrer un numero avec 10 chifre');
    }
    else {
        td[4].innerHTML= input[0].value;
        td[5].innerHTML= input[1].value;
        td[6].innerHTML= input[2].value;
        td[7].innerHTML= input[3].value;
    }
    
}
function validateForm() {
    var x = document.forms["myForm"].value;
    if (x == "") {
      alert("veuiller entrer les tous les champs svp");
      return false;
    }
  }