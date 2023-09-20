<?php

require_once '../config/connect.php';

$sale_statusStatus = $_POST['sale_statusStatus'];

mysqli_query($connect, query:"INSERT INTO `sale_status` (`id_sale_status`, `status`) VALUES (NULL, '$sale_statusStatus')");

header('Location:/admin.php');

?>