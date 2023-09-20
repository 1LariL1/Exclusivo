<?php
require_once '../config/connect.php';

$neighborhoodId = $_GET['id'];

mysqli_query($connect, query:"DELETE FROM neighborhood WHERE `neighborhood`.`id_neighborhood` = '$neighborhoodId'");
header('Location:/admin.php');
?>