<?php

require_once '../config/connect.php';

$dealHouse = $_POST['dealHouse'];
$dealClient = $_POST['dealClient'];
$dealAgentClient = $_POST['dealAgentClient'];
$dealDate = $_POST['dealDate'];
$dealNum = $_POST['dealNum'];


mysqli_query($connect, query:"INSERT INTO `deal` (`id_deal`, `id_house`, `id_user`, `id_user_agent`, `date`, `number_of_deal`) VALUES (NULL, '$dealHouse', '$dealClient', '$dealAgentClient', '$dealDate', '$dealNum')");

header('Location:/admin.php');

?>
