<?php 
require_once '../config/connect.php';

$house_agentId = $_POST['house_agentId'];
$house_agentName = $_POST['house_agentName'];
$house_agentSurname = $_POST['house_agentSurname'];
$house_agentPatronymic = $_POST['house_agentPatronymic'];
$house_agentTel = $_POST['house_agentTel'];
$house_agentEmail = $_POST['house_agentEmail'];


mysqli_query($connect,  query:"UPDATE `house_agent` SET `name` = '$house_agentName', `surname` = '$house_agentSurname', `patronymic` = '$house_agentPatronymic', `telephone` = '$house_agentTel', `email` = '$house_agentEmail' WHERE `house_agent`.`id_house_agent` = '$house_agentId'");
header('Location:/admin.php');
?>

