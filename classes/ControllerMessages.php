<?php
require 'Message.php';

class ControllerMessages{

	public function insertMessage(){
		$message = new ManagerMessages(Database::getDatabase());
		$message->insertMembre();
		$resultat = $membre->membreUnique($_POST['pseudo'])->fetch(PDO::FETCH_ASSOC);
		$var = 'membre' . $resultat['id'];
		$$var = new Membre($resultat);
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
