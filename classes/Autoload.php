<?php

/**
* Class Autoload 
* Chargement automatisé des classes
*/
class Autoload{

	public static function register(){
		spl_autoload_register(array(__CLASS__, 'autoloader'));
	}

	/**
	* @param $class string Nom de la classe à charger
	*/
	public static function autoloader($class){
		require 'classes/' . $class . '.php';
	}
}