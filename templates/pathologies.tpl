<div class="supporting">
    <div class="container">
        <h1>Pathologies</h1>
        
        
        {********************
         *Barre des filtres
         ********************}
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
        {for $var=0 to $end}
            <div class="media" id="patho{$var}">
                <div class="media-left media-middle">
                    <a href="#">
                        <img class="media-object" src="./img/aiguille.jpg" alt="Image_pathologie">
                    </a>
                </div>
                <div class="media-body">
                    <h2>{$pathologies.{$var}.desc_symptome}<span class="label label-info">{$pathologies.{$var}.mer}</span></h2>
                    Probablement du a un {$pathologies.{$var}.desc_patho}
                </div>
            </div>
        {/for}
        
        {***************
         *Pager du bas
         ***************}
        <nav>
          <ul class="pager">
            <li class="previous"><a href="#" onclick="PagePrecedente({$end})"><span aria-hidden="true">&larr;</span> Precédent</a></li>
            <li>Pathologies par page :
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
            