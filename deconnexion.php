<?php

session_start();

// CHARGEMENT DES CLASSES
require 'classes/Autoload.php';
Autoload::register();

session_destroy();

header('location:index.php');