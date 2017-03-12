<?php
/**
* class Database
* Permet de gérer la connexion à la base de données
*/
class Database{

	// ATTRIBUTS
	/**
	* @var string Nom de la base de données
	*/
	private static $_dbName = '';

	/**
	* @var string Utilisateur de la base de données
	*/
	private static $_dbUser = '';

	/**
	* @var string Mot de passe de la base de données
	*/
	private static $_dbPass = '';

	/**
	* @var string Nom d'hôte de la base de données
	*/
	private static $_dbHost = '';

	/**
	* @var object L'instance de la connexion à la base de données
	*/
	private static $_pdo;

	/**
	* @return object de la classe PDO : connexion à la base de données
	*/
	public static function getDatabase(){
		if(is_null(self::$_pdo)){
			$pdo = new PDO('mysql:host=' . self::$_dbHost . ';dbname=' . 
				self::$_dbName . ';charset=utf8', self::$_dbUser, self::$_dbPass);

			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$_pdo = $pdo;
		}
		return self::$_pdo;
	}

	// GETTERS
	public function dbName(){
		return self::$_dbName;
	}

	public function dbUser(){
		return self::$_dbUser;
	}

	public function dbPass(){
		return self::$_dbPass;
	}

	public function dbHost(){
		return self::$_dbHost;
	}

	public function pdo(){
		return $this->_pdo;
	}

	// SETTERS
	public function setDbName($dbName){
		if(is_string($dbName) && !empty($dbName)){
			self::$_dbName = $db_name;
		}
	}

	public function setDbUser($dbUser){
		if(is_string($dbUser)){
			self::$_dbUser = $dbUser;
		}
	}

	public function setDbPass($dbPass){
		if(is_string($dbPass)){
			self::$_dbPass = $dbPass;
		}
	}

	public function setDbHost($dbHost){
		if(is_string($dbHost)){
			self::$_dbHost = $dbHost;
		}
	}

}
