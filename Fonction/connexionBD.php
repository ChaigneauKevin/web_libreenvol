<?php 
 function BDDConnexionPDO() 
 {  
	// Identique au code de la page 1 :  $hote='localhost';  
	$hote='btsinfo-rousseau53.fr:33019';     	// le chemin vers le serveur
	$port='3306';
	$nomBd='2021-libreenvol_base';     // le nom de votre base de données 
	$utilisateur='2021-libreenvol';    // nom d'utilisateur pour se connecter à la base de données
	$motPasse='meqsxee1';     		// mot de passe de l'utilisateur pour se connecter 
 
try 
 {
   	   $connexion = new PDO('mysql:host='.$hote.';dbname='.$nomBd, $utilisateur, $motPasse);     
	   $connexion->exec("SET CHARACTER SET utf8");   
	   $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
	           return $connexion; 
 } 
 	catch(Exception $e)
 	{ 
	   // Ici se trouve le code à effectuer en cas d’échec de connexion 
	   echo 'Erreur : '.$e->getMessage().'<br />';        
       echo 'N° : '.$e->getCode(); 
	   die; 
 	}  
 }  

?> 