<?php
require_once '../config/connect.php';

$houseId = $_GET['id'];

mysqli_query($connect, query:"DELETE FROM house WHERE `house`.`id_house` = '$houseId'");
header('Location:/admin.php');
?>