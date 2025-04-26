<?php
    $title="Bonne lecture 📚☕";
    ?>
<div class="div-article-unique">
    <p><h3><?= $data['title'];?></h3></p>
    <p>Auteur: <?= $data['prenom'] . ' '. $data['nom'] ;?></p>
    <p><em><strong>Rédaction: </strong> <?= $data['creation_date'];?></em></p>
    <p><strong></strong> <?= $data['text'];?></p>    
    <p><a class="bleu" href="index.php">Retour aux articles</a></p>
    <br>
</div>
