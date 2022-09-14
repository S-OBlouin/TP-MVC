<?php
$msg_error = null;
if(isset($_GET['msg'])){
    if($_GET['msg'] == 1){
        $msg_error = " Verifier le nom d utilisateur";
    }elseif($_GET['msg'] == 2){
        $msg_error = "Verifier le mot de passe";
    }
}
?>

<h2>Login</h2>
<span><?php echo $msg_error ; ?></span>
<form action="authentication.php" method="post">
    <label> Username
        <input type="email" name="username">
    </label>
    <label> Password
        <input type="password" name="password">
    </label>
    <input type="submit" value="Login">
</form>