<?php

require_once '../config/connect.php';

$user_agentName = $_POST['user_agentName'];
$user_agentSurname = $_POST['user_agentSurname'];
$user_agentPatronymic = $_POST['user_agentPatronymic'];
$user_agentTel = $_POST['user_agentTel'];
$user_agentEmail = $_POST['user_agentEmail'];

mysqli_query($connect, query:"INSERT INTO `user_agent` (`id_user_agent`, `name`, `surname`, `patronymic`, `telephone`, `email`) VALUES (NULL, '$user_agentName', '$user_agentSurname', '$user_agentPatronymic', '$user_agentTel', '$user_agentEmail')");

header('Location:/admin.php');

?>