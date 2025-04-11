<?php

function article_select(){
    require(CONNEX_DIR);
    $sql = "SELECT article.*, name as 'Nom Auteur', drafting_date as 'Date de rédaction'  FROM article INNER JOIN author ON author.id = id_author ORDER By title";
    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $result;
}

function article_update($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $sql = "UPDATE article SET title = '$title', text = $text, drafting_date = '$drafting_date' WHERE id = '$id'";

    if(mysqli_query($connex, $sql)){
        return true;
    }else{
        return false;
    }
}

function article_delete($id){
    require(CONNEX_DIR);
    $id = mysqli_real_escape_string($connex, $id);
    $sql = "DELETE FROM article WHERE id = '$id'";
    if(mysqli_query($connex, $sql)){
        return true;
    }else{
        return false;
    }
}

function article_select_id($id){
    require(CONNEX_DIR);
    $id = mysqli_real_escape_string($connex, $id);
    $sql = "SELECT article.*, name FROM article JOIN author ON author.id = id_author WHERE article.id = '$id'";
    $result = mysqli_query($connex, $sql);
    $count = mysqli_num_rows($result);
    if($count == 1){
        $result  = mysqli_fetch_array($result, MYSQLI_ASSOC);
        return $result;
    }else{
        return false;
    }    
}


function author_select_article($id){
    require(CONNEX_DIR);
    $id = mysqli_real_escape_string($connex, $id);
    $sql = "SELECT article, titre, SUBSTRING(text, 1, 250) AS Intro, drafting_date, author.name, id_author FROM article
        JOIN author ON article.id_author = author WHERE id_author = ' . $_id_author;";
   $result = mysqli_query($connex, $sql);
    $count = mysqli_num_rows($result);
    if($count == 1){
        $result  = mysqli_fetch_array($result, MYSQLI_ASSOC);
        return $result;
    }else{
        return false;
    }    
}

function article_insert($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key = mysqli_real_escape_string($connex, $value);
    }    
    $sql = "INSERT INTO article (title, text, drafting_date, id_author) VALUES ('$title' ,'$text','$drafting_date', '$id_author')";
    if(mysqli_query($connex, $sql)){
        return mysqli_insert_id($connex);
    }else{
        return false;
    }
}


