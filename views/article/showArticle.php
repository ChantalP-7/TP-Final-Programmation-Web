<?php

?>
<div class="div-article-unique">
    <h3>Un article</h3>
    <p><strong>Titre : </strong> <?= $data['title'];?></p>
    <p><strong>texte: </strong> <?= $data['text'];?></p>
    <p><em><strong>Auteur: </strong> <?= $data['name'];?></em></p>
    <p><strong>Rédaction: </strong> <?= $data['drafting_date'];?></p>
    <a href="?controller=article&function=edit&=<?= $data['id']?>" class="btn">Éditer</a>
    <form action="?controller=article&function=delete" method="post">
        <input type="hidden" name="id" value="<?= $data['id'];?>">
        <input type="submit" value="Supprimer" class="btn-danger">
    </form>
</div>