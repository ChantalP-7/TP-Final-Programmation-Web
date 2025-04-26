
<h1>Mon article</h1>
    <form action="?controller=article&function=edit" method="post">
        <input type="hidden" name="id" value="<?= $data['article']['id']; ?>">
        <label for="name">Titre</label>
        <input type="text" id="title" name="title" value="<?= $data['article']['title'];?>">
        <label for="address">Texte</label>
        <textarea  cols="85%" rows="10" placeholder="Mon article" id="text" name="text" value="<?= $data['article']['text'];?>">
        <label for="phone">Date</label>
        <input type="date" id="date" name="date" value="<?= $data['article']['drafting_date'];?>">
        <label for="city">Auteur</label>
        <input type="texte" id="name" name="name" value="<?= $data['author']['name'];?>">        
        <input type="submit" value="Update" class="btn">
    </form>

