<?php

session_start();

define("SQL_HOST","localhost");
define("SQL_USER", "root");
define("SQL_PASS", "");
define("SQL_DBNAME", "fuse");

try{
	$db = new PDO("mysql:dbname=".SQL_DBNAME.";charset=utf8;host=".SQL_HOST,SQL_USER,SQL_PASS);
}catch(Execption $e){
	die('Erreur : ' . $e->getMessage());
}


//on fixe la taille maximale pouur l'envo de fichier
$maxFileSize = 1048576; //=1Mo


//on charge un fichier de fonctions
include('functions.php');