<?php
function article_controller_index(){
    require(MODEL_DIR.'/article.php');
    $data = article_model_list();
    render(VIEW_DIR.'/user/index.php', $data);
}

function article_controller_insert($request){
    require(MODEL_DIR.'/article.php');
    article_model_insert($request);
    header("Location: ?module=user&action=index");
}

function article_controller_view($request){
    require(MODEL_DIR.'/article.php');
    $article = article_model_view($request);
    render(VIEW_DIR.'/user/view.php', $user);
}

?>