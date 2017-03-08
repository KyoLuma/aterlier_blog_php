<?php 

include_once 'modele/connexion_bdd.php';

if (
	empty($_POST['nom']) OR
	empty($_POST['prenom']) OR
	empty($_POST['age']) OR
	empty($_POST['langage']))
{
	echo "Merci de remplir tout les champs";
}
else{
	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$age = htmlspecialchars($_POST['age']);
	$langage= htmlspecialchars($_POST['langage']);

	$query = $bdd->prepare('INSERT INTO eleve (nom, prenom, age, langage) VALUES (?, ?, ?, ?)');
	$query ->execute(array(
		$nom,
		$prenom,
		$age,
		$langage
		));
	$query->closeCursor();
}

header('Location: index.php');
	

// Recupère les données
//echo $_POST ['nom'];