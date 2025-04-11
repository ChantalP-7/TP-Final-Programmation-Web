
<?php
    $title="Connexion";
    ?>
        <h1>Connexion</h1>
        <form action="?controller=author&function=auth" method="post">   
            <input type="hidden" id="id" name="id">
            <label for="username">Username</label>
            <input type="email" id="username" name="username">
            <label for="pwd">Password</label>
            <input type="password" id="pwd" name="password">
            <input type="submit" value="Login" class="btn">
        </form>