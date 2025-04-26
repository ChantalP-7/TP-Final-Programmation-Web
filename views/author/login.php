<?php
    $title="Connexion";
?>
    <h2 class="centre">Connexion</h2>
    <form action="?controller=author&function=auth" method="post">   
        <input type="hidden" id="authorID" name="authorID">
        <label for="username">Utilisateur (courriel)</label>
        <input type="email" id="username" name="username">
        <label for="pwd">Mot de passe</label>
        <input type="password" id="pwd" name="password">
        <br>
        <input type="submit" value="soumettre" name="Soumettre" class=" centre">
    </form>