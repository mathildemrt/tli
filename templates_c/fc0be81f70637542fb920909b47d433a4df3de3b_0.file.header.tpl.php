<?php
/* Smarty version 3.1.30-dev/28, created on 2016-03-27 18:24:21
  from "C:\wamp\www\tli_rioux\templates\header.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/28',
  'unifunc' => 'content_56f80935e37518_91850159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc0be81f70637542fb920909b47d433a4df3de3b' => 
    array (
      0 => 'C:\\wamp\\www\\tli_rioux\\templates\\header.tpl',
      1 => 1459095820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56f80935e37518_91850159 ($_smarty_tpl) {
?>
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
<!--            <div class="navbar-collapse">-->

                <ul class="nav navbar-nav">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value, 'template_name', false, 'url_val');
foreach ($_from as $_smarty_tpl->tpl_vars['url_val']->value => $_smarty_tpl->tpl_vars['template_name']->value) {
$_smarty_tpl->tpl_vars['template_name']->_loop = true;
$__foreach_template_name_0_saved = $_smarty_tpl->tpl_vars['template_name'];
?> 
                        <?php if ($_smarty_tpl->tpl_vars['url_val']->value == $_smarty_tpl->tpl_vars['page_courante']->value) {?>
                        <li> 
                            <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?page=<?php echo $_smarty_tpl->tpl_vars['url_val']->value;?>
" class="courante" ><?php echo $_smarty_tpl->tpl_vars['url_val']->value;?>
</a> 
                        </li>
                        <?php } else { ?>
                        <li> 
                            <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?page=<?php echo $_smarty_tpl->tpl_vars['url_val']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['url_val']->value;?>
</a> 
                        </li>
                        <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['template_name'] = $__foreach_template_name_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>  
                </ul>

                
                <?php if ($_smarty_tpl->tpl_vars['connexion']->value == 'true') {?>
                <form class="navbar-right" method="post" action="php/deconnexion.php">
                    <button type="submit" class="btn btn-default btn-sm">Log Out</button> 
                    <p class="navbar-text">Signed in as <a href="index.php?page=session"><?php echo $_smarty_tpl->tpl_vars['identifiant']->value;?>
</a></p> 
                </form>
                <?php } else { ?>
                <form class="navbar-form navbar-right" method="post" action="php/controle_connection.php">
                    <div class="form-group">
                      <label for="identifiant" hidden="hidden">Indentifiant</label>
                      <input id="identifiant" name="identifiant" title="logIn" type="text" class="form-control input-sm"  placeholder="Identifiant">
                    </div>
                    <div class="form-group">
                      <label for="password" hidden="hidden">Password</label>
                      <input id="password" name="password" title="password" type="password" class="form-control input-sm" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-default btn-sm">Log In</button>
                    <?php if ($_smarty_tpl->tpl_vars['connexion']->value == 'erreur') {?>
                    <p id="erreur_connexion" class="navbar-text">Identifiant ou mot de passe incorrect</p>
                    <?php }?>
                </form>
                <?php }?>

<!--            </div>-->
        </div>
    </nav>
</header><?php }
}
