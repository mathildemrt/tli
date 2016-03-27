<?php 

if(strpos($_SERVER['HTTP_ACCEPT'], 'application/xml') !== false ){
    
    //recuperation de l'argument
    $patho = "";
    if(isset($_GET['param'])){
        $param = explode("/",$_GET['param']);
        $patho = $param[1];
    }
    $patho = $param[1];
    
    //TODO : recuperer la pathologie associée au paramètre
    $dataPatho = array(
        'nom' => 'Abdomen flasque',
        'categorie' => 'pathologie du meridien',
        'meridien' => 'Abdomen',
        'caracteristique' => 'flasque'
    );
    
    $simplexml = simplexml_load_string('<?xml version="1.0" ?><pathologie />');
    foreach($dataPatho as $key => $value) {
        $simplexml->addChild($key, $value);
    }
    
    header('ContentType : text/xml');
    echo $simplexml->asXML();
} else {
    echo "";
}

?> 