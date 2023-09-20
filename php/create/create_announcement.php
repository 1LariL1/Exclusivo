<?php

require_once '../config/connect.php';

$announcementType = $_POST['announcementType'];

mysqli_query($connect, query:"INSERT INTO `announcement_type` (`id_announcement_type`, `type`) VALUES (NULL, '$announcementType')");

header('Location:/admin.php');

?>