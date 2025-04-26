<?php

function author_controller_index(){
    require_once(MODEL_DIR."/author.php");
    $author = author_single();
    render('author/index.php', $author);
}

function author_controller_create(){
    require_once(MODEL_DIR."/author.php");
   return render('author/create.php');
}

function author_controller_insert($request){
    require_once(MODEL_DIR."/author.php");
    $data = author_insert($request);
    header('location:?controller=author&function=login', $data);   
}

function author_controller_edit($request){
    require_once(MODEL_DIR."/author.php");
    $authorID = $request['authorID'];
    $author= author_select_id($authorID);
    if($author){
        return render('author/edit.php', $author);
    }else{
        echo "pas trouvé";
    }
}

function author_controller_update($request){    
    require_once(MODEL_DIR."/author.php");
    $author = author_update($request);
    if($author){
        header('location:?controller=author');
    }else{
        echo "error";
    }
}

function author_controller_show($request){
    $authorID = $request['authorID'];
    require_once(MODEL_DIR."/author.php");
    $data = author_select_id($authorID);
    if($data){
        return render('author/show.php', $data);
    }else{
        echo "pas trouvé";
    }
}

function author_controller_check($request){
    require_once(MODEL_DIR."/author.php");
    $data = author_check_session($request);
     if($data){
        return render('author/login.php', $data);
    }else{
        echo "pas trouvé";
    }
}

function author_controller_login($request){
    require_once(MODEL_DIR."/author.php");
    $data = author_login($request);
     if($data){
        return render('author/login.php', $data);
    }else{
        echo "pas trouvé";
    }
}

function author_controller_auth($request){
    require_once(MODEL_DIR."/author.php");
    require_once(MODEL_DIR."/article.php");
    $username = $request['username'];
    $password = $request['password']; 
    $authorID = author_auth($username, $password);
    if ($authorID) {
        $_SESSION['authorID'] = $authorID;
        $article = obtenir_liste_articles_author($authorID);        
       if($article) {
            return render('article/showMyArticles.php', ['article' => $article], $_SESSION['authorID']);
        }        
        else {
            return render('article/createFirstArticle.php', $_SESSION['authorID']);
        }
    } else {
        return render('author/login.php');
    }
}


function author_controller_logout(){
    require_once(MODEL_DIR."/author.php");
    $data = author_logout();
     return $data;
}
