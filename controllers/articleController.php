<?php

function article_controller_index(){
    require_once(MODEL_DIR."/article.php");
    $article = article_select();
    render('article/index.php', $article);
}

function article_controller_store($request){
    require_once(MODEL_DIR."/article.php");
    $article = article_insert($request);
    header('location:?controller=article&function=show&id='.$article);  
}

function article_controller_show($request){
    $id = $request['id'];
    require_once(MODEL_DIR."/article.php");
    $article = article_select_id($id);
    if($article){
        return render('article/showArticle.php', $article);
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
    $id = $request['id'];
    require_once(MODEL_DIR."/author.php");
    $article = article_delete($id);
    if($article){
        header('location:?controller=article');
    }else{
        echo "error";
    }
}