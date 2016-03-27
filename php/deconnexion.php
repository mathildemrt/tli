
<?php
/**
*
* Script de gestion de la déconnexion d'un utilisateur.
*
*/

require('classdb.php');
$Temp = new BD();
$Temp->deconnexion();

?>