<?php

function base_controller_index(){
    require_once(MODEL_DIR."/article.php");
    $article = article_select_recent();
   render("base/showRecentArticle.php", $article);
}

?>

