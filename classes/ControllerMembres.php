<?php

session_start();

require 'Membre.php';
require 'ManagerMembres.php';

class ControllerMembres{

	public function insertMembre(){
		
		$membre = new ManagerMembres(Database::getDatabase());
		if($membre->membreUnique($_POST['pseudo'])->rowCount() == 0){
			$membre->insertMembre();
			$resultat = $membre->membreUnique($_POST['pseudo'])->fetch(PDO::FETCH_ASSOC);
			$var = 'membre' . $resultat['id'];
			$$var = new Membre($resultat);
			// var_dump($resultat);
			$_SESSION['membre']['pseudo'] = $resultat['pseudo'];
			$_SESSION['membre']['id'] = $resultat['id'];
			// var_dump($_SESSION);
		
		}
	}

	public function connexionMembre(){
		
		$membre = new ManagerMembres(Database::getDatabase());
		if($membre->connexionMembre()->rowCount() != 0){
			$resultat = $membre->connexionMembre()->fetch(PDO::FETCH_ASSOC);
			// var_dump($resultat);
			$_SESSION['membre']['pseudo'] = $resultat['pseudo'];
			$_SESSION['membre']['id'] = $resultat['id'];
			// var_dump($_SESSION);
		
		}
	}

}

if(isset($_POST['inscription'])){
	$controller = new ControllerMembres;
	$controller->insertMembre();
	// var_dump($_SESSION);
	// die();
	header('location:../index.php');
}

if(isset($_POST['connexion'])){
	$controller = new ControllerMembres;
	$controller->connexionMembre();
	// var_dump($_SESSION);
	// die();
	header('location:../index.php');
}
