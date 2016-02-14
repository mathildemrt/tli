<?php

// Inclusion de la librairie
require_once('libs/Smarty/Smarty.class.php'); 

$smarty = new Smarty(); 


//Setup the url var we are looking for to control page display 
$page_var = 'page'; 

//Using the $_REQUEST scope so that the page can be passed in via $_POST or $_GET 
if(count($_GET) > 0 || count($_POST) > 0)
    $page_request = $_REQUEST[$page_var];
else
    $page_request = 'accueil';


$root_url ="http://".$_SERVER['SERVER_NAME'].'/simple';

//This array holds the relationship between the page variable and the template to load.. This info could also be retrieved from a db 
$menu = array ( 
            'accueil' => 'accueil.tpl', 
            'inscription' => 'inscription.tpl',
            'pathologies' => 'pathologies.tpl'
            ); 

if ( array_key_exists ( $page_request, $menu ) ) 
   $template = $menu[$page_request]; 
//If not set the default page 
else 
   $template = 'accueil.tpl'; 



//*********************************
//Assign  basics infos to Smarty
//********************************/
$smarty->assign('menu', $menu); 
$smarty->assign('template', $template); 
$smarty->assign('page_var', $page_var);




//****************************************
//Variable pour affichage des pathologies
//****************************************
if($page_request == "pathologies"){
    //Connexion a la BD
    try{
        $bdd = new PDO('mysql:host=localhost; dbname=acupuncture; charset=utf8', 'root', '');
        
        //Recuperation des pathologies
        $req_pathologies = $bdd->prepare('SELECT * FROM symptpatho 
                                          LEFT JOIN patho ON symptpatho.idP = patho.idP
                                          LEFT JOIN symptome ON symptpatho.idS = symptome.idS');
        $req_pathologies->execute();
        $i = 0;
        while($temp = $req_pathologies->fetch()){
            $pathologies[$i] = $temp;
            $i++;
        }
        $req_pathologies->closeCursor();
        
        //Passage des pathologies en argument
        $smarty->assign('pathologies',$pathologies);
        $smarty->assign('end',$i-1);
    }
    catch (Exception $e){
        die('</br></br>Detail de l\'erreur: ' . $e->getMessage());
    }
}


//***********************
// AFfichage de l'index
//***********************/
$smarty->display('index.tpl'); 

?>
