<?php


function author_controller_create(){
    require_once(MODEL_DIR."/author.php");
   return render('author/create.php');
}


function author_controller_insert($request){
    require_once(MODEL_DIR."/author.php");
    $data = author_insert($request);
    header('location:?controller=author&function=login', $data);   
}


function author_controller_show($request){
    $id = $request['id'];
    require_once(MODEL_DIR."/author.php");
    $author = author_select_id($id);
    if($author){
        return render('author/show.php', $author);
    }else{
        echo "pas trouvé";
    }
}

function author_controller_editArticle($request){
    $id = $request['id'];
    require_once(MODEL_DIR."/article.php");
    $author = author_select_id($id);
    if($author ){
        require_once(MODEL_DIR."/article.php");
        $articles =article_select();
         
        $author= array('author'=>$author);
        $articles= array('article'=>$articles);
        $data = array_merge($author, $articles);
        return render('article/edit.php', $data);
    }else{
        echo "pas trouvé";
    }
}

function author_controller_showArticle($request){
    $id = $request['id'];
    require_once(MODEL_DIR."/article.php");
    $author = author_select_id($id);
    if($author ){
        require_once(MODEL_DIR."/article.php");
        $articles =article_select();         
        $author= array('author'=>$author);
        $articles= array('article'=>$articles);
        $data = array_merge($author, $articles);
        return render('article/showArticle.php', $data);
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
    $username = $request['username'];
    $password = $request['password'];  
    $data = author_auth($username, $password);
    if($data){
        //$id = $request['id'];
        //return render('author/pageProtegee.php', $data);
        header('location:?controller=article&function=index');
        print_r($data);
    }else{
        echo "La connexion fonctionne pas 😫";
       // print_r($data);
    }
}
