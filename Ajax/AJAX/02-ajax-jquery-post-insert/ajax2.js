$(document).ready(function() {
    $("#action").click(function(event) {
        event.preventDefault();
        //alert('Test OK');
        ajax(); 
    });

    function ajax()
    {
        var personne = $("#personne").val(); // permet de selectionner la valeur saise dans le champ 'input'
        console.log(personne);

        var parameters = "personne="+personne; // permet de définir les paramètres qui seront envoyés avec la requete HTTP AJAX 'aller'
        // 'personne=' permet de préciser que l'indice $_POST[personne] du fichier ajax2.php sera égal à la valeur que l'on a saisie dans le champ
        // c'est ce paramètre que l'on transmet au fichier PHP via la requète AJAX
        console.log(parameters);

        $.post("ajax2.php", parameters, function(data){
            $("#resultat").html(data.resultat); // on selectionne la div id 'resultat' dans laquelle on accroche la réponse de la requète 'retour' AJAX
            // data.resultat --> 'resultat' correspond au tableau ARRAY définit dans le fichier PHP 
        }, 'json');
        /*
            post() est une méthode JQUERY permettant d'envoyer des requetes AJAX via la méthode 'post'
            arguments : 
            1 --> URL de destination
            2 --> paramètres à transmettre à la requète AJAX
            3 --> en cas de succés, la réponse de la requete 'retour' sera stocké dans 'data'
            4 --> type de donnée, dans notre cas, encodage en JSON pour véhiculer les données

        */
    }
});