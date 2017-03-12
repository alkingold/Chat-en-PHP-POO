<?php

// session_start();

require 'Message.php';
require 'ManagerMessages.php';

class ControllerMessages{

	public function insertMessage(){
		$message = new ManagerMessages(Database::getDatabase());
		$message->insertMessage();
		// voir comment trouver le dernier id
		$id = (int) $message->lastId();
		$resultat = $message->selectId($id)->fetch(PDO::FETCH_ASSOC);
		// var_dump($resultat);
		$var = 'message' . $resultat['id'];
		$$var = new Message($resultat);
	}

	public function selectAllMessages(){
		$message = new ManagerMessages(Database::getDatabase());
		// $resultat = $message->selectAllMessages()->fetchAll(PDO::FETCH_CLASS, 'Message');
		$messages = [];
		$query = $message->selectAllMessages();
		while($resultat = $query->fetch(PDO::FETCH_ASSOC)){
			// var_dump($resultat);
			$messages[] = new Message($resultat);
		}
		return $messages;
	}	

	public function afficherMessages(){
		$affichageMessages = "";
		foreach($this->selectAllMessages() as $value){
			// ligne
			$affichageMessages .= '<div class="row">';
			$affichageMessages .= '<hr>';
			// infos
			$affichageMessages .= '<div class="col-sm-offset-3 col-sm-2">';
			$affichageMessages .= 'Posté par <strong>' . htmlentities($value->pseudo()) . '</strong><br>';
			$affichageMessages .= 'Le <i>' . htmlentities($value->dateAjout()) . '</i>';
			$affichageMessages .= '</div>';
			// message
			$affichageMessages .= '<div class="col-sm-4 alert alert-info">';
			$affichageMessages .= '<strong>' . htmlentities($value->titre()) . '</strong><br>';
			$affichageMessages .= htmlentities($value->message());

			$affichageMessages .= '</div>';

			$affichageMessages .= '</div>';
		}
		return $affichageMessages;
	}

}

if(isset($_POST['envoi'])){
	$controller = new ControllerMessages;
	$controller->insertMessage();
	// var_dump($_SESSION);
	// die();
	header('location:../index.php');
}

//$controller = new ControllerMessages;
// var_dump($controller->selectAllMessages());

