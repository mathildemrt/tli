{if $connexion eq 'true'}
<h1>{$identifiant}</h1>

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
{/if}