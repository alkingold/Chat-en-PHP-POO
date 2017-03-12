<?php

require 'Database.php';

class Manager{

	// ATTRIBUTS
	protected $database;

	public function __construct(PDO $database){
		$this->database = $database;
	}
	
}