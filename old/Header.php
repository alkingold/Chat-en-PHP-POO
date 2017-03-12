<?php
/**
* Class Header
* Se charge de l'affichage du Header
*/
class Header{

	// ATTRIBUTS
	/**
	* @var string Meta Description pour le référencement
	*/
	private $_description;

	/**
	* @var string Contenu du Head Title tag
	*/
	private $_title;

	/**
	* @param $description string Description de la page
	* @param $title string Titre de la page
	*/
	public function __construct($description, $title){
		$this->setDescription($description);
		$this->setTitle($title);
	}

	/**
	* @param $description string
	* @param $title string
	* @return $header string Retourne le code HTML du header à afficher
	*/
	public function getHeader(){
		return $header = '<!DOCTYPE html>
					<html lang="fr">
					  <head>
					    <meta charset="utf-8">
					    <meta http-equiv="X-UA-Compatible" content="IE=edge">
					    <meta name="viewport" content="width=device-width, initial-scale=1">
					    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
					    <meta name="description" content="' . $this->_description . '">
					    <link rel="icon" href="../../favicon.ico">

					    <title>' . $this->_title . '</title>

					    <!-- Bootstrap core CSS -->
					    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

					  </head>

					  <body>

					    <nav class="navbar navbar-inverse navbar-fixed-top">
					      <div class="container">
					        <div class="navbar-header">
					          
					          <a class="navbar-brand" href="#">Mon super chat</a>
					        </div>
					        
					      </div>
					    </nav>

					    <div class="container">

					      <div class="starter-template" style="padding-top:100px;">';
	}

	// GETTERS
	/**
	* @return string Retourne la description de la page
	*/
	public function description(){
		return $this->_description;
	}

	/**
	* @return string Retourne le titre de la page
	*/
	public function title(){
		return $this->_title;
	}

	// SETTERS 
	/**
	* @param $description string Prend en argument la description de la page
	*/
	public function setDescription($description){
		if(is_string($description)){
			$this->_description = $description;
		}
	}

	/**
	* @param $title string Prend en argument le titre de la page
	*/
	public function setTitle($title){
		if(is_string($title)){
			$this->_title = $title;
		}
	}
}