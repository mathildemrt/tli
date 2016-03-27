<?php 

if (preg_match('/webservice\/[^.]+/', $_SERVER['REDIRECT_URL'], $match)) { 
  //modification du code retour 
  header("Status: 200 OK", false, 200); 
  //alimentation du paramètre GET 
  $_GET['param'] = $match[0]; 
  $_REQUEST['param'] = $match[0]; 
  include('PathoXML.php'); 
} else {
    echo "Erreur 404 !"; 
}

?>