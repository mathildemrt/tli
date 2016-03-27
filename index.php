<?php


/**
*
* Index.php
*
* Ce script est l'unique point d'entré sur le site. Il
* s'occupe d'effectuer l'affichage des pages, en fonction des
* arguments qui lui sont passé par méthode GET
*
* @author: CORNILLON-MAREITE
*/



/** 
* Inclusion des différentes librairies
*/
require_once('libs/Smarty/Smarty.class.php');  /** Moteur de template Smarty */
require_once('php/classdb.php');               /** Classe de gestion de la base de données */


/**
* Création des instances de classes 
*/
$smarty = new Smarty();
$Temp = new BD();


/**
* Création des variables et constantes
*/
$page_var = 'page';                             /** Variable contentant le paramètre GET à récuperer */
$menu = array (                                 /** Array contenant les différentes sections du site */
            'accueil' => 'accueil.tpl', 
            'inscription' => 'inscription.tpl',
            'pathologies' => 'pathologies.tpl'
            );


/**
* Récupération de la page voulu dans le paramètre GET. Si le 
* paramètre n'est pas défini, on redirige vers la page d'accueil
*/
if(isset($_GET[$page_var]))
    $page_request = $_GET[$page_var];
else
    $page_request = 'accueil';



/**
* Séléction du template correpondant a la page demandée
*/
if ( array_key_exists ( $page_request, $menu ) )    /** Si la page est dans le menu */ 
   $template = $menu[$page_request]; 
else if($page_request == 'about')                   /** Si la page est la section de renseignement */
    $template = 'about.tpl';
else if($page_request == 'session')                 /** Si la page est la page d'inscription */
    $template = 'session.tpl';                      
else                                                /** S'il ne s'agit d'aucune de ces pages, on renvoi vers l'accueil */
    $template = 'accueil.tpl';


/**
* Assignation des informations de base à Smarty
*/
session_start();
if(isset ($_SESSION['nom']) && isset ($_SESSION['prenom'])){    /** Si l'utilisateur est connecté, on renseigne ses infos */
    $nom = $_SESSION['nom'];
    $prenom = $_SESSION['prenom'];
    $smarty->assign('identifiant', $prenom." ".$nom);
    $connexion = 'true';
}
else if($page_request == 'erreur_connexion')                    /** S'il y a eu erreur lors de la connection */
    $connexion = 'erreur';
else
    $connexion = 'false';                                       /** Si l'utilisateur n'est pas connecté */

$smarty->assign('connexion', $connexion);                       /** Paramètre de connexion */
$smarty->assign('menu', $menu);                                 /** Paramètre du menu */
$smarty->assign('template', $template);                         /** Paramètre du template à afficher */
$smarty->assign('page_courante', $page_request);                /** Paramètre de la page courante */


/**
* Assignation des variables supplémentaires pour l'affichage des pathologies
*/
if($page_request == "pathologies"){
    
    $bdd = $Temp->getDB();                                                          /** Récupération de la BDD */ 
   
    if(isset($_POST['keyword']) && $_POST["keyword"] != "" ) {                      /** Si l'on a un keyword, on filtre les patho */
        if(in_array($_POST['keyword'],explode('*',$Temp->get_keyword()))){
            
            $keyword = $_POST['keyword'];
            $req_pathologies = $Temp->correspondance_keyword_symptome($keyword);    
            $end = sizeof($req_pathologies);
        }
    } else {                                                                        /** Sinon, on récupère toutes les patho */
        $req_pathologies = $Temp->getPatho();

        $keyword = "Mot-clé";
        $end = $req_pathologies->rowCount();
    }

    $req_meridien = $Temp->getMeridien();                                           /** Récupération de la liste des méridiens */

    $list_keyword = $Temp->get_keyword();                                           /** Récupération de la liste des mot-clés */

    $smarty->assign('pathologies',$req_pathologies);                                /** Assignation des pathologies pour Smarty */
    $smarty->assign('meridiens',$req_meridien);                                     /** Assignation des méridiens pour Smarty */
    $smarty->assign('keyword',$keyword);                                            /** Assignation du mot-clé pour Smarty */
    $smarty->assign('end',$end);                                                    /** Assignation du nbr de patho pour Smarty */
    $smarty->assign('list_keyword',$list_keyword);                                  /** Assignation de la liste de mot-clés */
}


/**
* Finalement, on affiche la page
*/
$smarty->display('index.tpl'); 

?>