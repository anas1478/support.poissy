//Exercice 20
alert("Hello et bienvenue dans cette partie de Chiffoumi en 3 manches !")
var chifoumi = String(prompt("Veuillez choisir : Pierre ? Feuille ? ou Ciseaux ?"));



var ordi = Math.floor(Math.random() * 15);
var scoreO = 0;
var scoreC = 0;


if (ordi < 5) {
    ordi = "Pierre";
    console.log(ordi);
} else if (ordi >= 5 && ordi <= 10) {
    ordi = "Ciseaux";
    console.log(ordi);
} else if (ordi > 10) {
    ordi = "Feuile";
    console.log(ordi);
}


if (chifoumi == "Pierre" || chifoumi == "pierre" || chifoumi == "PIERRE") {
    chifoumi = "Pierre";
    console.log(chifoumi);
} else if (chifoumi == "feuille" || chifoumi == "Feuille" || chifoumi == "FEUILLE") {
    chifoumi = "Feuille";
    console.log(chifoumi);
} else if (chifoumi == "ciseaux" || chifoumi == "Ciseaux" || chifoumi == "CISEAUX") {
    chifoumi = "Ciseaux";
    console.log(chifoumi);
} else {
    alert("Erreur");
}



if (ordi == chifoumi) {
    alert("Egalité !");
    scoreO += 1;
    scoreC += 1;
    console.log(scoreO + ' ' + scoreC);
}
else if (ordi == "Ciseaux" && chifoumi == "Pierre" || ordi == "Pierre" && chifoumi == "Feuille" || ordi == "Feuille" && chifoumi == "Ciseaux") {
    alert("Gagné !");
    scoreC += 1;
    console.log(scoreO + ' ' + scoreC);
}
else if (chifoumi == "Feuille" && ordi == "Ciseaux" || chifoumi == "Pierre" && ordi == "Feuille" || chifoumi == "Ciseaux" && ordi == "Pierre") {
    alert("Perdu !");
    scoreO += 1;
    console.log(scoreO + ' ' + scoreC);
}


var chifoumi = String(prompt("Veuillez choisir : Pierre ? Feuille ? ou Ciseaux ?"));



var ordi = Math.floor(Math.random() * 15);



if (ordi < 5) {
    ordi = "Pierre";
    console.log(ordi);
} else if (ordi >= 5 && ordi <= 10) {
    ordi = "Ciseaux";
    console.log(ordi);
} else if (ordi > 10) {
    ordi = "Feuile";
    console.log(ordi);
}

if (chifoumi == "Pierre" || chifoumi == "pierre" || chifoumi == "PIERRE") {
    chifoumi = "Pierre";
    console.log(chifoumi);
} else if (chifoumi == "feuille" || chifoumi == "Feuille" || chifoumi == "FEUILLE") {
    chifoumi = "Feuille";
    console.log(chifoumi);
} else if (chifoumi == "ciseaux" || chifoumi == "Ciseaux" || chifoumi == "CISEAUX") {
    chifoumi = "Ciseaux";
    console.log(chifoumi);
} else {
    alert("Erreur");
}



if (ordi == chifoumi) {
    alert("Egalité !");
    scoreO += 1;
    scoreC += 1;
    console.log(scoreO + ' ' + scoreC);
}
else if (ordi == "Ciseaux" && chifoumi == "Pierre" || ordi == "Pierre" && chifoumi == "Feuille" || ordi == "Feuille" && chifoumi == "Ciseaux") {
    alert("Gagné !");
    scoreC += 1;
    console.log(scoreO + ' ' + scoreC);
}
else if (chifoumi == "Feuille" && ordi == "Ciseaux" || chifoumi == "Pierre" && ordi == "Feuille" || chifoumi == "Ciseaux" && ordi == "Pierre") {
    alert("Perdu !");
    scoreO += 1;
    console.log(scoreO + ' ' + scoreC);
}


var chifoumi = String(prompt("Veuillez choisir : Pierre ? Feuille ? ou Ciseaux ?"));



var ordi = Math.floor(Math.random() * 15);



if (ordi < 5) {
    ordi = "Pierre";
    console.log(ordi);
} else if (ordi >= 5 && ordi <= 10) {
    ordi = "Ciseaux";
    console.log(ordi);
} else if (ordi > 10) {
    ordi = "Feuile";
    console.log(ordi);
}

if (chifoumi == "Pierre" || chifoumi == "pierre" || chifoumi == "PIERRE") {
    chifoumi = "Pierre";
    console.log(chifoumi);
} else if (chifoumi == "feuille" || chifoumi == "Feuille" || chifoumi == "FEUILLE") {
    chifoumi = "Feuille";
    console.log(chifoumi);
} else if (chifoumi == "ciseaux" || chifoumi == "Ciseaux" || chifoumi == "CISEAUX") {
    chifoumi = "Ciseaux";
    console.log(chifoumi);
} else {
    alert("Erreur");
}



if (ordi == chifoumi) {
    alert("Egalité !");
    scoreO += 1;
    scoreC += 1;
    console.log(scoreO + ' ' + scoreC);
}
else if (ordi == "Ciseaux" && chifoumi == "Pierre" || ordi == "Pierre" && chifoumi == "Feuille" || ordi == "Feuille" && chifoumi == "Ciseaux") {
    alert("Gagné !");
    scoreC += 1;
    console.log(scoreO + ' ' + scoreC);
}
else if (chifoumi == "Feuille" && ordi == "Ciseaux" || chifoumi == "Pierre" && ordi == "Feuille" || chifoumi == "Ciseaux" && ordi == "Pierre") {
    alert("Perdu !");
    scoreO += 1;
    console.log(scoreO + ' ' + scoreC);
}

if (scoreO == scoreC) {

    alert("egalite des maches")
}
if (scoreO > scoreC) {

    alert("t'as perdu le jeu ")
}
if (scoreO < scoreC) {

    alert("gagne la partie")
}







    // if (i < 3) {
    //     console.log(i)
    //     if (scoreO == scoreC) {
    //         console.log(scoreO + ' ' + scoreC);
    //     } else if (scoreO < scoreC) {
    //         console.log(scoreO + ' ' + scoreC);
    //     } else if (scoreO > scoreC) {
    //         console.log(scoreO + ' ' + scoreC);
    //     }
    // }
    // else if (i >= 3) {
    //     alert("Le jeu est fini !")
    // }