<?php 
require_once '../config/connect.php';

$announcementId = $_POST['announcementId'];
$announcementType = $_POST['announcementType'];


mysqli_query($connect,  query:"UPDATE `announcement_type` SET `type` = '$announcementType' WHERE `announcement_type`.`id_announcement_type` = '$announcementId'");
header('Location:/admin.php');
?>

