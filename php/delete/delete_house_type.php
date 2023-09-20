<?php
require_once '../config/connect.php';

$house_typeId = $_GET['id'];

mysqli_query($connect, query:"DELETE FROM house_type WHERE `house_type`.`id_house_type` = '$house_typeId'");
header('Location:/admin.php');
?>