function d(arg) {
	document.write(arg + "<br>");
}

function Personnage(pseudo, sante, niveau, experiences, race, armes, force) {
	this.pseudo = pseudo,
		this.sante = sante,
		this.niveau = niveau,
		this.experiences = experiences,
		this.race = race,
		this.armes = armes,
		this.force = force,
		this.presentation = function (){
			d("voila les caractéristique de votre " + race + " qui sont : <br>");
	d("votre pseudo c'est donc " + pseudo1 + " ok !");
	d("votre santé est de : " + joueur.sante);
	d("votre niveau est de : " + joueur.niveau);
	d("son arme est : " + joueur.armes);
	d("votre force est de : " + joueur.force)
		}
}



var pseudo1 = prompt("entrer votre pseudo");
d("bravo joli prenom " + '\"' + pseudo1 + '\"');

var race = prompt("choisir une race parmis : monstres, guerriers, mages, chasseurs, voleurs");
d("j'aurai choisi aussi un " + race);

if (race == "monstres") {
	joueur = new Personnage(pseudo1, 150, 1, 0, "monstres", "griffe", 90);
	joueur.presentation();
}
else if (race == "guerriers") {
	joueur = new Personnage(pseudo1, 110, 1, 0, "guerriers", "épée", 85);
	joueur.presentation();

}
else if (race == "mages") {
	joueur = new Personnage(pseudo1, 90, 1, 0, "mages", "feu", 50);
	joueur.presentation();
}
else if (race == "chasseurs") {
	joueur = new Personnage(pseudo1, 100, 1, 0, "chasseurs", "arc", 80);
	joueur.presentation();
}
else if (race == "voleurs") {
	joueur = new Personnage(pseudo1, 105, 1, 0, "voleurs", "dague", 70);
	joueur.presentation();
}
else {
	d("choisisez une race qui exisite dans ce jeu")
}
alert(" un mage vous attaque !");

ennemi = new Personnage(pseudo1, 90, 1, 0, "mages", "feu", 50);

var vie = joueur.sante - ennemi.force;


	

d("le mage vous ataque il vous inflige <br> " + ennemi.force + " et il vous reste plus que " + vie);
var action = prompt("2 acions s'offre a vous : ataque , potion");
var ataque = ennemi.sante - joueur.force;//ataque du joueur
// var def = (joueur.sante - ennemi.force)/2;
switch (action) {
	case "ataque":
		d("Vous infliger "+ joueur.force +" de degats l'ennemi lui reste plus que " + ataque + " de point d vie");
		break;

	case "potion":
		var potion = prompt("deux potions : vie ou force");
		vie = vie + ((20 * vie) / 100);
		force = joueur.force + ((15 * joueur.force)/100);
		if (potion == "vie") {
			d("vous avez gagner 20 % de vie votre vie est de : " + vie + " point de vie");
		}
		if (potion == "force") {
			d("vous avez gagner 15 % de force votre force est de : " + force + " point de force !");
		}
		break;
	
}


if (vie === 0) {
	d("vous etes mort !");
	alert("vous etes mort !");
	location.reload();
}

var xp = 50;

if (ataque === 0) {
	d("vous avez ganer vous remportez "+ xp +"d'xp" );
	alert("vous avez ganer vous remportez "+ xp +"d'xp !!!");
	
}

alert(" un voleur vous attaque !");

ennemi= new Personnage(pseudo1, 105, 1, 0, "voleurs", "dague", 70);
d("le mage vous ataque il vous inflige <br> " + ennemi.force + " et il vous reste plus que " + vie);
var action = prompt("2 acions s'offre a vous : ataque , potion");
var ataque = ennemi.sante - joueur.force;//ataque du joueur
// var def = (joueur.sante - ennemi.force)/2;
switch (action) {
	case "ataque":
		d("Vous infliger "+ joueur.force +" de degats l'ennemi lui reste plus que " + ataque + " de point d vie");
		break;

	case "potion":
		var potion = prompt("deux potions : vie ou force");
		vie = vie + ((20 * vie) / 100);
		force = joueur.force + ((15 * joueur.force)/100);
		if (potion == "vie") {
			d("vous avez gagner 20 % de vie votre vie est de : " + vie + " point de vie");
		}
		if (potion == "force") {
			d("vous avez gagner 15 % de force votre force est de : " + force + " point de force !");
		}
		break;
	
}

