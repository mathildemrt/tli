 <div class="supporting">
        <div class="container">
            <h1>Formulaire d'inscription</h1>
            <form method="POST" action="#" id="formulaire">

                <ul>
                    <li aria-live="polite">
                        <label for="nom">Nom&nbsp;:</label>
                        <input type="text" id="nom" class="champs" name="nom" required>
                    </li>

                    <li aria-live="polite">
                        <label for="prenom">Prenom&nbsp;:</label>
                        <input type="text" id="prenom" class="champs" name="prenom" required>
                    </li>

                    <li>
                        <label for="email_addr">Adresse e-mail&nbsp;:</label>
                        <input type="email" id="email_addr" class="champs" name="email_addr" required>
                    </li>

                    <li>
                        <label for="email_addr_repeat">Confirmez l'adresse e-mail&nbsp;:</label>
                        <input type="email" id="email_addr_repeat" class="champs" name="email_addr_repeat" required 
                            oninput="checkmail(this)">
                    </li>

                    <li>
                        <label for="user_name">Pseudo&nbsp;:</label>
                        <input type="text" id="user_name" class="champs" name="user_name" required>
                    </li>

                    <li>
                        <label for="mot_de_passe">Mot de passe&nbsp;:</label>
                        <input type="password" id="mot_de_passe" class="champs" name="mot_de_passe" required>
                    </li>

                    <li>
                        <label for="mot_de_passe_repeat">Confirmer mot de passe&nbsp;:</label>
                        <input type="password" id="mot_de_passe_repeat" class="champs" name="mot_de_passe_repeat" required
                        oninput="checkmdp(this)">
                    </li>

                    <li>
                        <label for="submit" hidden=""></label>
                        <input id="submit" name="submit" type="submit" value="S'inscrire"> 
                    </li>
                </ul>
            </form>
     </div>
</div>
   