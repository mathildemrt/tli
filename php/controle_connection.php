<?php


try
{// On se connecte à la base de donné
  $bdd = new PDO('mysql:host=localhost;dbname=acu', 'root', '');
}

catch(Exception $e)
{
  // En cas d'erreur, on affiche un message et on arrête tout cf OPEN CLASSROOM
        die('Erreur : '.$e->getMessage());
}

$identifiant = $_POST['identifiant'];
$password = $_POST['password'];


if(isset($identifiant)&& !empty($identifiant) && isset($password)&& !empty($password))
{
	$reponse = $bdd->query("SELECT * FROM utilisateurs WHERE identifiant = '".$identifiant."'"); // on cherche dans la table utilisateur le pseudo
	 $data = $reponse->fetch();
	
	if(($identifiant==$data['identifiant'] ) && ($password==$data['password']))// si les pseudos et les mot de passe sont bon, on va vers l'index et on ouvre la session
	{
				session_start();
		$_SESSION['identifiant'] = $identifiant; // on correspond le pseudo de session a celui de l'utilisateur
		$_SESSION['password'] = $password; // pareil pour le mot de passe
		header("Location: http://localhost/tli/Index.php"); // redirige vers l'index
		echo 'OK';
	}
		
}
else
{
    echo 'KO';
}

?>







