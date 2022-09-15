<?php
function article_controller_index(){
    require(MODEL_DIR.'/article.php');
    $test = article_model_list();
    render(VIEW_DIR.'/user/index.php', $test);
}

function article_controller_insert($request){
    require(MODEL_DIR.'/article.php');
    article_model_insert($request);
    header("Location: ?module=user&action=index");
}
?>