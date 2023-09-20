<?php

    require_once 'php/config/connect.php';

    $id_user = $_GET['id'];
    $user = mysqli_query($connect, query:"SELECT * FROM `user` WHERE `id_user` = '$id_user'");
    $user = mysqli_fetch_assoc($user);
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
    <form method="post" action="/php/update/update_user.php">
        <input type="hidden" name="userId" value="<?= $user['id_user']?>">
        <p>Имя</p>
        <input type="text" name="userName" value="<?= $user['name']?>">
        <p>Фамилия</p>
        <input type="text" name="userSurname" value="<?= $user['surname']?>">
        <p>Отчество</p>
        <input type="text" name="userPatronymic" value="<?= $user['patronymic']?>">
        <p>Номер телефона</p>
        <input type="tel" name="userTel" value="<?= $user['telephone']?>">
        <p>Адрес электронной почты</p>
        <input type="email" name="userEmail" value="<?= $user['email']?>">
        <p>Пароль</p>
        <input type="text" name="userPass" value="<?= $user['password']?>">
        <p>Бюджет</p>
        <input type="number" name="userBudget" value="<?= $user['budget']?>"> <br> <br>
        <button type="submit">Изменить</button>
    </form>
</body>
</html>