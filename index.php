<?php
session_start();

// CHARGEMENT DES CLASSES
require 'classes/Autoload.php';
Autoload::register();

$title = 'Un chat en PHP OO';

$description = 'Ceci est un chat en PHP Orienté Objet';

$content = "";

$form = new Form();
$form->input('text', 'titre', "[éèëêœaàâäoôöuûüùîïça-zÀÄÂÔÖÙÜÛÏÎÉÈËÊÇA-Z0-9 ,:;?!.'-]{1,100}", "Votre titre doit contenir entre 2 et 100 caractères : lettres chiffres et signes de ponctuation", true);
$form->textarea('message', "[éèëêœaàâäoôöuûüùîïça-zÀÄÂÔÖÙÜÛÏÎÉÈËÊÇA-Z0-9 ,:;?.'-]{1,}", "Votre message doit contenir au moins 1 caractère : lettres, chiffres et signes de ponctuation", true);
$form->submit('Envoyer', 'envoi');

$content .= $form->getForm("classes/ControllerMessages.php");


// $header = new Header('Ceci est un test de chat en PHP Orienté Objet', 'Chat en PHP Orienté Objet');
// echo $header->getHeader();

require 'template.php';

var_dump($_SESSION);