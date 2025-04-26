<?php 
$title = "Nos chers auteur.e.s 💦";
$h1 = "Articles par auteurs" ;
?>

<table>
    <thead>
        <tr>
            <th>Auteur</th>
            <th>Titre</th>
            <th>Intro</th>
            <th>Date de rédaction</th>
            <th>Article complet</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($data as $row){
        ?>
        <tr>
            <td class="grasLeger"><?= $row['nom'];?></td>
            <td><?= $row['title'];?></td>
            <td><?= $row['intro'];?></td>
            <td><?= $row['creation_date'];?></td>
            <td><a href="?controller=article&function=show&articleID=<?= $row['articleID'];?>">Voir l'article</a></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>


