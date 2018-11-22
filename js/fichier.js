function d(arg) {
    document.write(arg + "<br>");
}

/*
-- 01 -- Commentaires, Affichage, Concaténation
-- 02 -- Variables, Constantes, type de données

-- 03 -- Opérateurs (logiques et arithmétiques)
-- 04 -- Les conditions

-- 05 -- Les boucles
-- 06 -- Fonctions (utilisateurs et prédéfinies)

-- 07 -- Array (tableaux)
-- 08 -- Object (objets)
*/

// commentaire sur une seule ligne

// alert("J'affiche quelque chose");
console.log("bonjour je suis dans la console");

document.write("<h2>Commentaires, Affichage, Concaténation </h2>");

document.write("bonjour " + "je m'appelle" + " " + "Julie");

document.write("<h2>Variables, Constantes, Type de données</h2>");

/* 
   Définition : une variable est un espace nomé, appelé mémoire, qui permet de conserver le temps d'éxécution du script.
*/

// INTERDIT !
// MAVARIABLE Mavariable ma variable ma-variable ma/variable*
// é è ï â  01maVariable, attention aux noms de variables déjà réservés.

var maVariable = 1;
var monTexte = "du texte";
var monTableau = [1, 2, 3];
var monTableau2 = ["a", "b", "c"];

var maVariable2;
maVariable2 = 3;

var nom = "Dupont", prenom = "Pierre";

document.write(monTexte + maVariable);

document.write("<br>");

//exercice : déclarer une variable qui a pour valeur 15 et l'afficher
var nombre = 15;
console.log(nombre);
document.write(nombre);

document.write("<br>");

//reprendre la variable qye vous avez déclaré et lui donner une nouvelle valeur (8 par exemple) et l'afficher. Que ce passe-t-il ?
nombre = 7;
d(nombre);
console.log(nombre);


var fruits = "pomme"; //pomme fraise
d(fruits);

// pomme = pomme + fraise
fruits = fruits + "fraise";
d(fruits);

fruits += "banane";
d(fruits);

const MA_VARIABLE = 20;
d(MA_VARIABLE);

d(typeof MA_VARIABLE + " " + typeof fruits + " " + typeof monTableau);
console.log(typeof monTableau);

//exercice : declarer 3 variables (nom, prénom et age) et afficher une belle présentation "je m'appelle ..." ensuite afficher le type de nos variables.
var prenom = "Julie";
var nom = "Buisson";
var age = 22;
age += " ans";

d("je m'appelle " + prenom + " " + nom + " " + "et j'ai " + age);
d(typeof prenom + " " + typeof nom + " " + typeof age);


d("<h2>Opérateurs (logiques et arithmétiques)</h2>");

var nbr1 = 2, nbr2 = 3, resultat;
resultat = nbr1 + nbr2;

// 2 = 2 + 3
nbr1 += nbr2;

// 0 = 5
resultat = nbr1;
d(resultat);

resultat = nbr1 - nbr2;
d(resultat);

resultat = nbr1 / nbr2;
d(resultat);

resultat = nbr1 * nbr2;
d(resultat);

// -=  /=  *=  %

/* 
> strictement superieur
< strictement inferieur
>= superieur ou egal
<= inferieur ou egal
= affectation
== comparaison de valeur
=== comparaison de valeur ET type
!= different de.
*/

// if (condition) {
//     instruction
// }

d("<h2>Les conditions</h2>");

var a = 4, b = 4, c = 8;

if (a == b) {
    d("oui a est égal à b");
}

if (a > c) {
    d("oui a est plus grand que c");
} else {
    d("non a n'est pas plus grand que c");
}

// &&
if (a == b && c > b) {
    d("true");
} else {
    d("false");
}

// ||
if (a == b || c < b) {
    d("true");
} else {
    d("false");
}

//exercice : j'ai 3 variables 78, 45, 103 vérifier si 103 est plus grand que 78 ? Si c'est le cas afficher la valeur de la variable la plus grande.
//Ensuite verifier si 45 est plus grand que 78 ou si 103 est plus grand que 78 et afficher la valeur la plus grande.

var x = 45, y = 78, z = 103;

if (z > y) {
    d(z);
}

