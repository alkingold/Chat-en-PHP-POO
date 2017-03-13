<?php

class ManagerMessages extends Manager{

	public function insertMessage(){
		$query = $this->database->prepare('INSERT INTO message(idMembre, titre, contenu, dateAjout) VALUES(:idMembre, :titre, :contenu, now())');
		$query->bindValue(':idMembre', $_SESSION['id']);
		$query->bindValue(':titre', $_POST['titre']);
		$query->bindValue(':contenu', $_POST['contenu']);
		$query->execute();
		return $query;
	}

	public function selectAllMessages(){
		$query = $this->database->query('SELECT message.id, message.id_membre, message.titre, message.contenu, 
			DATE_FORMAT(message.dateAjout, \'%d/%m/%Y %H:%i\') as date_fr, membre.pseudo, membre.id 
			FROM message 
			INNER JOIN membre ON membre.id = message.id_membre ORDER BY message.dateAjout DESC');
		return $query;
	}

	public function selectId($id){
		$query = $this->database->prepare('SELECT * FROM message WHERE id = :id');
		$query->bindValue(':id', $id, PDO::PARAM_INT);
	}

}