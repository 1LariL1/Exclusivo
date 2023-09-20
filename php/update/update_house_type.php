<?php 
require_once '../config/connect.php';

$house_typeId = $_POST['house_typeId'];
$house_typeType = $_POST['house_typeType'];


mysqli_query($connect,  query:"UPDATE `house_type` SET `type` = '$house_typeType' WHERE `house_type`.`id_house_type` = '$house_typeId'");
header('Location:/admin.php');
?>

