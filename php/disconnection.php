
<?php // on deconnecte la session
session_start();
session_destroy();
header("Location: http://localhost/TP2LBI/Index.php?page=accueil");
?>






