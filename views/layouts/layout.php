<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="/assets/css/main.css">
    <link href="/assets/css/style.php" rel="stylesheet" type="text/css" media="all" />
</head>
<body class="fond-de-page">
    
    <header>
        <nav>
            <div>
                <a href="?controller=article">Tous les articles</a>
                <a href="?controller=author&function=create">Inscription</a>            
                <a href="?controller=author&function=login">Connexion</a>
                <a href="?controller=author&function=logout">Déconnexion</a>
            </div>
        </nav>
    </header>
    <main>
        <div class='conteneur'>    
            <?= $content; ?>    
        </div>
    </main>
    <footer>
        <div>
            <p>Copyright Chantal 2025</p> 
        </div>
    </footer>
    </div>   
</body>
</html>