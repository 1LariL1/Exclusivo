<?php 
require_once '../config/connect.php';

$user_agentId = $_POST['user_agentId'];
$user_agentName = $_POST['user_agentName'];
$user_agentSurname = $_POST['user_agentSurname'];
$user_agentPatronymic = $_POST['user_agentPatronymic'];
$user_agentTel = $_POST['user_agentTel'];
$user_agentEmail = $_POST['user_agentEmail'];


mysqli_query($connect,  query:"UPDATE `user_agent` SET `name` = '$user_agentName', `surname` = '$user_agentSurname', `patronymic` = '$user_agentPatronymic', `telephone` = '$user_agentTel', `email` = '$user_agentEmail' WHERE `user_agent`.`id_user_agent` = '$user_agentId'");
header('Location:/admin.php');
?>

