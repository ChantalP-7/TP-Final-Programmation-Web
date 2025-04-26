<?php
    $title="Mise à jour article";
    session_start()
    ?>
<h2 class="centre">Mon article</h2>

    <div class="div-form-texte">
    <form action="?controller=article&function=update" method="post">
        <input type="hidden" name="articleID" value="<?= $data['articleID']; ?>">
        <label for="name">Titre</label>
        <input type="text" id="title" name="title" value="<?= $data['title'];?>">
        <label for="address">Texte</label>        
        <textarea cols="80%" rows="10" id="text" name="text"><?= $data['text'];?></textarea>
        <label for="date">Date</label>
        <input type="date" id="date" name="creation_date" value="<?= $data['creation_date'];?>">       
        <input type="submit" value="Soumettre" class="bouton">
    </form>
</div>
