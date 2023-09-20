<?php

require_once '../config/connect.php';

$metroName = $_POST['metroName'];
$metroNeighborhood = $_POST['metroNeighborhood'];


mysqli_query($connect, query:"INSERT INTO `metro` (`id_metro`, `name`, `id_neighborhood`) VALUES (NULL, '$metroName', '$metroNeighborhood')");

header('Location:/admin.php');

?>