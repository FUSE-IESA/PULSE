<?php 

//on importe le fichier setting
include('../config/settings.php');


//si on n'a pas reçu de formulaire 
if(empty($_POST)){
	

//sinon (on a reçu des donnes)
}else{
	
$error = false;

	//si le nom est vide
	if(empty($_POST['nom'])){
		//on déclenche une erreur
		$error = true;
		//on crée un message d'erreur
		flash_in('error', 'Le nom est obligatoire');
	}

	//si le prenom est vide
	if(empty($_POST['prenom'])){
		//on déclenche une erreur
		$error = true;
		//on crée un message d'erreur
		flash_in('error', 'Le prénom est obligatoire');
		}

    //si le prenom est vide
    if(empty($_POST['naissance'])){
        //on déclenche une erreur
        $error = true;
        //on crée un message d'erreur
        flash_in('error', 'La date de naissance est obligatoire');
        }

    //si le prenom est vide
    if(empty($_POST['taille'])){
        //on déclenche une erreur
        $error = true;
        //on crée un message d'erreur
        flash_in('error', 'La taille est obligatoire');
        }

    //si le prenom est vide
    if(empty($_POST['poids'])){
        //on déclenche une erreur
        $error = true;
        //on crée un message d'erreur
        flash_in('error', 'Le poids est obligatoire');
        }
    
    //fin de si
    }
    

	//si on a vu au moins une erreur
	if($error){
		//on redirige vers le formulaire
		redirect('../index.php');
	//sinon 
	}else{
        
       if(isset($_GET['vu'])){
       	$vu = 2;
       }else{
        $vu = 1;
       }


       if(isset($_GET['darons'])){
       	$darons = 2;
       }else{
        $darons = 1;
       }   

       if(empty($_POST)){
	       $film = $db->prepare('SELECT * FROM film WHERE id = :e');
	       $film->bindParam(':e', $_GET['id'], PDO::PARAM_INT);
	       $film->execute();
	       $data = $film->fetch(PDO::FETCH_ASSOC);

	       $id = $_GET['id'];
	       $titre = $data['titre'];
	       $categorie = $data['categorie'];
	       $date = $data['date_sortie'];

   		}else{       

	       $id = $_POST['id'];
	       $titre = $_POST['titre'];
	       $categorie = $_POST['categorie'];
	       $date = $_POST['date_sortie'];

       }

        
		//on crée une requete qui ajoute dans la base
		$add = $db->prepare('UPDATE film SET updated = NOW(), titre = :t, categorie = :c, date_sortie =:d, vu = :v, darons = :da WHERE id = :i');
        
        
		//on ajoute les données du formulaire
		$add->bindParam(':i', $id, PDO::PARAM_INT);
		$add->bindParam(':t', $titre, PDO::PARAM_STR);
        $add->bindParam(':c', $categorie, PDO::PARAM_STR);
        $add->bindParam(':d', $date, PDO::PARAM_INT);
        $add->bindParam(':v', $vu, PDO::PARAM_INT);
        $add->bindParam(':da', $darons, PDO::PARAM_INT);

        
		//on execute la requete
		$add->execute();	
        
        
		//on crée un messsage de validation
		flash_in('success', "Le film a été ajouté");

		//on redirige vers la page détail du dvd nouvellement crée
		redirect('../index.php');
	
    //fin du sinon
	}
