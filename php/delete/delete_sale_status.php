<?php
require_once '../config/connect.php';

$sale_statusId = $_GET['id'];

mysqli_query($connect, query:"DELETE FROM sale_status WHERE `sale_status`.`id_sale_status` = '$sale_statusId '");
header('Location:/admin.php');
?>