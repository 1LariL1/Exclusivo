<?php
require_once '../config/connect.php';

$dealId = $_GET['id'];

mysqli_query($connect, query:"DELETE FROM deal WHERE `deal`.`id_deal` = '$dealId'");
header('Location:/admin.php');
?>