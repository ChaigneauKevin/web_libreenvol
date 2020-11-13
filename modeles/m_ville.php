<?php
require_once("Fonction/connexionBD.php");

//retourne toutes la table ville
function getLesVilles()
{
    $conn = BDDConnexionPDO();
	$uneVille=$conn->prepare("SELECT * FROM ville"); 
	$lesVilles->setFetchMode(PDO::FETCH_OBJ); 
	return $lesVilles;
}

//retourne les ville d'un seul pays dont le code est passer en paramètre
function getDesVille($code)
{
    $conn = BDDConnexionPDO();
    $uneVille = $conn->prepare("SELECT * FROM ville WHERE code_pays = ?");
    $uneVille->execute(array($code));
	$uneVille->setFetchMode(PDO::FETCH_OBJ);	
	return $uneVille;
}

function getUneVille($nom)
{
	$conn = BDDConnexionPDO();
	$uneVille = $conn->prepare("SELECT * FROM ville WHERE nom = ?");
	$uneVille->execute(array($nom));
	$uneVille->setFetchMode(PDO::FETCH_OBJ);
	return $uneVille;
}

?>