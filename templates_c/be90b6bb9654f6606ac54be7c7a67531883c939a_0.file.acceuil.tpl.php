<?php
/* Smarty version 3.1.30-dev/28, created on 2016-02-08 09:56:27
  from "C:\wamp\www\tli\templates\acceuil.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/28',
  'unifunc' => 'content_56b8583bc627d9_30622155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be90b6bb9654f6606ac54be7c7a67531883c939a' => 
    array (
      0 => 'C:\\wamp\\www\\tli\\templates\\acceuil.tpl',
      1 => 1454921755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_56b8583bc627d9_30622155 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Association des acupunteurs</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel='stylesheet' href='css/style.css'/>
  </head>
  <body>
    <div class="header">
        <div class="nav">
                <a href="home.php" id="active">Home</a>
                <a href="inscription.php">Inscription</a>
                <a href="consultation.php">Consultation</a>
                <a href="about.php">A propos</a>
        </div>
    </div>
    <div class="jumbotron">
      <div class="container">  
        <div class="main">
            <h1>Accociation des acupuncteurs</h1>
            <p>blabla</p>
        </div>
      </div>
    </div>

    <div class="supporting">
        <div class="container">
            
        </div>
    </div>
    
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      
  </body>
</html><?php }
}
