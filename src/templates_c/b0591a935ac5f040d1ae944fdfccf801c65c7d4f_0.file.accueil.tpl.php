<?php
/* Smarty version 3.1.30-dev/28, created on 2016-02-08 11:24:41
  from "C:\wamp\www\tli\templates\accueil.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/28',
  'unifunc' => 'content_56b86ce9356a37_65947256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0591a935ac5f040d1ae944fdfccf801c65c7d4f' => 
    array (
      0 => 'C:\\wamp\\www\\tli\\templates\\accueil.tpl',
      1 => 1454927076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_56b86ce9356a37_65947256 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Association des acupunteurs</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel='stylesheet' href='css/style.css'/>
      <link href="css/footer.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="libs/bootstrap/dist/css/bootstrap.css">
  </head>
  <body>
      
   <nav class="navbar navbar-default">
      <div class="container-fluid">

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Accueil <span class="sr-only">(current)</span></a></li>
            <li><a href="php/inscription.php">Inscription</a></li>
            <li><a href="#">A propos</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
      
    <ol class="breadcrumb">
        <li><a href="#">Accueil</a></li>
    </ol>  
      
    <div class="jumbotron">
      <div class="container">
        <div class="main">
            <h1>Association des acupuncteurs</h1>
            <p>Mettre la barre de recherche</p>
        </div>
      </div>
    </div>

    <div class="supporting">
        <div class="container">
            Mettre les flux RSS
        </div>
    </div>
    
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      
  </body>
</html><?php }
}
