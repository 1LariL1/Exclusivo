<?php

    require_once 'php/config/connect.php';

    $id_deal = $_GET['id'];
    $deal = mysqli_query($connect, query:"SELECT * FROM `deal` WHERE `id_deal` = '$id_deal'");
    $deal = mysqli_fetch_assoc($deal);
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
    th,td {
        padding: 10px;
    }

    th {
        background-color: #191F2F;
        color: #F0E1E1;
    }

    td {
        background-color: #71768A;
    }
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

<h2>Дома</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Тип дома</th>
        <th>Тип объявления</th>
        <th>Статус продажи</th>
        <th>Агент недвижимости</th>
        <th>Район</th>
        <th>Цена</th>
        <th>Число комнат</th>
        <th>Площадь (м²)</th>
        <th>Высота потолков (м)</th>
        <th>Площадь кухни (м²)</th>
        <th>Адрес</th>
        <th>Дата объявления</th>
    </tr>

    <?php
        $houses= mysqli_query($connect, query:"SELECT house.*, house_type.type AS 'Тип дома', announcement_type.type AS 'Тип объявления', sale_status.status AS 'Статус продажи', house_agent.surname AS 'Агент недвижимости',  neighborhood.name AS 'Район'
        FROM house 
        JOIN house_type ON house.id_house_type = house_type.id_house_type 
        JOIN announcement_type ON house.id_announcement_type = announcement_type.id_announcement_type
        JOIN sale_status ON house.id_sale_status = sale_status.id_sale_status
        JOIN house_agent ON house.id_house_agent = house_agent.id_house_agent
        JOIN neighborhood ON house.id_neighborhood = neighborhood.id_neighborhood");
        $houses = mysqli_fetch_all($houses);
        foreach ($houses as $house) {
            ?>
                <tr>
                    <td><?= $house[0] ?></td>
                    <td><?= $house[13] ?></td>
                    <td><?= $house[14] ?></td>
                    <td><?= $house[15] ?></td>
                    <td><?= $house[16] ?></td>
                    <td><?= $house[17] ?></td>
                    <td><?= $house[6] ?></td>
                    <td><?= $house[7] ?></td>
                    <td><?= $house[8] ?></td>
                    <td><?= $house[9] ?></td>
                    <td><?= $house[10] ?></td>
                    <td><?= $house[11] ?></td>
                    <td><?= $house[12] ?></td>
                </tr>

            <?php
        }
    ?>
    
</table>
<h2>Пользователи</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Отчество</th>
            <th>Телефон</th>
            <th>Адрес электронной почты</th>
            <th>Пароль</th>
            <th>Бюджет</th>
        </tr>

        <?php
            $users = mysqli_query($connect, query:"SELECT * FROM `user`");
            $users = mysqli_fetch_all($users);
            foreach ($users as $user) {
                ?>
                    <tr>
                        <td><?= $user[0] ?></td>
                        <td><?= $user[1] ?></td>
                        <td><?= $user[2] ?></td>
                        <td><?= $user[3] ?></td>
                        <td><?= $user[4] ?></td>
                        <td><?= $user[5] ?></td>
                        <td><?= $user[6] ?></td>
                        <td><?= $user[7] ?></td>
                    </tr>

                <?php
            }
        ?>
        


    </table>
    <h2>Агенты пользователей</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Отчество</th>
        <th>Телефон</th>
        <th>Адрес электронной почты</th>
    </tr>

    <?php
        $user_agents = mysqli_query($connect, query:"SELECT * FROM `user_agent`");
        $user_agents = mysqli_fetch_all($user_agents);
        foreach ($user_agents as $user_agent) {
            ?>
                <tr>
                    <td><?= $user_agent[0] ?></td>
                    <td><?= $user_agent[1] ?></td>
                    <td><?= $user_agent[2] ?></td>
                    <td><?= $user_agent[3] ?></td>
                    <td><?= $user_agent[4] ?></td>
                    <td><?= $user_agent[5] ?></td>
                </tr>

            <?php
        }
    ?>
    
</table>

<h2>Изменить запись</h2>
    <form method="post" action="/php/update/update_deal.php">
        <input type="hidden" name="dealId" value="<?= $deal['id_deal']?>">
        <p>ID дома</p>
        <input type="number" name="dealHouse" value="<?= $deal['id_house']?>">
        <p>ID пользователя</p>
        <input type="number" name="dealClient" value="<?= $deal['id_user']?>">
        <p>ID агента пользователя</p>
        <input type="number" name="dealAgentClient" value="<?= $deal['id_user_agent']?>">
        <p>Дата сделки</p>
        <input type="date" name="dealDate" value="<?= $deal['date']?>">
        <p>Номер договора</p>
        <input type="number" name="dealNum" value="<?= $deal['number_of_deal']?>">
        <br><br>
        <button type="submit">Изменить</button>
    </form>
</body>
</html>