if (x > y || z > y) {
    d(z);
}


var nbr6 = 10;

if (nbr6 > 10) {
    d("fait quelque chose");
} else if (nbr6 != 10) {
    d("fait autre chose");
} else if (nbr6 == 10) {
    d("oui 10 est egal à 10");
} else {
    d("aucune des conditions n'est vérifiée");
}


var couleur = "jaune";

switch(couleur){
    case "bleu":
    d("j'aime le bleu");
    break;
    case "rose":
    d("j'aime le rose");
    break;
    case "jaune":
    d("j'aime le jaune");
    break;
    default:
    d("j'aime aucune de ces couleurs");
    break;
}

// ===

if("1" == 1){
    d("true");
} else{
    d("false");
}

if("1" === 1){
    d("true");
} else{
    d("false");
}

var dutext = "un texte";
if(typeof dutext != "string"){
    d("true");
}else {
    d("false");
}

// is not a number
if(isNaN(nbr6)){
    d("true");
} else{
    d("false");
}

//Si ce n'est pas !
if(!isNaN(nbr6)){
    d("true");
}else {
    d("false");
}

//condition ternaire

var voiture = "bmw";
// (voiture == "bmw") ? "oui" : "non"
d((voiture == "bmw") ? "oui" : "non" );

//prompt()
//prompt("veuillez saisir votre nom :");

//exercice : demandez l'aga de l'utilisateur et ensuite afficher un messafe si il est mineur ou majeur. 
//ATTENTION : si l'utilisateur saisi autre chose qu'un nombre afficher un msg d'erreur.
//parseInt()

// var tonAge = parseInt(prompt("Veuillez saisir votre age :"));

// if(tonAge <= 17){
//     alert("Vous êtes mineur");
// } else if(tonAge >= 18 && tonAge <= 119){
//     alert("Vous êtes majeur");
// } else if(tonAge >=120){
//     alert("Vous êtes probablement immortel")
// } else{
//     alert("Critical Error !");
// }



d("<h2>Boucles</h2>");

// incrémentation
for ( var i = 0; i <= 10; i++) {
    d("je suis le message numéro " + i);
}

d("<br>");

// décrémentation
for( var i = 10; i >= 0; i--) {
    d("je suis le message numéro " + i);
}

d("<br>");

//boucle While
var j = 0;
while(j <= 10){
    d("Je suis le message " + j);
    j++;
}

d("<br>");

//do while
var k = 0;
do{
    d("Message n°" + k);
    k++;
} while(k <= 10)


d("<br>");

//exercice : demander à l'utilisateur d'entrer son age, tant que la valeur entrée par l'utilisateur n'est pas un nombre.

var age;

console.log(typeof age);

// do{
//     age = parseInt (prompt("Veuillez saisir votre âge :"));
//     console.log(typeof age);
//     if(age >= 18){
//         d("Vous êtes majeur");
//     } else{
//         d("Vous êtes mineur");
//     }
// }while(isNaN(age))


d("<h2>Fonctions prédéfinies et utilisateurs</h2>");

document.write("du texte <br>");

var unePhrase = "bonjour comment vas-tu ?";
d(unePhrase.toUpperCase());

function addition(valeur1, valeur2){
    d("J'appelle la fonction addition");
    return valeur1 + valeur2;
}
d(addition(1,6));

//exercice : faire une fonction qui calcule la TVA d'un prix. (19.6)

function tva(prixHT){
    var prixTTC = prixHT * (1+0.196);
    return prixTTC;
}

d(tva(100));

//cree une fonction appliquer tva2 qui permet de calculer le prix ttc 
function appliquerTVA2(prixHT,TVA){
    var prixTTC = prixHT * (1+TVA/100);
 
    return prixTTC.toFixed(2);//afficher deux chifre apres la virgule 

}
d(appliquerTVA2(155,5.5));
// plusieurs façon d'ecrir une fonction 3 au final
(function(){
    d("bonjour je suis une fonction anonyme");
})();



//plusieurs manière d'écrire une fonction
//1 = ne fonctionne pas
// function maFonction = function(){
//     d("Je suis maFonction.");
// }
//2
var maFonction = function(){
    d("Je suis maFonction2 <br>");
}
maFonction();
//3  -- pas de nom -->entre parenthèse, la derniere ()-->l'auto-execution
(function(){
    d("Bonjour je suis la fonction anonyme");
})();

