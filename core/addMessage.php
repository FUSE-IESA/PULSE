<?php
include "../inc/init.inc.php";

        function redirect($page){
	//redirection
	header('Location: '.$page);
	//on bloque le reste des executions
	exit();
}

//si on n'a pas reçu de formulaire 
if(empty($_POST))
	//on redirige vers le formulire
	redirect('../contact.php');
//sinon (on a reçu des donnes)
else{
	
$error = false;
    
	//si le nom est vide
	if(empty($_POST['nom'])){
		//on déclenche une erreur
		$error = true;
	}
    
    //si le nom est vide
	if(empty($_POST['email'])){
		//on déclenche une erreur
		$error = true;
	}
    
    //si le nom est vide
	if(empty($_POST['message'])){
		//on déclenche une erreur
		$error = true;
	}
    
    //fin de si
    }

//si on a vu au moins une erreur
	if($error){
		//on redirige vers le formulaire
		redirect('../contact.php');
	//sinon 
	}else{
        //on crée une requete qui ajoute dans la base
        $add = $pdo->prepare('INSERT INTO message (created, nom, email, message) VALUES (NOW(), :n, :e, :m)');

        $add->bindParam(':n', $_POST['nom'], PDO::PARAM_STR);
        $add->bindParam(':e', $_POST['email'], PDO::PARAM_STR);
        $add->bindParam(':m', $_POST['message'], PDO::PARAM_STR);

        $add->execute();	
        


        redirect('../merci1.php');
    }
