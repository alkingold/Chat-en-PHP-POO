<?php

class Form{

	private $_action = "#";
	private $_method = 'POST';

	private $_elements = [];

	/**
	* @param $html string éléments html à entourer
	* @return string élément entouré
	*/
	private function surround($html){
		return '<div class="form-group">' . $html . '</div>';
	}

	/**
	* @param $string string Chaîne de caractère à nettoyer
	* @return string Chaîne de caractères nettoyée
	*/
	private function labelClean($label){
		return str_replace(' ', '_', $label);
	}

	/**
	* @param $type string Type de champ
	* @param $name string Attribut name et label
	* @return string champ input mis en forme
	*/
	public function input($type, $name, $pattern = ".*", $title = "", $required = false){
		$input = "";
		$input .= '<label id="' . strtolower($this->labelClean($name)) . '">' . ucfirst($name) . '</label>';
		$input .= '<input class="form-control" type="' . strtolower($type) . '" 
			name="' . strtolower($this->labelClean($name)) . '" title="' . $title . '" pattern="' . $pattern . '"';
		if($required === true){
			$input .= ' required';
		}
		$input .= '>';
		array_push($this->_elements, $this->surround($input));
		// return $this->surround($input);
	}

	/**
	* @return 
	*/
	public function textarea($name, $pattern = ".*", $title = "", $required = false){
		$textarea = "";
		$textarea .= '<label id="' . strtolower($this->labelClean($name)) . '">' . ucfirst($name) . '</label>';
		$textarea .= '<textarea class="form-control" name="' . strtolower($this->labelClean($name)) . '" 
			title="' . $title . '" pattern="' . $pattern . '"';
		if($required === true){
			$textarea .= ' required';
		}
		$textarea .= '></textarea>';
		array_push($this->_elements, $this->surround($textarea));
		// return $this->surround($textarea);
	}

	/**
	* @param $value string Valeur de l'attribut value
	* @return string Input de type submit mis en forme
	*/
	public function submit($value, $name){
		$input = '<input type="submit" class="btn btn-danger" value="' . ucfirst($value) . '" name="' . $name . '">';
		array_push($this->_elements, $this->surround($input));
		// return $this->surround($input);
	}

	/**
	* @param $action string Valeur de l'attribut action de Form
	*/
	public function getForm($action){
		$form = "";
		$form .= '<div class="row">';
		$form .= '<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">';
		$form .= '<form method="' . $this->_method . '" action="' . $action . '">';
		foreach($this->_elements as $value){ 
			$form .= $value;
		}
		$form .= '</form>';
		$form .= '</div>';
		$form .= '</div>';
		return $form;
	}

	// GETTERS
	public function elements(){
		return $this->_elements;
	}

}