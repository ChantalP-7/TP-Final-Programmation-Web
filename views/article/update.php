<?php 

?>


<div class="div-form-texte">
    <form action="?controller=article&function=update" method="post">
        <input type="hidden" name="id_author" value="<?= $data['author']['id']; ?>">
        <input type="hidden" name="id" value="<?= $data['article']['id']; ?>">
        <label for="name">Titre</label>
        <input type="text" id="titre" name="titre" value="<?= $data['titre'];?>">
        <label for="address">Texte</label>
        <input type="text" id="text" name="text" value="<?= $data['text'];?>">
        <label for="phone">Date</label>
        <input type="date" id="date" name="date" value="<?= $data['drafting_date'];?>">       
        <input type="submit" value="Update" class="btn">
    </form>
</div>