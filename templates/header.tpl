<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
<!--            <div class="navbar-collapse">-->

                <ul class="nav navbar-nav">
                    {foreach key=url_val item=template_name from=$menu} 
                        {if $url_val eq $page_courante}
                        <li> 
                            <a href="{$SCRIPT_NAME}?page={$url_val}" class="courante" >{$url_val}</a> 
                        </li>
                        {else}
                        <li> 
                            <a href="{$SCRIPT_NAME}?page={$url_val}">{$url_val}</a> 
                        </li>
                        {/if}
                    {/foreach}  
                </ul>

                
                {if $connexion eq 'true'}
                <form class="navbar-right" method="post" action="php/deconnexion.php">
                    <button type="submit" class="btn btn-default btn-sm">Log Out</button> 
                    <p class="navbar-text">Signed in as <a href="index.php?page=session">{$identifiant}</a></p> 
                </form>
                {else}
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
                    {if $connexion eq 'erreur'}
                    <p id="erreur_connexion" class="navbar-text">Identifiant ou mot de passe incorrect</p>
                    {/if}
                </form>
                {/if}

<!--            </div>-->
        </div>
    </nav>
</header>