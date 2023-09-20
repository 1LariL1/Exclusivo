<?php

    require_once 'php/config/connect.php';

    $id_neighborhood = $_GET['id'];
    $neighborhood = mysqli_query($connect, query:"SELECT * FROM `neighborhood` WHERE `id_neighborhood` = '$id_neighborhood'");
    $neighborhood = mysqli_fetch_assoc($neighborhood);
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
    <form method="post" action="/php/update/update_neighborhood.php">
        <input type="hidden" name="neighborhoodId" value="<?= $neighborhood['id_neighborhood']?>">
        <p>Название района</p>
        <input type="text" name="neighborhoodName" value="<?= $neighborhood['name']?>">
        <button type="submit">Изменить</button>
    </form>
</body>
</html>