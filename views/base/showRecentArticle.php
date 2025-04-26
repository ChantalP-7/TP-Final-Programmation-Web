    <?php
    $title="Bienvenue";
    ?>
        <table>
            <h2>Nos 5 articles les plus récents</h2>
            <thead>
                <tr>
                    <th>Rédaction</th>
                    <th>Auteur</th>
                    <th>Titre</th>
                    <th>Texte</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($data as $row){
                ?>
                <tr>
                    <td class="grasLeger"><?= $row['Date de rédaction'];?></td>
                    <td class="centre"><?= $row['prenom'].' '. $row['nom'];?></td>
                    <td><?= $row['title'];?></td>
                    <td><?= $row['Intro'];?>  <a class="bleu" href="?controller=article&function=show&articleID=<?= $row['articleID'];?>">Voir l'article</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>