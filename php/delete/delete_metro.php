<?php
require_once '../config/connect.php';

$metroId = $_GET['id'];

mysqli_query($connect, query:"DELETE FROM metro WHERE `metro`.`id_metro` = '$metroId'");
header('Location:/admin.php');
?>