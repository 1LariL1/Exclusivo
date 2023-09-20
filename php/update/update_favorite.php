<?php 
require_once '../config/connect.php';

$favoriteId = $_POST['favoriteId'];
$favoriteHouse = $_POST['favoriteHouse'];
$favoriteClient = $_POST['favoriteClient'];


mysqli_query($connect,  query:"UPDATE `favorites` SET `id_house` = '$favoriteHouse', `id_user` = '$favoriteClient' WHERE `favorites`.`id_favorites` = '$favoriteId'");
header('Location:/admin.php');
?>

