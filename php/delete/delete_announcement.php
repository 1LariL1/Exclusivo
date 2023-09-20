<?php
require_once '../config/connect.php';

$announcementId = $_GET['id'];

mysqli_query($connect, query:"DELETE FROM announcement_type WHERE `announcement_type`.`id_announcement_type` = '$announcementId'");
header('Location:/admin.php');
?>