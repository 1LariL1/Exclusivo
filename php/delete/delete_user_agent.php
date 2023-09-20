<?php
require_once '../config/connect.php';

$user_agentId = $_GET['id'];

mysqli_query($connect, query:"DELETE FROM user_agent WHERE `user_agent`.`id_user_agent` = '$user_agentId'");
header('Location:/admin.php');
?>