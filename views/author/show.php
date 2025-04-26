<?php
    $title="Mon profil";
    
    ?>

<div class="div-centree">
    <h2 class="centre">Bonjour <?= $data['firstName'];?></h2>
    <h3 class="centre">Tu peux modifier ton profil</h3>
    <a class="bouton" href="?controller=author&function=edit&authorID=<?= $data['authorID']?>">Modifier mon Profil</a>
</div>
