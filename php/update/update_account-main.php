<?php 
require_once '../config/connect.php';

$userId=$_POST['userId'];
$userName = $_POST['userName'];
$userSurname = $_POST['userSurname'];
$userPatronymic = $_POST['userPatronymic'];
$userTel = $_POST['userTel'];
$userEmail = $_POST['userEmail'];
$userPass = $_POST['userPass'];
$userBudget = $_POST['userBudget'];

mysqli_query($connect,  query:"UPDATE `user` SET `name` = '$userName', `surname` = '$userSurname', `patronymic` = '$userPatronymic', `telephone` = '$userTel', `email` = '$userEmail', `password` = '$userPass', `budget` = '$userBudget' WHERE `user`.`id_user` = '$userId'");
header('Location:/account-main.php');
?>

