<?php

    require_once 'php/config/connect.php';

    $id_user_agent = $_GET['id'];
    $user_agent = mysqli_query($connect, query:"SELECT * FROM `user_agent` WHERE `id_user_agent` = '$id_user_agent'");
    $user_agent = mysqli_fetch_assoc($user_agent);
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
    <form method="post" action="/php/update/update_user_agent.php">
        <input type="hidden" name="user_agentId" value="<?= $user_agent['id_user_agent']?>">
        <p>Имя</p>
        <input type="text" name="user_agentName" value="<?= $user_agent['name']?>">
        <p>Фамилия</p>
        <input type="text" name="user_agentSurname" value="<?= $user_agent['surname']?>">
        <p>Отчество</p>
        <input type="text" name="user_agentPatronymic" value="<?= $user_agent['patronymic']?>">
        <p>Телефон</p>
        <input type="tel" name="user_agentTel" value="<?= $user_agent['telephone']?>">
        <p>Адрес электронной почты</p>
        <input type="email" name="user_agentEmail" value="<?= $user_agent['email']?>"> <br> <br>
        <button type="submit">Изменить</button>
    </form>
</body>
</html>