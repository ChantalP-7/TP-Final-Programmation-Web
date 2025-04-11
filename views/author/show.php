
<div class="div-article-unique">
 <h1>Bonjour <?= $author['name'];?></h1>
    <p><strong>Nom: </strong> <?= $data['name'];?></p>
    <p><strong>Username: </strong> <?= $data['Username'];?></p>    
    <a href="?controller=author&function=show&id=<?= $author['id']?>" class="btn">Edit</a>
</div>
