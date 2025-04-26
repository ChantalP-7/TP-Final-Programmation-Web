<?php
    $title="Accueil";
    ?>
    <h2>Articles des étudiants</h2>
        <table>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Texte</th>
                    <th>Auteur</th>
                    <th>Rédaction</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($data as $row){
                ?>
                <tr>
                    <td class="grasLeger"><?= $row['title'];?></td>
                    <td><?= $row['Intro'];?>  <a class="bleu" href="?controller=article&function=show&articleID=<?= $row['articleID'];?>">Voir l'article</a></td>
                    <td class="centre"><?= $row['prenom'] . ' ' . $row['nom'];?></td>
                    <td><?= $row['Date de rédaction'];?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>


        