<h1>Profil</h1>
    <form action="?controller=author&function=update" method="post">
        <input type="hidden" name="id" value="<?= $data['author']['id']; ?>">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="<?= $data['author']['name'];?>">
        <label for="address">Username</label>
        <input type="text" id="username" name="username" value="<?= $data['author']['username'];?>">
        <label for="phone">Password</label>
        <input type="password" id="password" name="password" value="<?= $data['author']['password'];?>">       
        <input type="submit" value="Update" class="btn">
    </form>