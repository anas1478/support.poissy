var math=Number(prompt("entrer votre notes en mathématiques"));
var fr=Number(prompt("entrer votre note en fraçais"));
var his=Number(prompt("enfin enter votre note d'histoire"));

var moyenne=((math+fr+his))/3;
alert("votre moyenne est de "+ moyenne);

if (moyenne<10){
    alert("recalé(tkt l'année prochaine)");
}
else if (moyenne >=10 && moyenne <=12){
    alert("reçu");
}
else if ( moyenne>12){
    alert("reçu avec mention");
}
