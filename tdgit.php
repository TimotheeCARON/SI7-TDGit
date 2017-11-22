<?php
 // le chemin vers le serveur
$PARAM_port='80';
$bd='ocs'; // le nom de votre base de données
$user='root'; // nom d'utilisateur pour se connecter
$pass='toor'; // mot de passe de l'utilisateur pour se connecter

$link = mysql_connect(172.17.30.224,$user,$pass) or die ('Erreur:'.mysql_error());

mysql_select_db($)or die ('Erreur:'.mysql_error());

$requete = mysql_query("SELECT  * FROM accountinfo")
?>