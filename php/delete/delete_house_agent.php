<?php
require_once '../config/connect.php';

$house_agentId = $_GET['id'];

mysqli_query($connect, query:"DELETE FROM house_agent WHERE `house_agent`.`id_house_agent` = '$house_agentId'");
header('Location:/admin.php');
?>