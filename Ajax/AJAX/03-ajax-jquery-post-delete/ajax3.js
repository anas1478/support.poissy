$(document).ready(function() {
    $("#submit").click(function(event) {
        event.preventDefault();
        //alert("Tout est OK!!");
        ajax("afficher");
    });
    $("#submit2").click(function(event) {
        event.preventDefault();
        //alert("Tout est OK!!");
        ajax("supprimer");
    });

    function ajax(req)
    {
        var id = $("#personne").val();
        console.log(id);

        var parameters = "id="+id+"&type="+req; // id=780
        console.log(parameters);

        $.post("ajax3.php", parameters, function(tab) {
            $("#employes").html(tab.resultat);
            console.log(tab.resultat);
        }, 'json');
    }
});