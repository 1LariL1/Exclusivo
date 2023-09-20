<?php

    require_once 'php/config/connect.php';

    $id_house_agent = $_GET['id'];
    $house_agent = mysqli_query($connect, query:"SELECT * FROM `house_agent` WHERE `id_house_agent` = '$id_house_agent'");
    $house_agent = mysqli_fetch_assoc($house_agent);
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
    <form method="post" action="/php/update/update_house_agent.php">
        <input type="hidden" name="house_agentId" value="<?= $house_agent['id_house_agent']?>">
        <p>Имя</p>
        <input type="text" name="house_agentName" value="<?= $house_agent['name']?>">
        <p>Фамилия</p>
        <input type="text" name="house_agentSurname" value="<?= $house_agent['surname']?>">
        <p>Отчество</p>
        <input type="text" name="house_agentPatronymic" value="<?= $house_agent['patronymic']?>">
        <p>Телефон</p>
        <input type="text" name="house_agentTel" value="<?= $house_agent['telephone']?>">
        <p>Адрес электронной почты</p>
        <input type="text" name="house_agentEmail" value="<?= $house_agent['email']?>">
        <button type="submit">Изменить</button>
    </form>
</body>
</html>