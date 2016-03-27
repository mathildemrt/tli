<?php
/* Smarty version 3.1.30-dev/28, created on 2016-03-27 19:46:18
  from "C:\wamp\www\tli_rioux\templates\index.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/28',
  'unifunc' => 'content_56f81c6a668718_33104663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bda86335e63e1421d892c8699aba2dd24f3a05d4' => 
    array (
      0 => 'C:\\wamp\\www\\tli_rioux\\templates\\index.tpl',
      1 => 1459100771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_56f81c6a668718_33104663 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Association des acupunteurs</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="stylesheet" href="libs/bootstrap/dist/css/bootstrap.css" />
      <link rel="stylesheet" type="text/css" href="css/style.css" />
      <link rel="stylesheet" type="text/css" href="css/style_impression.css" media="print" />
      <?php echo '<script'; ?>
 type="text/javascript" src="https://www.google.com/jsapi"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="libs/jQuery/jquery-1.12.1.min.js"><?php echo '</script'; ?>
>
      <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" /> 
      <?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="js/script.js"><?php echo '</script'; ?>
>
  </head>
  <?php if ($_smarty_tpl->tpl_vars['template']->value == 'pathologies.tpl') {?>
  <body onload="AffichagePatho(<?php echo $_smarty_tpl->tpl_vars['end']->value;?>
)">
  <?php } elseif ($_smarty_tpl->tpl_vars['template']->value == 'accueil.tpl') {?>
  <body onload="initialize()">
  <?php } else { ?>
  <body>
  <?php }?>
    
      <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['template']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
 
      <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      
  </body>
</html><?php }
}
