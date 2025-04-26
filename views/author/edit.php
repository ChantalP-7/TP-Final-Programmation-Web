<?php
    $title="Modifier profil";
?>

<h2 class="centre">Profil</h2>
    <form action="?controller=author&function=update" method="post">
        <input type="hidden" name="authorID" value="<?= $data['authorID']; ?>">
        <label for="firstName">Prénom</label>
        <input type="text" id="firstName" name="firstName" value="<?= $data['firstName'];?>">
        <label for="name">Nom</label>
        <input type="text" id="name" name="name" value="<?= $data['name'];?>">
        <label for="address">Utilisateur(mot de passe)</label>
        <input type="text" id="username" name="username" value="<?= $data['username'];?>">
        <label for="phone">Mot de passe</label>
        <input type="password" id="password" name="password" value="<?= $data['password'];?>">       
        <input type="submit" value="Soumettre" class="bouton">
    </form>