<?php 
require_once '../config/connect.php';

$dealId = $_POST['dealId'];
$dealHouse = $_POST['dealHouse'];
$dealClient = $_POST['dealClient'];
$dealAgentClient = $_POST['dealAgentClient'];
$dealDate = $_POST['dealDate'];
$dealNum = $_POST['dealNum'];


mysqli_query($connect,  query:"UPDATE `deal` SET `id_house` = '$dealHouse', `id_user` = '$dealClient', `id_user_agent` = '$dealAgentClient', 
`date` = '$dealDate', `number_of_deal` = '$dealNum' WHERE `deal`.`id_deal` = '$dealId'");
header('Location:/admin.php');
?>

