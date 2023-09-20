<?php

require_once '../config/connect.php';

$house_agentName = $_POST['house_agentName'];
$house_agentSurname = $_POST['house_agentSurname'];
$house_agentPatronymic = $_POST['house_agentPatronymic'];
$house_agentTel = $_POST['house_agentTel'];
$house_agentEmail = $_POST['house_agentEmail'];

mysqli_query($connect, query:"INSERT INTO `house_agent` (`id_house_agent`, `name`, `surname`, `patronymic`, `telephone`, `email`) VALUES (NULL, '$house_agentName', '$house_agentSurname', '$house_agentPatronymic', '$house_agentTel', '$house_agentEmail')");

header('Location:/admin.php');

?>