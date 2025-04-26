<?php
    $title="Bonne lecture 📚☕";
    ?>
    <h1>Bonjour cher.e étudiant.e !</h1>
     <?php
    foreach($data as $row){
    ?>
<div class="div-article-unique">
    <h3><?= $row['title'];?></h3>  
     <p><em><strong>Auteur: </strong> <?= $row['prenom'] . ' '. $row['nom'] ;?></em></p>
    <p><strong>Rédaction: </strong> <?= $row['Date de rédaction'];?></p>  
    <p><strong>texte: </strong> <?= $row['text'];?></p>
   
    <div class="rangee-boutons">
        <a href="?controller=article&function=edit&articleID=<?= $row['articleID']?>" class="bouton">Éditer</a>
        <a href="?controller=article&function=create&articleID=<?= $row['articleID']?>"class="bouton">Ajouter un article</a>         
        <a href="?controller=article&function=delete&articleID=<?= $row['articleID']?>" class="bouton danger">Supprimer</a> 
    </div> 
</div>
 <?php
        }
        ?>
 