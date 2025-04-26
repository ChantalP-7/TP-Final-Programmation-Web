<?php
    $title="Ajoute article";     
    session_start();  
?>
<h2 class="centre">Mon nouvel article </h2>
    <form action="?controller=article&function=insert" method="post">        
        <label for="title">Titre</label>
        <input type="text" id="title" name="title" required>
        <label for="text">Texte</label>
        <textarea  cols="80%" rows="10" placeholder="Mon article" id="text" name="text" required></textarea>
        <label for="creation_date">Date</label>
        <input type="date" id="creation_date" name="creation_date" required> 
        <input type="hidden" id="authorID" name="authorID" value="<?=$_SESSION["authorID"]?>" required>              
        <input type="submit" value="Soumettre" class="bouton">
    </form>