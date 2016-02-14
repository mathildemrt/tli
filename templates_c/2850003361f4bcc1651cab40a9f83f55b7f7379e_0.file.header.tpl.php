<?php
/* Smarty version 3.1.30-dev/28, created on 2016-02-11 19:22:17
  from "C:\wamp\www\tli\templates\header.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/28',
  'unifunc' => 'content_56bcd159bb0575_57816964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2850003361f4bcc1651cab40a9f83f55b7f7379e' => 
    array (
      0 => 'C:\\wamp\\www\\tli\\templates\\header.tpl',
      1 => 1455214933,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56bcd159bb0575_57816964 ($_smarty_tpl) {
?>
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-collapse">

                <ul class="nav navbar-nav">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value, 'template_name', false, 'url_val');
foreach ($_from as $_smarty_tpl->tpl_vars['url_val']->value => $_smarty_tpl->tpl_vars['template_name']->value) {
$_smarty_tpl->tpl_vars['template_name']->_loop = true;
$__foreach_template_name_0_saved = $_smarty_tpl->tpl_vars['template_name'];
?> 
                       <li> 
                          <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['page_var']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['url_val']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['url_val']->value;?>
</a> 
                       </li> 
                    <?php
$_smarty_tpl->tpl_vars['template_name'] = $__foreach_template_name_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?> 
                </ul>

                <form class="navbar-form navbar-right" method="post" action="">
                    <div class="form-group">
                      <label for="identifiant" hidden="hidden"></label>
                      <input id="identifiant" name="identifiant" title="logIn" type="text" class="form-control input-sm"  placeholder="Identifiant">
                    </div>
                    <div class="form-group">
                      <label for="password" hidden="hidden"></label>
                      <input id="password" name="password" title="password" type="password" class="form-control input-sm" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-default btn-sm">Log In</button>
                </form>

            </div>
        </div>
    </nav>
</header><?php }
}
