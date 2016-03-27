<div class="supporting">
    <div class="container">
        <h1>Pathologies</h1>
        
        
        {********************
         *Barre des filtres
         ********************}
        <form class="form-inline">
            <p>Affiner la recherche</p>
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="filtreMeridien">Méridien : </label>
                    <select id="filtreMeridien" class="form-control" onchange="AffichagePatho({$end})">
                        <option value="" selected>None</option>
                        {foreach $meridiens as $mer}
                        <option value=" {$mer.code} ">{$mer.nom}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="filtrePatho">Pathologie : </label>
                    <select id="filtrePatho" class="form-control" onchange="AffichagePatho({$end})">
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
                    <select id="filtreCarac" class="form-control" onchange="AffichagePatho({$end})">
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
        
        
        {*************************************
         *Recherche de pathologie par mot clé
         *************************************}
        {if $connexion eq 'true'}
        <form class="form-inline" action="index.php?page=pathologies" method="POST">
            <p>Recherche par mot-clé</p>
            <label for="keyword">Entrer le mot clé : </label>
            <input id="keyword" name="keyword" title="keyword" type="text" class="form-control input-sm"  placeholder="{$keyword}" onkeypress="autocompletion('{$list_keyword}')">
            <button type="submit" class="btn btn-default btn-sm">Recherche</button>
            <a href="index.php?page=pathologies"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
        </form>
        {/if}
        
        
        {******************
         *Pager du haut 
         ******************}
        <nav>
          <ul class="pager">
            <li class="previous"><a href="#" onclick="PagePrecedente({$end})"><span aria-hidden="true">&larr;</span> Precédent</a></li>
            <li id="CptPatho"></li>  
            <li class="next"><a href="#" onclick="PageSuivante({$end})"><span aria-hidden="true">&rarr;</span> Suivant</a></li>
          </ul>
        </nav>
        
        {***************************
         *Affichage des pathologies
         **************************}
        {foreach $pathologies as $patho}
            <div class="media {$patho.mer} {$patho.type}" id="patho{$patho@index}">
                <div class="media-left media-middle">
                        <h2><span class="label label-info">{$patho.mer}</span></h2>
                </div>
                <div class="media-body">
                    <h2>{$patho.desc_symptome}</h2>
                    <p>Probablement du a un {$patho.desc_patho}</p>
                </div>
            </div>
        {/foreach}
        
        {***************
         *Pager du bas
         ***************}
        <nav>
          <ul class="pager" id="pagerBas">
            <li class="previous"><a href="#" onclick="PagePrecedente({$end})"><span aria-hidden="true">&larr;</span> Precédent</a></li>
            <li>
                <label for="nb_patho_page">Pathologies par pages : </label>
                <select id="nb_patho_page" onchange="AffichagePatho({$end})">
                  <option value="5">5</option>
                  <option value="10">10</option>
                  <option value="20">20</option>
                  <option value="50">50</option>
                  <option value="{$end}">Tous</option>
                </select>
            </li>
            <li class="next"><a href="#" onclick="PageSuivante({$end})"><span aria-hidden="true">&rarr;</span> Suivant</a></li>
          </ul>
        </nav>
    </div>
</div>
            