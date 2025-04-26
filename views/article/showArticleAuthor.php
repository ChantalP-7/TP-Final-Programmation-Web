<?php 
    $title = "Nos chers auteur.e.s 💦";
    $h1 = "Articles par auteurs" ;
?>

<h2>Nos auteurs 💦</h2>
        <table>
            <thead>
                <tr>
                    <th>Auteur</th>
                    <th>Titre</th>
                    <th>Texte</th>
                    <th>Rédaction</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($data as $row){
                ?>
                <tr>
                    <td class="grasLeger"><?= $row['prenom'] . ' '. $row['nom'];?></td>
                    <td><?= $row['title'];?></td>
                    <td><?= $row['Intro'];?> <a class="bleu" href="?controller=article&function=show&articleID=<?= $row['articleID'];?>">Voir l'article</a></td>
                    <td><em><?= $row['Date de rédaction'];?></em></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>