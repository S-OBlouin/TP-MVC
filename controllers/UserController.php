<?php
function user_controller_index(){
    require(MODEL_DIR.'/user.php');
    $data = user_model_list();
    render(VIEW_DIR.'/user/index.php', $data);
}

function user_controller_create(){
    render(VIEW_DIR.'/user/create.php');
}

function user_controller_insert($request){
    require(MODEL_DIR.'/user.php');
    user_model_insert($request);
    header("Location: ?module=user&action=index");
}

function user_controller_view($request){
    require(MODEL_DIR.'/user.php');
    $user = user_model_view($request);
    render(VIEW_DIR.'/user/view.php', $user);
}

function user_controller_edit($request){
    require(MODEL_DIR.'/user.php');
    user_model_edit($request);
    header("Location: ?module=user&action=index");
}

function user_controller_delete($request){
    require(MODEL_DIR.'/user.php');
    user_model_delete($request);
    header("Location: ?module=user&action=index");
}
?>