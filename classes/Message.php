<?php 

class Message{

	// ATTRIBUTS
	private $_id;
	private $_idMembre;
	private $_titre;
	private $_contenu;
	private $_dateAjout;
	private $_erreurs = [];

	private static $_table = 'message';

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

	public function contenu(){
		return $this->_contenu;
	}

	public function dateAjout(){
		return $this->_dateAjout;
	}

	public function erreur(){
		return $this->_erreur;
	}

	// SETTERS
	public function setId($id){
		$id = (int) $id;
		if($id > 0){
			$this->_id = $id;
		}
		else{
			$this->_erreurs[] = 'L\'id est un nombre positif';
		}
	}

	public function setIdMembre($idMembre){
		$idMembre = (int) $idMembre;
		if($idMembre > 0){
			$this->_id = $idMembre;
		}
	}

	public function setTitre($titre){
		if(is_string($titre) && !empty($titre)){
			$this->_titre = $titre;
		}
	}
}