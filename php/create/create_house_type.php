<?php

require_once '../config/connect.php';

$house_typeType = $_POST['house_typeType'];

mysqli_query($connect, query:"INSERT INTO `house_type` (`id_house_type`, `type`) VALUES (NULL, '$house_typeType')");

header('Location:/admin.php');

?>