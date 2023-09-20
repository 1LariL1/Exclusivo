<?php require_once 'connect.php';?>

<?php session_start();?>

<?php

$email=$_POST["email"];
$pass=$_POST["password"];

$sql = $pdo -> prepare("SELECT id_user,email FROM user WHERE email=:email AND password=:password");
$sql -> execute(array('email' => $email, 'password' => $pass));
$array = $sql -> fetch(PDO::FETCH_ASSOC);




if ($array["id_user"]==1){
    $_SESSION['email']=$array["email"];
    header('Location:../../admin.php');
}
else {
    header('Location:login.php');
}
?>