<?php
/* Smarty version 3.1.30-dev/28, created on 2016-03-27 22:00:59
  from "C:\wamp\www\tli_rioux\templates\pathologies.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/28',
  'unifunc' => 'content_56f83bfbc25301_37542081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91df2e6f86bfc3aaa37146467dfc68d8bcd55ee0' => 
    array (
      0 => 'C:\\wamp\\www\\tli_rioux\\templates\\pathologies.tpl',
      1 => 1459105683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56f83bfbc25301_37542081 ($_smarty_tpl) {
?>
<div class="supporting">
    <div class="container">
        <h1>Pathologies</h1>
        
        
        
        <form class="form-inline">
            <p>Affiner la recherche</p>
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="filtreMeridien">Méridien : </label>
                    <select id="filtreMeridien" class="form-control" onchange="AffichagePatho(<?php echo $_smarty_tpl->tpl_vars['end']->value;?>
)">
                        <option value="" selected>None</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['meridiens']->value, 'mer');
foreach ($_from as $_smarty_tpl->tpl_vars['mer']->value) {
$_smarty_tpl->tpl_vars['mer']->_loop = true;
$__foreach_mer_0_saved = $_smarty_tpl->tpl_vars['mer'];
?>
                        <option value=" <?php echo $_smarty_tpl->tpl_vars['mer']->value['code'];?>
 "><?php echo $_smarty_tpl->tpl_vars['mer']->value['nom'];?>
</option>
                        <?php
$_smarty_tpl->tpl_vars['mer'] = $__foreach_mer_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="filtrePatho">Pathologie : </label>
                    <select id="filtrePatho" class="form-control" onchange="AffichagePatho(<?php echo $_smarty_tpl->tpl_vars['end']->value;?>
)">
                        <option value="" selected>None</option>
                        <option value=" m">Méridien</option>
                        <option value=" tf">Organe/viscère</option>
                        <option value=" l">Luo</option>
                        <option value=" mv">Merveilleux vaisseaux</option>
                        <option value=" j">Jing Jin</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="filtreCarac">Caractèristique : </label>
                    <select id="filtreCarac" class="form-control" onchange="AffichagePatho(<?php echo $_smarty_tpl->tpl_vars['end']->value;?>
)">
                        <option value="" selected>None</option>
                        <option value="p$">Plein</option>
                        <option value="c$">Chaud</option>
                        <option value="v$">Vide</option>
                        <option value="f$">Froid</option>
                        <option value="i$">Interne</option>
                        <option value="e$">Externe</option>
                        <option value="pc$">Plein et Chaud</option>
                        <option value="vf$">Vide et Froid</option>
                    </select>
                </div>
            </div>
            <label for="recherche" hidden>Affiner la recherche</label>
            <input type="submit" id="recherche" hidden> 
        </form>
        
        
        
        <?php if ($_smarty_tpl->tpl_vars['connexion']->value == 'true') {?>
        <form class="form-inline" action="index.php?page=pathologies" method="POST">
            <p>Recherche par mot-clé</p>
            <label for="keyword">Entrer le mot clé : </label>
            <input id="keyword" name="keyword" title="keyword" type="text" class="form-control input-sm"  placeholder="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" onkeypress="autocompletion('<?php echo $_smarty_tpl->tpl_vars['list_keyword']->value;?>
')">
            <button type="submit" class="btn btn-default btn-sm">Recherche</button>
            <a href="index.php?page=pathologies"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
        </form>
        <?php }?>
        
        
        
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pathologies']->value, 'patho');
$_smarty_tpl->tpl_vars['patho']->index = -1;
foreach ($_from as $_smarty_tpl->tpl_vars['patho']->value) {
$_smarty_tpl->tpl_vars['patho']->_loop = true;
$_smarty_tpl->tpl_vars['patho']->index++;
$__foreach_patho_1_saved = $_smarty_tpl->tpl_vars['patho'];
?>
            <div class="media <?php echo $_smarty_tpl->tpl_vars['patho']->value['mer'];?>
 <?php echo $_smarty_tpl->tpl_vars['patho']->value['type'];?>
" id="patho<?php echo $_smarty_tpl->tpl_vars['patho']->index;?>
">
                <div class="media-left media-middle">
                        <h2><span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['patho']->value['mer'];?>
</span></h2>
                </div>
                <div class="media-body">
                    <h2><?php echo $_smarty_tpl->tpl_vars['patho']->value['desc_symptome'];?>
</h2>
                    <p>Probablement du a un <?php echo $_smarty_tpl->tpl_vars['patho']->value['desc_patho'];?>
</p>
                </div>
            </div>
        <?php
$_smarty_tpl->tpl_vars['patho'] = $__foreach_patho_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
        
        
        <nav>
          <ul class="pager" id="pagerBas">
            <li class="previous"><a href="#" onclick="PagePrecedente(<?php echo $_smarty_tpl->tpl_vars['end']->value;?>
)"><span aria-hidden="true">&larr;</span> Precédent</a></li>
            <li>
                <label for="nb_patho_page">Pathologies par pages : </label>
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
