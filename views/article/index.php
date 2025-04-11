<h1>Article</h1>
        <table>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Texte</th>
                    <th>Auteur</th>
                    <th>Date de rédaction</th>
                    <th>Article complet</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($data as $row){
                ?>
                <tr>
                    <td><?= $row['title'];?></td>
                    <td><?= $row['text'];?></td>
                    <td><?= $row['Nom Auteur'];?></td>
                    <td><?= $row['Date de rédaction'];?></td>
                    <td><a href="?controller=article&function=show&id=<?= $row['id'];?>">Voir l'article</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>


        