<?php
require 'Message.php';
require 'ManagerMessages.php';

class ControllerMessages{

	public function insertMessage(){
		$message = new ManagerMessages(Database::getDatabase());
		$message->insertMessage();
		// voir comment trouver le dernier id
		$id = (int) $->lastInsertId();
		$message->
		$resultat = $message->fetchAll(PDO::FETCH_ASSOC);
		foreach($resultat as $val){
			$var = 'membre' . $resultat['id'];
			$$var = new Membre($resultat);
		}
	}

	public function selectAllMessages(){
		$message = new ManagerMessages(Database::getDatabase());

	}	

}

if(isset($_POST['envoi'])){
	$controller = new ControllerMessages;
	$controller->insertMessage();
	// var_dump($_SESSION);
	// die();
	header('location:../index.php');
}

