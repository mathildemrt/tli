<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-collapse">

                <ul class="nav navbar-nav">
                    {foreach key=url_val item=template_name from=$menu} 
                       <li> 
                          <a href="{$SCRIPT_NAME}?{$page_var}={$url_val}">{$url_val}</a> 
                       </li> 
                    {/foreach} 
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
</header>