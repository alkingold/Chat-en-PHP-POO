<?php

session_start();

require 'Manager.php';

class ManagerMessages extends Manager{

	public function insertMessage(){
		$query = $this->database->prepare('INSERT INTO message(idMembre, titre, message, dateAjout) VALUES(:idMembre, :titre, :message, now())');
		$query->bindValue(':idMembre', $_SESSION['membre']['id']);
		$query->bindValue(':titre', $_POST['titre']);
		$query->bindValue(':message', $_POST['message']);
		$query->execute();
	}

	public function selectAllMessages(){
		$query = $this->database->query('SELECT message.id, message.idMembre, message.titre, message.message, 
			DATE_FORMAT(message.dateAjout, \'%d/%m/%Y à %H:%i\') as dateAjout, membre1.pseudo, membre1.id 
			FROM message 
			INNER JOIN membre1 ON membre1.id = message.idMembre ORDER BY message.dateAjout DESC');
		return $query;
	}

	public function selectId($id){
		$query = $this->database->prepare('SELECT * FROM message WHERE id = :id');
		$query->bindValue(':id', $id, PDO::PARAM_INT);
		$query->execute();
		return $query;
	}

}