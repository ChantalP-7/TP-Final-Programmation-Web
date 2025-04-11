<h1>Inscription</h1>
<form action="?controller=author&function=insert" method="post">
    <label for="name">Name</label>
    <input type="text" minlength="2" maxlength="25" name="name" id="name" required>
    <label for="username">Username</label>
    <input type="text" minlength="2" maxlength="25" name="username" id="username" required>
    <label for="password">Password</label>
    <input type="password" minlength="6" maxlength="20" name="password" id="password" required> 
    <input type="submit"  class="btn" value="Save">        
</form>