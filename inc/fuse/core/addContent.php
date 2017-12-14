<?php 

//on importe le fichier setting
include('../config/settings.php');


//si on n'a pas reçu de formulaire 
if(empty($_POST))
	//on redirige vers le formulire
	redirect('../back/index.php');
//sinon (on a reçu des donnes)
else{
	
$error = false;

	//si le nom est vide
	if(empty($_POST['titre_page'])){
		//on déclenche une erreur
		$error = true;
		//on crée un message d'erreur
		flash_in('error', 'Le titre de la page est obligatoire');
	}

	
    //fin de si
    }
    

	//si on a vu au moins une erreur
	if($error)
		//on redirige vers le formulaire
		redirect('../back/index.php');
	//sinon 
	else{
        
       
            
		//on crée une requete qui ajoute dans la base
		$add = $db->prepare('INSERT INTO content (created, updated, titre_page, content) VALUES (NOW(), NOW(), :t, :c)');
        
        
		//on ajoute les données du formulaire
		$add->bindParam(':t', $_POST['titre_page'], PDO::PARAM_STR);
        $add->bindParam(':c', $_POST['content'], PDO::PARAM_STR);
       
        
		//on execute la requete
		$add->execute();	
        
        
		//on crée un messsage de validation
		flash_in('success', "Le contenu a été ajouté");

		//on redirige vers la page détail du dvd nouvellement crée
	    redirect('../back/index.php');

    //fin du sinon
	}
