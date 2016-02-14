<?php
/* Smarty version 3.1.30-dev/28, created on 2016-02-11 18:50:04
  from "C:\wamp\www\tli\templates\accueil.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/28',
  'unifunc' => 'content_56bcc9cc02b627_47068077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0591a935ac5f040d1ae944fdfccf801c65c7d4f' => 
    array (
      0 => 'C:\\wamp\\www\\tli\\templates\\accueil.tpl',
      1 => 1455212870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/footer.tpl' => 1,
  ),
),false)) {
function content_56bcc9cc02b627_47068077 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Association des acupunteurs</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="libs/bootstrap/dist/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/accueil.css">
  </head>
  <body>
      
<!--
    <ol class="breadcrumb">
        <li class="active"><a href="#">Accueil</a></li>
    </ol>  
-->
      
    <div class="jumbotron">
      <div class="container">
        <div class="main">
            <h1>Association des acupuncteurs</h1>
            <form oninput="" method="get" action="" id="formulaire">
                <div class="" id="barre_recherche">
                    <li>
                        <label for="search"></label>
                        <input id="search"  name="search" tabindex="-1" type="text" placeholder="Rechercher sur le site" required>
                        <label for="submit" hidden="hidden"></label>
                        <input id=" submit" name="submit" type="submit" value="Rechercher"> 
                    </li>
                </div>
            </form>
        </div>
      </div>
    </div>

    <div class="supporting">
        <div class="container">
            Mettre les flux RSS
        </div>
    </div>
    
    <?php $_smarty_tpl->_subTemplateRender("file:../templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      
  </body>
</html><?php }
}
