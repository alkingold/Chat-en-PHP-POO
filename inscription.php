<?php

session_start();

// CHARGEMENT DES CLASSES
require 'classes/Autoload.php';
Autoload::register();

$title = 'Inscription | Un chat en PHP OO';

$description = 'Sur cette page vous pouvez vous inscrire pour participer au chat en PHP OO';

$content = "";

$form = new Form();
$form->input('text', 'pseudo', "[a-zA-Z0-9@_-]{3,20}", "Votre pseudo peut contenir entre 3 et 20 caractères dont lettres, chiffres, @, -, _", true);
$form->input('password', 'Mot de passe', "[a-zA-Z0-9]{5,10}", "Votre mot de passe doit contenir entre 5 et 10 caractères : lettres et/ou chiffres", true);
$form->submit('S\'inscrire', 'inscription');
$content .= $form->getForm("classes/ControllerMembres.php");

require 'template.php';