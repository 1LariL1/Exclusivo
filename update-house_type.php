<?php

    require_once 'php/config/connect.php';

    $id_house_type = $_GET['id'];
    $house_type = mysqli_query($connect, query:"SELECT * FROM `house_type` WHERE `id_house_type` = '$id_house_type'");
    $house_type = mysqli_fetch_assoc($house_type);
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
    <form method="post" action="/php/update/update_house_type.php">
        <input type="hidden" name="house_typeId" value="<?= $house_type['id_house_type']?>">
        <p>Тип дома</p>
        <input type="text" name="house_typeType" value="<?= $house_type['type']?>">
        <button type="submit">Изменить</button>
    </form>
</body>
</html>