<?php

require_once '../config/connect.php';
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


mysqli_query($connect, query:"INSERT INTO `house` (`id_house`, `id_house_type`, 
`id_announcement_type`, `id_sale_status`, `id_house_agent`, `id_neighborhood`, 
`price`, `number_of_rooms`, `square`, `ceiling_height`, `kitchen_square`, `address`, `announcement_date`) 
VALUES (NULL, '$houseType', '$houseAnnouncementType', '$houseSaleStatus', '$houseAgent', '$houseNeighborhood', '$housePrice', 
'$houseRooms', '$houseSquare', '$houseCeiling', '$houseKitchen', '$houseAddress', '$houseDate')");

header('Location:/admin.php');

?>




