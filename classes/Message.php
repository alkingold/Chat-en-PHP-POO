<?php 

class Message{

	// ATTRIBUTS
	private $_id;
	private $_idMembre;
	private $_titre;
	private $_message;
	private $_dateAjout;
	private $_pseudo;
	// private $_erreurs = [];

	private static $_table = 'message1';

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

	public function idMembre(){
		return $this->_idMembre;
	}

	public function titre(){
		return $this->_titre;
	}

	public function message(){
		return $this->_message;
	}

	public function dateAjout(){
		return $this->_dateAjout;
	}

	public function pseudo(){
		return $this->_pseudo;
	}

	// SETTERS
	public function setId($id){
		$id = (int) $id;
		if($id > 0){
			$this->_id = $id;
		}
	}

	public function setIdMembre($idMembre){
		$idMembre = (int) $idMembre;
		if($idMembre > 0){
			$this->_idMembre = $idMembre;
		}
	}

	public function setTitre($titre){
		if(is_string($titre) && !empty($titre)){
			$this->_titre = $titre;
		}
	}

	public function setMessage($message){
		if(is_string($message)){
			$this->_message = $message;
		}
	}

	public function setDateAjout($date){
		$this->_dateAjout = $date;
	}

	public function setPseudo($pseudo){
		if(is_string($pseudo)){
			$this->_pseudo = $pseudo;
		}
	}
}