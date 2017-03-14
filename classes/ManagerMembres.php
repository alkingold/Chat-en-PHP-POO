<?php

require 'Manager.php';

class ManagerMembres extends Manager{

	private $_erreur = "";

	public function membreUnique($pseudo){
		$query = $this->database->prepare('SELECT * FROM membre1 WHERE pseudo = :pseudo');
		$query->bindValue(':pseudo', $_POST['pseudo']);
		$query->execute();
		// return $query->rowCount();
		return $query;
	}

	public function insertMembre(){
		$query = $this->database->prepare('INSERT INTO membre1(pseudo, mot_de_passe) VALUES(:pseudo, :mot_de_passe)');
		$query->bindValue(':pseudo', $_POST['pseudo']);
		$query->bindValue(':mot_de_passe', $_POST['mot_de_passe']);
		$query->execute();
	}

	public function connexionMembre(){
		$query = $this->database->prepare('SELECT * FROM membre1 WHERE pseudo = :pseudo AND mot_de_passe = :mot_de_passe');
		$query->bindValue(':pseudo', $_POST['pseudo']);
		$query->bindValue(':mot_de_passe', $_POST['mot_de_passe']);
		$query->execute();
		// return $query->rowCount();
		return $query;
	}

}