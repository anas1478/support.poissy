console.log("bienvenue");
solution=Math.floor(Math.random ()*100) +1;
console.log(solution);
for(var i = 0; i <=6; i++);(essai=Number(prompt("assayer de deviner un chifre etre 1 et 100 compris attention bous avez que 6 essais"))){

if(essai===solution){
    alert("vous avez trouver!");
    
}
else if (essai>solution){
    alert("le chifre magique est plus petit ..")
    
}
else if (essai<solution){
    alert("le chifre magique est plus grand ..")
    
}
}
