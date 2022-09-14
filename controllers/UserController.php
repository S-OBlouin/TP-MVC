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

function user_controller_login(){
    render(VIEW_DIR.'/user/login.php');
}

function user_controller_logincheck($request){
    require(MODEL_DIR.'/user.php');
    user_model_login($request);
    $rowcount = mysqli_num_rows($result);

    if($rowcount == 1){
        $user = mysqli_fetch_assoc($result);

        $dbPassword = $user['mot_de_passe'];

        if(password_verify($password, $dbPassword)){
            session_regenerate_id();
            $_SESSION['id'] = $user['id'];
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['fingerPrint'] = md5($_SERVER['HTTP_USER_AGENT'].$_SERVER[
            'REMOTE_ADDR']);
            header("Location: ?module=user&action=index");
        }else{
            header("Location: ?module=user&action=login");
        }
    }else{
        header("Location: ?module=user&action=login");
    }
}
?>