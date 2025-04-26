<?php

/***
 * Function qui sélectionne tous les articles de la bd 'article' et joint les données de la bd 'author';
 */

function article_select(){
    require(CONNEX_DIR);
    $sql = "SELECT articleID, title, SUBSTRING(text, 1, 100) AS Intro, creation_date as 'Date de rédaction', firstName as prenom, name as nom, creation_date as 'Date de rédaction'
    FROM article 
    INNER JOIN author ON article.authorID = author.authorID 
    ORDER By title ASC";
    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $result;
}

/**
 * Selectionne les 8 articles récents publiés par date de rédaction ascendante.
 */

function article_select_recent(){
    require(CONNEX_DIR);
    $sql = "SELECT articleID, title, SUBSTRING(text, 1, 100) AS Intro, creation_date as 'Date de rédaction', firstName as prenom, name as nom 
    FROM article
    INNER JOIN author ON author.authorID = article.authorID 
    ORDER BY creation_date DESC
    LIMIT 8";
    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $result;
}
/***
 * Function qui sélectionne tous les articles et les authors ordonnés par prénom d'auteurs
 */
function article_select_author(){
    require(CONNEX_DIR);
    $sql = "SELECT article.*, firstName as prenom, name as nom, SUBSTRING(text, 1, 100) as Intro, creation_date as 'Date de rédaction'
    FROM article 
    INNER JOIN author ON article.authorID = author.authorID
    ORDER By prenom ASC";
    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $result;
}

/***
 * Fonction qui met à jour la base de données article
 */
function article_update($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $sql = "UPDATE article SET title = '$title', text = '$text', creation_date = '$creation_date' WHERE articleID = '$articleID'";

    if(mysqli_query($connex, $sql)){
        return true;
    }else{
        return false;
    }
}

/**
 * Fonction qui supprime un article selon son id
 */
function article_delete($id){
    require(CONNEX_DIR);
    $id = mysqli_real_escape_string($connex, $id);
    $sql = "DELETE FROM article WHERE articleID = '$id'";
    if(mysqli_query($connex, $sql)){
        return true;
    }else{
        return false;
    }
}

/***
 * Fonction qui sélectionne un article par son id
 */
function article_select_id($id){
    require(CONNEX_DIR);
    $id = mysqli_real_escape_string($connex, $id);
    $sql = "SELECT article.*, firstName as prenom, name as nom
    FROM article JOIN author ON author.authorID = article.authorID 
    WHERE articleID = $id ";
    $result = mysqli_query($connex, $sql);
    $count = mysqli_num_rows($result);
    if($count == 1){
        $result  = mysqli_fetch_array($result, MYSQLI_ASSOC);
        return $result;
    }else{
        return false;
    }    
}

/***
 * Fonction qui sélectionne la liste des articles par auteur.
 */
function obtenir_liste_articles_author($authorID)
{
    require(CONNEX_DIR);
    $authorID = mysqli_real_escape_string($connex, $authorID);
    $sql = "SELECT article.*, author.firstname as prenom, author.name AS nom, author.authorID, author.username
    FROM article
    JOIN author ON author.authorID = article.authorID 
    WHERE article.authorID = '$authorID'";    
    $result = mysqli_query($connex, $sql);
    if (!$result) {
        die('Erreur de requête SQL: ' . mysqli_error($connex));
    }
    $count = mysqli_num_rows($result);
    if ($count >= 0) {       
        $articles = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $articles[] = $row;
        }
        return $articles;
    } else {
        return false;
    }
}

/**
 * Fonctionne qui sélectionne un article par l'id du author
 */
function article_select_idAuthor($idAuthor){
    require(CONNEX_DIR);
    $idAuthor = mysqli_real_escape_string($connex, $idAuthor);
    $sql = "SELECT article.*, name, authorID
    FROM article
    JOIN author ON author.authorID = article.authorID
    WHERE authorID = '$idAuthor'";
    $result = mysqli_query($connex, $sql);;        
    return $result;
}

/**
 * Fonction qui insère les données récupérées de la fonction 'update' dans la base de données.
 */
function article_insert($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key = mysqli_real_escape_string($connex, $value);
    }    
    $sql = "INSERT INTO article (title, text, creation_date, authorID) VALUES ('$title' ,'$text','$creation_date', $authorID)";
    if(mysqli_query($connex, $sql)){
        return mysqli_insert_id($connex);
    }else{
        return false;
    }
}


