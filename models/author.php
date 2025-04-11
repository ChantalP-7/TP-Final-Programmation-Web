<?php

function author_insert($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $password =  password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);    
    $sql = "INSERT INTO author (name, username, password) VALUES ('$name', '$username', '$password')";
    if(mysqli_query($connex, $sql)){
        return mysqli_insert_id($connex);
    }else{
        return false;
    }
}

function author_select_id($id){
    require(CONNEX_DIR);
    $id = mysqli_real_escape_string($connex, $id);
    $sql = "SELECT * from author where id = '$id'";
    $result = mysqli_query($connex, $sql);
    $count = mysqli_num_rows($result);
    if($count == 1){
        $result  = mysqli_fetch_array($result, MYSQLI_ASSOC);
        return $result;
    }else{
        return false;
    }    
}

function author_check_session() {
    require(CONNEX_DIR);

    session_start();
    if($_SESSION['maSession'] !== md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR'])){
        header('?controller=author&function=login');
        exit();
    }
}


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

function author_auth($username, $password){
    require(CONNEX_DIR);
    session_start();
    $username = mysqli_real_escape_string($connex, $username);
    $sql =  "SELECT * FROM author WHERE username = '$username'";
    $result = mysqli_query($connex, $sql);
    $count = mysqli_num_rows($result);
    if($count == 1){
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $dbPassword = $user['password'];
        if(password_verify($password, $dbPassword)){
            session_regenerate_id();
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] =  $user['username'];
            $_SESSION['maSession'] = md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR']);
            return $_SESSION['username'];

        }else{
            header('?controller=author&function=check');
        }
    }else{
        return false;
    }
}

?>
