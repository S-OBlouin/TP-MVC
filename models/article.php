<?php
function article_model_list(){
    require(CONNEX_DIR);
    $sql = "SELECT * FROM forum";
    $result = mysqli_query($con, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($con);
    return $result;
}

function article_model_insert($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
    }
    print_r($key, $value);
    $sql = "INSERT INTO forum (titre, article) VALUES ('$titre','$article')";
    mysqli_query($con, $sql);
    mysqli_close($con);
}

function article_model_view($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
    }
    $sql = "SELECT * FROM forum WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    $result = mysqli_fetch_assoc($result);
    mysqli_close($con);
    return $result;
}

?>