<?php

require_once '../config/connect.php';

$userName = $_POST['userName'];
$userSurname = $_POST['userSurname'];
$userPatronymic = $_POST['userPatronymic'];
$userTel = $_POST['userTel'];
$userEmail = $_POST['userEmail'];
$userPass = $_POST['userPass'];
$userBudget = $_POST['userBudget'];

mysqli_query($connect, query:"INSERT INTO `user` (`id_user`, `name`, `surname`, `patronymic`, `telephone`, `email`, `password`, `budget`) VALUES (NULL, '$userName', '$userSurname', '$userPatronymic', '$userTel', '$userEmail', '$userPass', '$userBudget')");

header('Location:/admin.php');

?>

