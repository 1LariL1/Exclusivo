<?php

require_once '../config/connect.php';

$neighborhoodName = $_POST['neighborhoodName'];

mysqli_query($connect, query:"INSERT INTO `neighborhood` (`id_neighborhood`, `name`) VALUES (NULL, '$neighborhoodName')");

header('Location:/admin.php');

?>