//exercice: ecrire une fonction qui contrôle l'age de l'utilisateur

function verifierAge(age){
    do{
        age = parseInt (prompt("Veuillez saisir votre âge :"));
        if(age >= 18){
            d("Vous êtes majeur");
        } else{
            d("Vous êtes mineur");
        }
     }while(isNaN(age))
    }
    verifierAge();



    function presentation(nom,prenom){
       
           
            nom = (prompt("Veuillez saisir votre nom :"));
            prenom = (prompt("Veuillez saisir votre prenom :"));
            d(" je m'appelles " + nom +" "+ prenom);
           
         
        }
        presentation();

        function afficherPhrase(nombre){
            for ( var i = 1;i<= nombre ; i++){
                d("hello world " + i);
            }
        }
        afficherPhrase(10);

        function presentationFinal(){
            presentation();
            verifierAge(age);
            
        }
        presentationFinal();
        //ecrire une fonction qui verifie le type de donée
        // d'une variable par exemple verifie(maVarible)

        
        //ecrir une fonction qui affiche un message pour 
        // informer l'utilisateur si la variable qu'il teste 
        // est de type "chaine de caractaire" ou "nombre"
        // par exemple verifier(variable)---->
        //"votre varible est de type:""
        function verifier(variable){

            if(typeof variable==="number"){
                d("votre variable est de type number");
            }
            if(typeof variable==="string"){
                d("votre variable est de type string");
            }
            
        }
        var x = 2;
        verifier(x);
        


  var y = "blala";
  verifier(y);
  d("<h2> Array (les tableaux)</h2>");
  var liste_de_fruits = ["fraise","pomme","banane","fraise","pomme","banane","fraise","pomme","banane"];
  d(liste_de_fruits);
  console.log(liste_de_fruits);
  for(var i= 0; i<liste_de_fruits.length; i++){
      d(liste_de_fruits[i]);
  }
  //afficher seulement les banane
d("<br>");
  for(var i= 0; i<liste_de_fruits.length; i++){
      if(liste_de_fruits[i]==="banane"){
    d(liste_de_fruits[i]);
      }
}
for( var indice in liste_de_fruits){
    d(indice + " : " + liste_de_fruits[indice]);
}
//afficher que le peches
for( var indice in liste_de_fruits){
    if(liste_de_fruits[indice]=="fraise"){
    d(indice + " : " + liste_de_fruits[indice]);
    }
}
var contact = [["bernard","jean","paul","rachid"],[78,14,47,18,6]];

console.log(contact);
for(var i = 0; i < contact.length; i++) {

   for (var eme = 0; eme < contact[i].length; eme++){
   d("tableau " + i + " indice numero " + eme + " " + contact[i][eme]);
   }

}
d("<h2>Object</h2>");

 var monObjet = {};
 monObjet.nom = "YOUSFI";
 monObjet.prenom ="anas";
 monObjet.age = 25;

 d(monObjet.prenom + " "+ monObjet.nom);

 var Humain= {
     sexe: "male",
     origine:"x ou y",
     age: 45
 }
 d(Humain.sexe);

 var Voiture =  {
    marque: "Mercedes",
    modele: "Class A",
    couleur: "noir",
    changerCouleur:function(nouvelleCouleur) {
        return this.couleur = nouvelleCouleur;
    },
    optionsDeSerie: ["clim", "auto-radio", "park-assist"],
    annee: 2017,
    motorisation: {
        energie: "diesel",
        puissance: "110 cv"
    }
};

d(Voiture.modele);
// Voiture.changerCouleur("violet");
d(Voiture.couleur);
d(Voiture.optionsDeSerie[1]);
d(Voiture.motorisation.energie);


for(var elements in Voiture) {
    d("mes proprietees : " + elements + " valeur " + Voiture[elements]);
    if(typeof Voiture[elements] == "object"){
        for(var ele in Voiture.motorisation){
            d("propriété : " + ele + "valeur : " + Voiture.motorisation[ele]);
        }
    }
}