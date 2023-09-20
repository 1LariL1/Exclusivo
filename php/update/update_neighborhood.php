<?php 
require_once '../config/connect.php';

$neighborhoodId = $_POST['neighborhoodId'];
$neighborhoodName = $_POST['neighborhoodName'];


mysqli_query($connect,  query:"UPDATE `neighborhood` SET `name` = '$neighborhoodName' WHERE `neighborhood`.`id_neighborhood` = '$neighborhoodId'");
header('Location:/admin.php');
?>

