
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

















<h1>Client Create</h1>
    <form action="?controller=author&function=store" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name">
        <label for="username">Username</label>
        <input type="text" id="username" name="username">
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        <label for="birthday">Birthday</label>
        <input type="text" id="birthday" name="birthday">
        <input type="submit"  class="btn" value="Save">
    </form>