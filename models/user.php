<?php
function user_model_list(){
    require(CONNEX_DIR);
    $sql = "SELECT * FROM utilisateur";
    $result = mysqli_query($con, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($con);
    return $result;
}

function user_model_insert($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
    }
    $password = password_hash($mot_de_passe, PASSWORD_BCRYPT);
    $sql = "INSERT INTO utilisateur (nom, nom_utilisateur, mot_de_passe, naissance) VALUES ('$nom','$nom_utilisateur','$mot_de_passe','$naissance')";
    mysqli_query($con, $sql);
    mysqli_close($con);
}

function user_model_view($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
    }
    $sql = "SELECT * FROM utilisateur WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    $result = mysqli_fetch_assoc($result);
    mysqli_close($con);
    return $result;
}

function user_model_edit($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
    }
    $sql = "UPDATE utilisateur SET nom = '$nom', nom_utilisateur = '$nom_utilisateur', mot_de_passe = '$mot_de_passe' WHERE id = '$id'";
    mysqli_query($con, $sql);
    mysqli_close($con);
}
function user_model_delete($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
    }
    $sql = "DELETE FROM utilisateur WHERE id = '$userId'";
    mysqli_query($con, $sql);
    mysqli_close($con);
}

?>