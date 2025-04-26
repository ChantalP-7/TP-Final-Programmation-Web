<?php

/***
 * Fonction qui insère dans la bd les données récupérérées du formulaire de update
 */
function author_insert($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $password =  password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);    
    $sql = "INSERT INTO author (firstName, name, username, password) VALUES ('$firstName', '$name', '$username', '$password')";
    if(mysqli_query($connex, $sql)){
        return mysqli_insert_id($connex);
    }else{
        return false;
    }
}

/**
 * Fonction qui sélectionne tous les authors
 */
function author_single() {
    require(CONNEX_DIR);
    $sql = "SELECT * from author";
    $result = mysqli_query($connex, $sql);
    return $result;
}

/***
 * Fonction qui sélectionne les authors et les articles
 */
function author_select(){
    require(CONNEX_DIR);
    $sql = "SELECT author.*, title from author join article ON article.authorID = author.authorID";
    $result = mysqli_query($connex, $sql);
    return $result;
}

/**
 * Fonction qui sélectionne un author par son id
 */
function author_select_id($id){
    require(CONNEX_DIR);
    $id = mysqli_real_escape_string($connex, $id);
    $sql = "SELECT * FROM author WHERE author.authorID = '$id'";
    $result = mysqli_query($connex, $sql);
    $count = mysqli_num_rows($result);
    if($count == 1){
        $result  = mysqli_fetch_array($result, MYSQLI_ASSOC);
        return $result;
    }else{
        return false;
    }    
}

/**
 * Fonction qui met à jour la fiche de l'author
 */
function author_update($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $password =  password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
    $sql = "UPDATE author SET firstName = '$firstName',  name = '$name', username = '$username', password = '$password' WHERE authorID = '$authorID'";

    if(mysqli_query($connex, $sql)){
        return true;
    }else{
        return false;
    }
}

/**
 * Fonction qui vérifie les données de la session
 */
function author_check_session() {
    require(CONNEX_DIR);
    session_start();
    if($_SESSION['maSession'] !== md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR'])){
        header('location:?controller=article&function=showMyArticles');
        exit();
    }
}


/**
 * Même chose
 */
function author_check_sessionProfle() {
    require(CONNEX_DIR);
    session_start();
    if($_SESSION['maSession'] !== md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR'])){
        header('location:?controller=author&function=show');
        exit();
    }
}

/**
 * Fonction qui sélectionne les données nécessaires à l'authentification
 */
function author_login($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $sql = "SELECT * FROM author";
    if(mysqli_query($connex, $sql)){
        return true;
    }else{
        return false;
    }
}

/**
 * Fonction qui ferme la session
 */
function author_logout() {
    session_start();
    session_destroy();
    header('location:?controller=author&function=login');
}

 /**
  * Session qui part la session et authentifie pour ensuite envoyer dans l'espace de l'auteur
  */
function author_auth($username, $password) {
    require(CONNEX_DIR);

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $username = mysqli_real_escape_string($connex, $username);
    $sql =  "SELECT * FROM author WHERE username = '$username'";
    $result = mysqli_query($connex, $sql);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $dbPassword = $user['password'];

        if (password_verify($password, $dbPassword)) {
            session_regenerate_id();
            $_SESSION['username'] = $user['username'];
            $_SESSION['authorID'] = $user['authorID'];
            $_SESSION['maSession'] = md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR']);
            return $_SESSION['authorID'];
        } else {
            header('Location: ?controller=author&function=check');
            exit;
        }
    } else {
        return false;
    }
}

?>
