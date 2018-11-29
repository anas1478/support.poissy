

function myFunction() {
    window.print();
}
var span = document.getElementById("nSociete");
var input = document.getElementById("n_societe");
input.onkeyup=function(){
    span.innerHTML=input.value;
}
