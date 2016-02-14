<?php
/* Smarty version 3.1.30-dev/28, created on 2016-02-08 11:41:58
  from "C:\wamp\www\tli\templates\inscription.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/28',
  'unifunc' => 'content_56b870f6206444_02789259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '596816f560b496109e96a462940be120fe830adc' => 
    array (
      0 => 'C:\\wamp\\www\\tli\\templates\\inscription.tpl',
      1 => 1454928110,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/footer.tpl' => 1,
  ),
),false)) {
function content_56b870f6206444_02789259 ($_smarty_tpl) {
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Association des acupunteurs</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel='stylesheet' href='css/style.css'/>
      <link href="../css/footer.css" rel="stylesheet" type="text/css" />
      <link href="../css/style_inscription.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="../libs/bootstrap/dist/css/bootstrap.css">
      <?php echo '<script'; ?>
 type="text/javascript" src="../js/script.js"><?php echo '</script'; ?>
> 
  </head>
  <body>
      
   <nav class="navbar navbar-default">
      <div class="container-fluid">

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="../">Accueil</a></li>
            <li><a href="inscription.php">Inscription  <span class="sr-only">(current)</span></a></li>
            <li><a href="#">A propos</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
      
    <ol class="breadcrumb">
        <li><a href="../">Accueil</a></li>
        <li><a href="#">Inscription</li>
    </ol>
      
    <form method="get" action="#" id="formulaire">
		<ul>
			<li aria-live="polite">
				<label for="nom">Nom&nbsp;:</label>
				<input type="text" id="nom" class="champs" name="nom" required>
			</li>
			
			<li aria-live="polite">
				<label for="prenom">Prenom&nbsp;:</label>
				<input type="text" id="prenom" class="champs" name="prenom" required>
			</li>
			
			<li>
				<label for="email_addr">Adresse e-mail&nbsp;:</label>
				<input type="email" id="email_addr" class="champs" name="email_addr" required>
			</li>
			
			<li>
				<label for="email_addr_repeat">Confirmez l'adresse e-mail&nbsp;:</label>
				<input type="email" id="email_addr_repeat" class="champs" name="email_addr_repeat" required 
					oninput="checkmail(this)">
			</li>
			
			<li>
				<label for="user_name">Pseudo&nbsp;:</label>
				<input type="text" id="user_name" class="champs" name="user_name" required>
			</li>

			<li>
				<label for="mot_de_passe">Mot de passe&nbsp;:</label>
				<input type="password" id="mot_de_passe" class="champs" name="mot_de_passe" required>
			</li>
			
			<li>
				<label for="mot_de_passe_repeat">Confirmer mot de passe&nbsp;:</label>
				<input type="password" id="mot_de_passe_repeat" class="champs" name="mot_de_passe_repeat" required
				oninput="checkmdp(this)">
			</li>
			
			<li>
				<input type="submit" value="S'inscrire" /> 
			</li>
		</ul>
	</form>
      
    <?php $_smarty_tpl->_subTemplateRender("file:../templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      
  </body>
</html><?php }
}
