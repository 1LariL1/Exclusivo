<?php

    require_once 'php/config/connect.php';

    $id_sale_status = $_GET['id'];
    $sale_status = mysqli_query($connect, query:"SELECT * FROM `sale_status` WHERE `id_sale_status` = '$id_sale_status'");
    $sale_status = mysqli_fetch_assoc($sale_status);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Изменить запись</title>
</head>
<body>
<style>
    input {

    background-color: white;
    padding: 10px 10px 10px 10px;
    border-radius: 5px;
    border: 1px solid #191F2F;
    outline: none;
    }

    button {
    border: none;
    border-radius: 5px;
    background-color: #71768A;
    color: white;
    padding: 13px 69px 12px 69px;
    }
</style>
<h2>Изменить запись</h2>
    <form method="post" action="/php/update/update_sale_status.php">
        <input type="hidden" name="sale_statusId" value="<?= $sale_status['id_sale_status']?>">
        <p>Статус</p>
        <input type="text" name="sale_statusStatus" value="<?= $sale_status['status']?>">
        <button type="submit">Изменить</button>
    </form>
</body>
</html>