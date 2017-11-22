<?php
$PARAM_hote='172.17.30.224'; // le chemin vers le serveur
$PARAM_port='80';
$PARAM_nom_bd='ocs'; // le nom de votre base de données
$PARAM_utilisateur='root'; // nom d'utilisateur pour se connecter
$PARAM_mot_passe='toor'; // mot de passe de l'utilisateur pour se connecter
?>

<?php


function connectionBDD(){
	include 'configBdd.php';
	try
	{
	        $connexion = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
	        //$connexion = new PDO('mysql:host=localhost;dbname=mission3', 'root', 'root');
	}
	  
	catch(Exception $e)
	{
	        echo 'Une erreur de connexion à la BDD est survenue !';
	        die();
	}
	return $connexion;
}

function nbLignesRequete($requete){
	$connexion = connectionBDD();
	$req = $connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

	return $req->rowcount();
}

function select($requete){
	$connexion = connectionBDD();
	$req=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

	return $req;
}


?>