//Exercice 22

var choix = Number(prompt("Entrez un nombre."));

document.write("<center>"); //Pour centrer les pyramides

for (var y = 0; y <= choix; ++y) //Pour répéter les pyramides
{
   for (var i = 0; i <= 3 + y * 2; i++) //Une loop, qui compte de 0 à 4 (nombre de rangées d'étoiles)
   {
       for (var x = 0; x <= i + y * 2; x++)//Une loop, qui compte de 0 jusqu'à la valeur de i
       {
           document.write("*o*");//Ecrit *o* sur la page
           
       }
       document.write("<br/>"); //Pour revenir à la ligne après chaque rangée d'étoiles
   }
}
document.write('|||||'); //Rajoute un 'tronc' en bas des pyramides
document.write("</center>"); //Ferme le centrage des pyramides ouvert au début

