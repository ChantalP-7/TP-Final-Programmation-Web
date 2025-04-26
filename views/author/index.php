<?php
    $title="Profil";
    session_start();
    ?>
    <h2 class="centre">Profil étudiant</h2>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Profil</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($data as $row){
                ?>
                <tr>                    
                    <td><?= $row['firstName'] . " " . $row['name'];?> </td><td> <a class="bleu" href="?controller=author&function=show&authorID=<?= $row['authorID'];?>">Voir ton profil</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>