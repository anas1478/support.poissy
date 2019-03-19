<?php
session_start();
// connexion a la base de donnee
$xml = simplexml_load_file(__DIR__ . '/app/config.xml');
// $db = new PDO("mysql:host=$xml->host;dbname=$xml->db;", $xml->user, $xml->mdp);
// $db = new PDO("mysql:host=localhost;dbname=portfolio;",'root', '');


//connexion a la base de donne

function connect($host, $database, $user, $pass){
    return new PDO("mysql:host=$host; dbname=$database", $user, $pass);
}

$db = connect($xml->host, $xml->db, $xml->user, $xml->mdp);