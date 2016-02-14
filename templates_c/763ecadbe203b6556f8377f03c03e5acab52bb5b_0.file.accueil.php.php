<?php
/* Smarty version 3.1.30-dev/28, created on 2016-02-11 15:36:49
  from "C:\wamp\www\tli\php\accueil.php" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/28',
  'unifunc' => 'content_56bc9c8197fde9_48809653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '763ecadbe203b6556f8377f03c03e5acab52bb5b' => 
    array (
      0 => 'C:\\wamp\\www\\tli\\php\\accueil.php',
      1 => 1455199185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56bc9c8197fde9_48809653 ($_smarty_tpl) {
echo '<?php
';?>// Inclusion de la librairie
require_once('../libs/Smarty/Smarty.class.php'); 

// Instanciation d'un l'objet Smarty 
$oSmarty = new Smarty();

// Affichage du template après compilation 
$oSmarty->display('../templates/accueil.tpl');

<?php echo '?>';
}
}
