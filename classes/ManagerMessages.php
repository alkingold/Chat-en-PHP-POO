<?php

class ManagerMessages extends Manager{

	public function insertMessage(){
		$query = $this->database->prepare('INSERT INTO message(titre, contenu, dateAjout) VALUES(:titre, :contenu, now())');
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

}