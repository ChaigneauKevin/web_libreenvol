<?php
require_once("Fonction/connexionBD.php");

//retourne le pays dont le code est en paramètre
function getUnPays($cd)
{
    $conn = BDDConnexionPDO();
	$unPays=$conn->prepare("SELECT * FROM pays WHERE cd= ? "); 
	$unPays->execute(array($cd));
	$unPays->setFetchMode(PDO::FETCH_OBJ);
	return $unPays;
}

//retourne tous les pays de la table pays
function getLesPays()
{
    $conn = BDDConnexionPDO();
	$lesPays=$conn->query("SELECT * FROM pays");
	$lesPays->setFetchMode(PDO::FETCH_OBJ); 
	//$lesPays = $resultats->fetchAll();
	return $lesPays;
}

?>

