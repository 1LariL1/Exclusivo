<?php 
require_once '../config/connect.php';

$sale_statusId = $_POST['sale_statusId'];
$sale_statusStatus = $_POST['sale_statusStatus'];


mysqli_query($connect,  query:"UPDATE `sale_status` SET `status` = '$sale_statusStatus' WHERE `sale_status`.`id_sale_status` = '$sale_statusId'");
header('Location:/admin.php');
?>

