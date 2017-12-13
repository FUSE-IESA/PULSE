<?php

session_start();

define("SQL_HOST","localhost");
define("SQL_USER", "root");
define("SQL_PASS", "");
define("SQL_DBNAME", "pulse");

try{
	$db = new PDO("mysql:dbname=".SQL_DBNAME.";charset=utf8;host=".SQL_HOST,SQL_USER,SQL_PASS);
}catch(Execption $e){
	die('Erreur : ' . $e->getMessage());
}


//on fixe la taille maximale pouur l'envo de fichier
$maxFileSize = 1048576; //=1Mo

$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", //gérer l'encodage
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //récuperation des valeurs bdd sous forme de tableau associatif
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    //affichage des erreurs. 
);


//on charge un fichier de fonctions
include('functions.php');