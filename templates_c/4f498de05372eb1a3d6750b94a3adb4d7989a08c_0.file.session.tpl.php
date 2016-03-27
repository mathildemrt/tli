<?php
/* Smarty version 3.1.30-dev/28, created on 2016-03-20 19:54:34
  from "C:\wamp\www\tli_rioux\templates\session.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/28',
  'unifunc' => 'content_56eef1ea7aa264_68235363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f498de05372eb1a3d6750b94a3adb4d7989a08c' => 
    array (
      0 => 'C:\\wamp\\www\\tli_rioux\\templates\\session.tpl',
      1 => 1458499698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56eef1ea7aa264_68235363 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['connexion']->value == 'true') {?>
<h1><?php echo $_smarty_tpl->tpl_vars['identifiant']->value;?>
</h1>

<p>Changer de mot de passe</p>
<label for="old_pwd"></label>
<input id="old_pwd" type="text">

<label for="new_pwd"></label>
<input id="new_pwd" type="text">

<label for="new_pwd_check"></label>
<input id="new_pwd_check" type="text">

<p>Changer d'adresse email</p>
<input type="email">
<input type="email">
<?php }
}
}
