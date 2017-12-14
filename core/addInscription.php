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
	redirect('../stats.php');
//sinon (on a reçu des donnes)
else{
	
$error = false;
    
	//si le nom est vide
	if(empty($_POST['nom'])){
		//on déclenche une erreur
		$error = true;
	}
    
    //si le nom est vide
	if(empty($_POST['mail'])){
		//on déclenche une erreur
		$error = true;
	}
    
    //si le nom est vide
	if(empty($_POST['mdp'])){
		//on déclenche une erreur
		$error = true;
	}
    
    //si le nom est vide
	if(empty($_POST['conf'])){
		//on déclenche une erreur
		$error = true;
	}
    
    //fin de si
    }

//si on a vu au moins une erreur
	if($error){
		//on redirige vers le formulaire
		redirect('../stats.php');
	//sinon 
	}else{
        //on crée une requete qui ajoute dans la base
        $add = $pdo->prepare('INSERT INTO inscription (created, nom, mail, mdp, conf_mdp) VALUES (NOW(), :n, :m, :mdp, :c)');

        $add->bindParam(':n', $_POST['nom'], PDO::PARAM_STR);
        $add->bindParam(':m', $_POST['mail'], PDO::PARAM_STR);
        $add->bindParam(':mdp', $_POST['mdp'], PDO::PARAM_STR);
        $add->bindParam(':c', $_POST['conf'], PDO::PARAM_STR);

        $add->execute();	
        
        

        redirect('../merci.php');
    }
