<?php 
require_once '../config/connect.php';

$houseId = $_POST['houseId'];
$houseType = $_POST['houseType'];
$houseAnnouncementType = $_POST['houseAnnouncementType'];
$houseSaleStatus = $_POST['houseSaleStatus'];
$houseAgent = $_POST['houseAgent'];
$houseNeighborhood = $_POST['houseNeighborhood'];
$housePrice = $_POST['housePrice'];
$houseRooms = $_POST['houseRooms'];
$houseSquare = $_POST['houseSquare'];
$houseCeiling = $_POST['houseCeiling'];
$houseKitchen = $_POST['houseKitchen'];
$houseAddress = $_POST['houseAddress'];
$houseDate = $_POST['houseDate'];

mysqli_query($connect,  query:"UPDATE `house` SET `id_house_type` = '$houseType', `id_announcement_type` = '$houseAnnouncementType', 
`id_sale_status` = '$houseSaleStatus', `id_house_agent` = '$houseAgent', `id_neighborhood` = '$houseNeighborhood ', `price` = '$housePrice', 
`number_of_rooms` = '$houseRooms ', `square` = '$houseSquare', `ceiling_height` = '$houseCeiling', `kitchen_square` = '$houseKitchen', 
`address` = '$houseAddress', `announcement_date` = '$houseDate' WHERE `house`.`id_house` = '$houseId'");
header('Location:/admin.php');
?>

