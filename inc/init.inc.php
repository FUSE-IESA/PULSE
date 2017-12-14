<?php
session_start();
#gestion des erreurs d'affichage :
error_reporting(E_ALL);
ini_set("display_errors",1);
// CONNEXION A LA DB
//connexion base de donnée :
define('SGBD', 'mysql'); // type de bdd
define('HOSTNAME', 'localhost'); //domaine du serveur
define('USER', 'root'); // nom utilisateur
//define('PASSWORD', '');
define('PASSWORD', 'root'); // pour utilisateur mac
define('DATABASE', 'pulse'); // nom de la base de donnée

$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", //gérer l'encodage
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //récuperation des valeurs bdd sous forme de tableau associatif
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    //affichage des erreurs. (A commenter en production pour le projet de site )
);

try{ //(type de base,nom de l'hote,bdd,utilisateur,mdp,option)
    $pdo = new PDO(SGBD.':host='.HOSTNAME. ';dbname='. DATABASE,USER,PASSWORD,$options); // création d'un objet pdo
}
catch(Exception $e){ //en cas d'erreur, on affiche le type d'erreur
    die('Erreur BD  : '.$e->getMessage());
}