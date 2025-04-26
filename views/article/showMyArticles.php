<?php
    $title="C'est mon espace! 💦📚☕";
    ?>
<h2 class="centre">Bienvenue <?= $data['article'][0]['prenom']  ?> dans ton espace ☕ !</h2>
<br>
<div class="boutons-centres">
    <?php 
    echo "<a class='bouton' href='?controller=author&function=show&authorID=" . $data["article"][0]["authorID"]. "'>Mon profil</a>" ?>
     <?php 
    echo "<a class='bouton gris' href='?controller=article&function=create&authorID=" . $data["article"][0]["authorID"] ."'>Ajoute un article</a>" ?>
</div>
<br>
<h2 class="centre">Tes articles 📚</h2>
<br>
<?php 
    foreach($data['article'] as $article){
            ?>
    
    <div class="div-article-unique">
        <?php 
            echo "<h3 class='grasLeger'>" . $article["title"]. "</h3>" . "<br>  <h4>" .  " Auteur.e :  " . $article["prenom"] ." " . $article["nom"] . " / ".  " <em>Rédaction : " . $article["creation_date"] ."</em></h4>" . "<p> " . $article["text"] . "</p>" . "<div class='rangee-boutons'> <a class='bouton gris' href='?controller=article&function=edit&articleID=" . $article["articleID"] . "'>Modifier l'article</a><br><a class='danger bouton' href='?controller=article&function=delete&articleID=" . $article["articleID"] . "'>Supprimer l'article</a></div></td>" . "
            </tr>";
        ?>
        
    </div>
    <br>
    <?php    
        
    }
    ?>

<p class="separation"></p>
<br>
<h2>Fin des articles</h2>