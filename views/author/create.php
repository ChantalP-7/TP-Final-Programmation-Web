<?php
    $title="Inscription";
?>
<h2 class="centre">Inscription</h2>
<form action="?controller=author&function=insert" method="post">
    <label for="firstName">Prénom</label>
    <input type="text" minlength="2" maxlength="25" name="firstName" id="firstName" required>
    <label for="name">Nom</label>
    <input type="text" minlength="2" maxlength="25" name="name" id="name" required>
    <label for="username">Utilisateur (courriel)</label>
    <input type="text" minlength="2" maxlength="25" name="username" id="username" required>
    <label for="password">Mot de passe (min 6 caractères)</label>
    <input type="password" minlength="6" maxlength="20" name="password" id="password" required> 
    <br>
    <input type="submit" class="centre bouton" value="Sauvegarder">        
</form>