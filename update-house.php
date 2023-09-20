<?php

    require_once 'php/config/connect.php';

    $id_house = $_GET['id'];
    $house = mysqli_query($connect, query:"SELECT * FROM `house` WHERE `id_house` = '$id_house'");
    $house = mysqli_fetch_assoc($house);
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
<h2>Тип дома</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Тип</th>
        </tr>

        <?php
            $house_types = mysqli_query($connect, query:"SELECT * FROM `house_type`");
            $house_types = mysqli_fetch_all($house_types);
            foreach ($house_types as $house_type) {
                ?>
                    <tr>
                        <td><?= $house_type[0] ?></td>
                        <td><?= $house_type[1] ?></td>
                    </tr>

                <?php
            }
        ?>
        
    </table>

    <h2>Типы объявления</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Тип</th>
        </tr>

        <?php
            $announcements = mysqli_query($connect, query:"SELECT * FROM `announcement_type`");
            $announcements = mysqli_fetch_all($announcements);
            foreach ($announcements as $announcement) {
                ?>
                    <tr>
                        <td><?= $announcement[0] ?></td>
                        <td><?= $announcement[1] ?></td>
                    </tr>

                <?php
            }
        ?>
        
    </table>

    <h2>Статус продажи</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Статус</th>
        </tr>

        <?php
            $sale_statuses = mysqli_query($connect, query:"SELECT * FROM `sale_status`");
            $sale_statuses = mysqli_fetch_all($sale_statuses);
            foreach ($sale_statuses as $sale_status) {
                ?>
                    <tr>
                        <td><?= $sale_status[0] ?></td>
                        <td><?= $sale_status[1] ?></td>
                    </tr>

                <?php
            }
        ?>
        
    </table>

    <h2>Агенты недвижимости</h2>

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
            $house_agents = mysqli_query($connect, query:"SELECT * FROM `house_agent`");
            $house_agents = mysqli_fetch_all($house_agents);
            foreach ($house_agents as $house_agent) {
                ?>
                    <tr>
                        <td><?= $house_agent[0] ?></td>
                        <td><?= $house_agent[1] ?></td>
                        <td><?= $house_agent[2] ?></td>
                        <td><?= $house_agent[3] ?></td>
                        <td><?= $house_agent[4] ?></td>
                        <td><?= $house_agent[5] ?></td>
                    </tr>

                <?php
            }
        ?>
        
    </table>

    <h2>Районы</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Название</th>
        </tr>

        <?php
            $neighborhoods = mysqli_query($connect, query:"SELECT * FROM `neighborhood`");
            $neighborhoods = mysqli_fetch_all($neighborhoods);
            foreach ($neighborhoods as $neighborhood) {
                ?>
                    <tr>
                        <td><?= $neighborhood[0] ?></td>
                        <td><?= $neighborhood[1] ?></td>
                    </tr>

                <?php
            }
        ?>
        
    </table>





<h2>Изменить запись</h2>
    <form method="post" action="/php/update/update_house.php">
        <input type="hidden" name="houseId" value="<?= $house['id_house']?>">
        <p>ID типа дома</p>
        <input type="number" name="houseType" value="<?= $house['id_house_type']?>">
        <p>ID типа объявления</p>
        <input type="number" name="houseAnnouncementType" value="<?= $house['id_announcement_type']?>">
        <p>ID статуса продажи</p>
        <input type="number" name="houseSaleStatus" value="<?= $house['id_sale_status']?>">
        <p>ID агента недвижимости</p>
        <input type="number" name="houseAgent" value="<?= $house['id_house_agent']?>">
        <p>ID района</p>
        <input type="number" name="houseNeighborhood" value="<?= $house['id_neighborhood']?>">
        <p>Цена</p>
        <input type="number" name="housePrice" value="<?= $house['price']?>">
        <p>Количество комнат</p>
        <input type="number" name="houseRooms" value="<?= $house['number_of_rooms']?>">
        <p>Площадь</p>
        <input type="number" name="houseSquare" value="<?= $house['square']?>">
        <p>Высота потолков</p>
        <input type="number" name="houseCeiling" value="<?= $house['ceiling_height']?>">
        <p>Площадь кухни</p>
        <input type="number" name="houseKitchen" value="<?= $house['kitchen_square']?>">
        <p>Адрес дома</p>
        <input type="text" name="houseAddress" value="<?= $house['address']?>">
        <p>Дата объявления</p>
        <input type="date" name="houseDate" value="<?= $house['announcement_date']?>">
        <br> <br>
        <button type="submit">Изменить</button>
    </form>
</body>
</html>