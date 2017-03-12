<?php

class Membre{

	// ATTRIBUTS
	private $_id;
	private $_pseudo;
	private $_mot_de_passe;
	private static $table = 'membre';

	public function __construct($valeurs){
		$this->hydrate($valeurs);
	}

	public function hydrate(array $donnees){
		foreach($donnees as $key => $value){
			$methode = 'set' . ucfirst($key);
			if(is_callable([$this, $methode])){
				$this->$methode($value);
			}
		}
	}

	// GETTERS 
	public function id(){
		return $this->_id;
	}

	public function pseudo(){
		return $this->_pseudo;
	}

	public function mot_de_passe(){
		return $this->_mot_de_passe;
	}

	// SETTERS 
	public function setId($id){
		$id = (int) $id;
		if($id > 0){
			$this->_id = $id;
		}
	}

	public function setPseudo($pseudo){
		if(is_string($pseudo) && !empty($pseudo)){
			$this->_pseudo = $pseudo;
		}
	}

	public function setMot_de_passe($mot_de_passe){
		if(is_string($mot_de_passe) && !empty($mot_de_passe)){
			$this->_mot_de_passe = $mot_de_passe;
		}
	}

}