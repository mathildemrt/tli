<?php
/* Smarty version 3.1.30-dev/28, created on 2016-02-13 21:35:42
  from "C:\wamp\www\tli\templates\index.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/28',
  'unifunc' => 'content_56bf939e3b97f2_56109802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40985bd49db7046723116b7208eb9eecc16dcbbd' => 
    array (
      0 => 'C:\\wamp\\www\\tli\\templates\\index.tpl',
      1 => 1455395703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_56bf939e3b97f2_56109802 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Association des acupunteurs</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="libs/bootstrap/dist/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/style_inscription.css">
      <?php echo '<script'; ?>
 type="text/javascript" src="https://www.google.com/jsapi"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="js/script.js"><?php echo '</script'; ?>
>
  </head>
  <?php if ($_smarty_tpl->tpl_vars['template']->value == 'pathologies.tpl') {?>
  <body onload="AffichagePatho(<?php echo $_smarty_tpl->tpl_vars['end']->value;?>
)">
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
</html>

<?php }
}
