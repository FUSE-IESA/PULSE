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

	//si on a recu un fichier
    if(!empty($_FILES['image']['name'])){
        //si il y a eu une erreur pour le fichier
        if($_FILES['image']['error'] !=0){
            //on déclenche une erreur
            $error = true;
            //on crée un message d'erreur
            flash_in('error', 'Fichier invalide, veuillez en essayer un autre.');
		}
        
        //si le fichier ne dépasse pas la taille maximale
        if($_FILES['image']['size'] > $maxFileSize){
            //on déclenche une erreur
            $error = true;
            //on crée un message d'erreur
            flash_in('error', 'Fichier trop grand, taille maximale 1Mo');
        }
        
        //on va vérfier l'extension
        $extensionsValides = ['png', 'jpg', 'jpeg', 'gif'];
        $nomMinuscule = strtolower($_FILES['image']['name']);
        $array = explode('.', $nomMinuscule);
        $extensionFichier = array_pop($array);
        //si l'extension du fichier n'est pas une extension valide
        if(!in_array($extensionFichier, $extensionsValides)){
            //on déclenche une erreur
            $error = true;
            //on crée un message d'erreur
            flash_in('error', "L'extension de votre fichier n'est pas valide.");
        }
        
    }
    
    //fin de si
    }
    

	//si on a vu au moins une erreur
	if($error)
		//on redirige vers le formulaire
		redirect('../back/index.php');
	//sinon 
	else{
        
       
        if($_FILES['image']['name']){
            //on crée un nom pour ce fichier
            $img = 'enfant-'.time().'.'.$extensionFichier;
            
            //on déplace le fichier de la memoire temporaire vers le dossier qui nous interesse
            move_uploaded_file($_FILES['image']['tmp_name'], '../data/'.$img);
        }

       
		//on crée une requete qui ajoute dans la base
		$add = $db->prepare('INSERT INTO enfant (created, updated, nom, prenom, naissance, taille, poid, nb_pas, position_n, position_m, image) VALUES (NOW(), NOW(), :n, :p, :na, :t, :po, :nbp, :pn, :pm, :img)');
        
        
		//on ajoute les données du formulaire
		$add->bindParam(':n', $_POST['nom'], PDO::PARAM_STR);
        $add->bindParam(':p', $_POST['prenom'], PDO::PARAM_STR);
        $add->bindParam(':na', $_POST['naissance'], PDO::PARAM_INT);
        $add->bindParam(':t', $_POST['taille'], PDO::PARAM_INT);
        $add->bindParam(':po', $_POST['poid'], PDO::PARAM_INT);
        $add->bindParam(':nbp', $_POST['nb_pas'], PDO::PARAM_INT);
        $add->bindParam(':pn', $_POST['position_n'], PDO::PARAM_INT);
        $add->bindParam(':pm', $_POST['position_m'], PDO::PARAM_INT);
        $add->bindParam(':img', $img, PDO::PARAM_STR);

        
		//on execute la requete
		$add->execute();	
        
        
		//on crée un messsage de validation
		flash_in('success', "L'enfant a été ajouté");

		//on redirige vers la page détail du dvd nouvellement crée
	    redirect('../back/index.php');

    //fin du sinon
	}
