<?php
/* Smarty version 3.1.30-dev/28, created on 2016-02-13 21:40:19
  from "C:\wamp\www\tli\templates\pathologies.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/28',
  'unifunc' => 'content_56bf94b3a28983_82360458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8223914aa4159bac5a8eaf47cae47e7fb6d6daad' => 
    array (
      0 => 'C:\\wamp\\www\\tli\\templates\\pathologies.tpl',
      1 => 1455395703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56bf94b3a28983_82360458 ($_smarty_tpl) {
?>
<div class="supporting">
    <div class="container">
        <h1>Pathologies</h1>
        
        
        
        <form class="form-inline">
            <div class="form-group">
                <label for="FiltreMeridien">Filtrage par Méridien : </label>
                <select class="form-control">
                    <option selected></option>
                    <option>Méridien 1</option>
                    <option>Méridien 2</option>
                    <option>Méridien 3</option>
                    <option>Méridien 4</option>
                    <option>...</option>
                </select>
            </div>
            <div class="form-group">
                <label for="FiltragePatho">Filtrage par Pathologie : </label>
                <select class="form-control">
                    <option selected></option>
                    <option>Méridien</option>
                    <option>Organe/viscère</option>
                    <option>Luo</option>
                    <option>Merveilleux vaisseaux</option>
                    <option>Jing Jin</option>
                </select>
            </div>
            <div class="form-group">
                <label for="FiltrageCarac">Caractèristique : </label>
                <select class="form-control">
                    <option selected></option>
                    <option>Plein</option>
                    <option>Chaud</option>
                    <option>Vide</option>
                    <option>Froid</option>
                    <option>Interne</option>
                    <option>Externe</option>
                </select>
            </div>
        </form>
        
        
        
        
        <nav>
          <ul class="pager">
            <li class="previous"><a href="#" onclick="PagePrecedente(<?php echo $_smarty_tpl->tpl_vars['end']->value;?>
)"><span aria-hidden="true">&larr;</span> Precédent</a></li>
            <li id="CptPatho"></li>  
            <li class="next"><a href="#" onclick="PageSuivante(<?php echo $_smarty_tpl->tpl_vars['end']->value;?>
)"><span aria-hidden="true">&rarr;</span> Suivant</a></li>
          </ul>
        </nav>
        
        
        <?php
$_smarty_tpl->tpl_vars['var'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int) ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? $_smarty_tpl->tpl_vars['end']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['end']->value)+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = 0, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration == 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration == $_smarty_tpl->tpl_vars['var']->total;?>
            <div class="media" id="patho<?php echo $_smarty_tpl->tpl_vars['var']->value;?>
">
                <div class="media-left media-middle">
                    <a href="#">
                        <img class="media-object" src="./img/aiguille.jpg" alt="Image_pathologie">
                    </a>
                </div>
                <div class="media-body">
                    <h2><?php echo $_smarty_tpl->tpl_vars['pathologies']->value[$_smarty_tpl->tpl_vars['var']->value]['desc_symptome'];?>
<span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['pathologies']->value[$_smarty_tpl->tpl_vars['var']->value]['mer'];?>
</span></h2>
                    Probablement du a un <?php echo $_smarty_tpl->tpl_vars['pathologies']->value[$_smarty_tpl->tpl_vars['var']->value]['desc_patho'];?>

                </div>
            </div>
        <?php }
}
?>

        
        
        <nav>
          <ul class="pager">
            <li class="previous"><a href="#" onclick="PagePrecedente(<?php echo $_smarty_tpl->tpl_vars['end']->value;?>
)"><span aria-hidden="true">&larr;</span> Precédent</a></li>
            <li>Pathologies par page :
                <select id="nb_patho_page" onchange="AffichagePatho(<?php echo $_smarty_tpl->tpl_vars['end']->value;?>
)">
                  <option value="5">5</option>
                  <option value="10">10</option>
                  <option value="20">20</option>
                  <option value="50">50</option>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['end']->value;?>
">Tous</option>
                </select>
            </li>
            <li class="next"><a href="#" onclick="PageSuivante(<?php echo $_smarty_tpl->tpl_vars['end']->value;?>
)"><span aria-hidden="true">&rarr;</span> Suivant</a></li>
          </ul>
        </nav>
    </div>
</div>
            <?php }
}
