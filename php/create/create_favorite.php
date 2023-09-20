<?php

require_once '../config/connect.php';

$favoriteHouse = $_POST['favoriteHouse'];
$favoriteClient = $_POST['favoriteClient'];


mysqli_query($connect, query:"INSERT INTO `favorites` (`id_favorites`, `id_house`, `id_user`) VALUES (NULL, '$favoriteHouse', '$favoriteClient')");

header('Location:/admin.php');

?>
