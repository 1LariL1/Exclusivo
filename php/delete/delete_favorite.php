<?php
require_once '../config/connect.php';

$favoriteId = $_GET['id'];

mysqli_query($connect, query:"DELETE FROM favorites WHERE `favorites`.`id_favorites` = '$favoriteId'");
header('Location:/admin.php');
?>