<?php

function article_controller_index(){
    require_once(MODEL_DIR."/article.php");
    $article = article_select();
    render('article/index.php', $article);
}

function article_controller_showAuthor(){
    require_once(MODEL_DIR."/article.php");
    $article = article_select_author();
    render('article/showArticleAuthor.php', $article);
}

function article_controller_create(){
    require_once(MODEL_DIR."/article.php");
    require_once(MODEL_DIR."/author.php");
    render('article/create.php'); 
}

function article_controller_createFirstArticle(){
    require_once(MODEL_DIR."/article.php");
    require_once(MODEL_DIR."/author.php");
    render('article/createFirstArticle.php'); 
}

function article_controller_insert($request){
    require_once(MODEL_DIR."/article.php");
    $article = article_insert($request);
    header('location:?controller=base&function=index', $article);  
}

function article_controller_show($request){
    $idArticle = $request['articleID'];    
    require_once(MODEL_DIR."/article.php");
    $article = article_select_id($idArticle);
    if($article){
         return render('article/showArticle.php', $article);
    }else{
        echo "pas trouvé";
    }
}

function article_controller_completeListArticles() {
    require_once(MODEL_DIR."/article.php");
    $completeListArticles = article_select();
    render('article/completeListArticles.php', $completeListArticles);
}

function article_controller_edit($request){
    require_once(MODEL_DIR."/article.php");
    $idArticle = $request['articleID'];
    $article = article_select_id($idArticle);
    if($article){
        return render('article/edit.php', $article);
    }else{
        echo "pas trouvé";
    }
}

function article_controller_update($request){
    require_once(MODEL_DIR."/article.php");
    $article = article_update($request);
    if($article){
        header('location:?controller=article');
    }else{
        echo "error";
    }
}

function article_controller_delete($request){
    $id = $request['articleID'];
    require_once(MODEL_DIR."/article.php");
    $article = article_delete($id);
    if($article){
        header('location:?controller=article');
    }else{
        echo "error";
    }
}