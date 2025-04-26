# TP-Final-Programmation-Web-dynamique - Collège Maisonneuve Hiver 2025

Faire un forum d'étudiants qui écrivent des articles. 

Objectifs:

1. Un utilisateur peut lire les articles.
2. Un utilisateur peut s'inscrire pour créer un profil
3. Dès le profil créé, l'utilisateur peur écrire son premier article.
4. Un auteur peut se connecter et entrer dans son espace où ses articles sont affichés ave la possibilité de les modifier
 et effacer. Dans le même espace, l'auteur peut ajouter un nouvel article qui s'ajoutera à sa liste avec son identifiant. Enfin, l'auteur peut accéder à son profil et le mettre à jour.
5. L'utilisateur publique peut voir les articles au complet, avec les auteurs, les 8 derniers récents ou encore, cliquer sur le lien de l'article pour l'afficher au complet individuellement avec nom auteur, date etc.

 Attendu:
 
7. Le tout fait en MVC procédural avec render
8. La demande était de créer une base de données Forum avec tables article et author. J'ai inséré quelques auteurs et articles pour commencer.
9. Selon les enseignements reçus, le travail a été fait en MVC modulaire avec vues, controlleur et modèle. Les requêtes squl ont été mises dans le fichier models, le vues on été séparées dans deux fichiers, author et articles qui ont été mis dans le dossier layout. La page principale index servait de contrôleur des fichiers controllers d'author, article et base.
10. Des sécurités ont été mises en place pour empêcher les injections sql et permettre de contrôler les données et le volume : safe Addslaches, mysqli_real_escape_string, s'assurer que les données sont bien du type attendu, password_verify pour le mot de passe et des balises dans les formulaires, etc.
11. Les variables session ont été utilisées pour permettre à la personne authentifiée d'avoir accès à ses articles et son profil.
12. Oups, j'ai oublié le très important, les mots de passe sont encrpyté dans la base de données avec la fonction password_hash, 'cost' => 10....

