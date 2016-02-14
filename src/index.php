<?php

// Inclusion de la librairie
require_once('./libs/Smarty/Smarty.class.php'); 

// Instanciation d'un l'objet Smarty 
$oSmarty = new Smarty();

// Affichage du template après compilation 
$oSmarty->display('accueil.tpl');

?>
