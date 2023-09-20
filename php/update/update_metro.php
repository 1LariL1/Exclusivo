<?php 
require_once '../config/connect.php';

$metroId = $_POST['metroId'];
$metroName = $_POST['metroName'];
$metroNeighborhood = $_POST['metroNeighborhood'];

mysqli_query($connect,  query:"UPDATE `metro` SET `name` = '$metroName', `id_neighborhood` = '$metroNeighborhood' WHERE `metro`.`id_metro` = '$metroId'");
header('Location:/admin.php');
?>

