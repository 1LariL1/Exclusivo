<? require_once 'php/config/connect.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Административная панель</title>
</head>

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




<body>
    <h1>Добро пожаловать!</h1>
    <h2><a href="/admin-statistics.php">Отчестность</a></h2>
    <h2><a href="/admin-messages.php">Сообщения с формы обратной связи</a></h2>
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
                        <td><a href="update-user.php?id=<?= $user[0] ?>"><img src="/img/edit.png" alt=""></a></td>
                        <td><a href="php/delete/delete_user.php?id=<?= $user[0] ?>"><img src="/img/delete.png" alt=""></a></td>
                    </tr>

                <?php
            }
        ?>
        


    </table>


    <h2>Добавить запись в таблицу "Пользователи"</h2>
    <form action="/php/create/create_user.php" method="post">
        <input type="text" name="userName" placeholder="Имя">
        <input type="text" name="userSurname" placeholder="Фамилия">
        <input type="text" name="userPatronymic" placeholder="Отчество  ">
        <input type="tel" name="userTel" placeholder="Телефон">
        <input type="email" name="userEmail" placeholder="Адрес электронной почты">
        <input type="text" name="userPass" placeholder="Пароль">
        <input type="number" name="userBudget" placeholder="Бюджет"> <br> <br>
        <button type="submit">Добавить</button>
    </form>

    <br>
    <br>
    <br>

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
                        <td><a href="update-user_agent.php?id=<?= $user_agent[0] ?>"><img src="/img/edit.png" alt=""></a></td>
                        <td><a href="php/delete/delete_user_agent.php?id=<?= $user_agent[0] ?>"><img src="/img/delete.png" alt=""></a></td>
                    </tr>

                <?php
            }
        ?>
        
    </table>


    <h2>Добавить запись в таблицу "Агенты пользователей"</h2>
    <form action="/php/create/create_user_agent.php" method="post">
        <input type="text" name="user_agentName" placeholder="Имя">
        <input type="text" name="user_agentSurname" placeholder="Фамилия">
        <input type="text" name="user_agentPatronymic" placeholder="Отчество  ">
        <input type="tel" name="user_agentTel" placeholder="Телефон">
        <input type="email" name="user_agentEmail" placeholder="Адрес электронной почты"> <br> <br>
        <button type="submit">Добавить</button>
    </form>
</body>
</html> 

<br>
    <br>
    <br>

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
                        <td><a href="update-neighborhood.php?id=<?= $neighborhood[0] ?>"><img src="/img/edit.png" alt=""></a></td>
                        <td><a href="php/delete/delete_neighborhood.php?id=<?= $neighborhood[0] ?>"><img src="/img/delete.png" alt=""></a></td>
                    </tr>

                <?php
            }
        ?>
        
    </table>


    <h2>Добавить запись в таблицу "Районы"</h2>
    <form action="/php/create/create_neighborhood.php" method="post">
        <input type="text" name="neighborhoodName" placeholder="Название">
        <button type="submit">Добавить</button>
    </form>


    <br>
    <br>
    <br>

    <h2>Метро</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Район</th>
        </tr>

        <?php
            $metros = mysqli_query($connect, query:"SELECT metro.*, neighborhood.name AS название
                                    FROM metro 
                                    JOIN neighborhood ON metro.id_neighborhood = neighborhood.id_neighborhood");
            $metros = mysqli_fetch_all($metros);
            foreach ($metros as $metro) {
                ?>
                    <tr>
                        <td><?= $metro[0] ?></td>
                        <td><?= $metro[1] ?></td>
                        <td><?= $metro[3] ?></td>
                        <td><a href="update-metro.php?id=<?= $metro[0] ?>"><img src="/img/edit.png" alt=""></a></td>
                        <td><a href="php/delete/delete_metro.php?id=<?= $metro[0] ?>"><img src="/img/delete.png" alt=""></a></td>
                    </tr>

                <?php
            }
        ?>
        
    </table>


    <h2>Добавить запись в таблицу "Метро"</h2>
    <form action="/php/create/create_metro.php" method="post">
        <input type="text" name="metroName" placeholder="Название">
        <input type="text" name="metroNeighborhood" placeholder="Район">
        <button type="submit">Добавить</button>
    </form>

    <br>
    <br>
    <br>

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
                        <td><a href="update-announcement.php?id=<?= $announcement[0] ?>"><img src="/img/edit.png" alt=""></a></td>
                        <td><a href="php/delete/delete_announcement.php?id=<?= $announcement[0] ?>"><img src="/img/delete.png" alt=""></a></td>
                    </tr>

                <?php
            }
        ?>
        
    </table>


    <h2>Добавить запись в таблицу "Тип объявления"</h2>
    <form action="/php/create/create_announcement.php" method="post">
        <input type="text" name="announcementType" placeholder="Тип">
        <button type="submit">Добавить</button>
    </form>

    <br>
    <br>
    <br>

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
                        <td><a href="update-sale_status.php?id=<?= $sale_status[0] ?>"><img src="/img/edit.png" alt=""></a></td>
                        <td><a href="php/delete/delete_sale_status.php?id=<?= $sale_status[0] ?>"><img src="/img/delete.png" alt=""></a></td>
                    </tr>

                <?php
            }
        ?>
        
    </table>


    <h2>Добавить запись в таблицу "Статус продажи"</h2>
    <form action="/php/create/create_sale_status.php" method="post">
        <input type="text" name="sale_statusStatus" placeholder="Статус">
        <button type="submit">Добавить</button>
    </form>

    <br>
    <br>
    <br>

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
                        <td><a href="update-house_type.php?id=<?= $house_type[0] ?>"><img src="/img/edit.png" alt=""></a></td>
                        <td><a href="php/delete/delete_house_type.php?id=<?= $house_type[0] ?>"><img src="/img/delete.png" alt=""></a></td>
                    </tr>

                <?php
            }
        ?>
        
    </table>


    <h2>Добавить запись в таблицу "Тип дома"</h2>
    <form action="/php/create/create_house_type.php" method="post">
        <input type="text" name="house_typeType" placeholder="Тип">
        <button type="submit">Добавить</button>
    </form>

    <br>
    <br>
    <br>

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
                        <td><a href="update-house_agent.php?id=<?= $house_agent[0] ?>"><img src="/img/edit.png" alt=""></a></td>
                        <td><a href="php/delete/delete_house_agent.php?id=<?= $house_agent[0] ?>"><img src="/img/delete.png" alt=""></a></td>
                    </tr>

                <?php
            }
        ?>
        
    </table>


    <h2>Добавить запись в таблицу "Агент недвижимости"</h2>
    <form action="/php/create/create_house_agent.php" method="post">
        <input type="text" name="house_agentName" placeholder="Имя">
        <input type="text" name="house_agentSurname" placeholder="Фамилия">
        <input type="text" name="house_agentPatronymic" placeholder="Отчество">
        <input type="tel" name="house_agentTel" placeholder="Телефон">
        <input type="email" name="house_agentEmail" placeholder="Адрес электронной почты">
        <button type="submit">Добавить</button>
    </form>

    <br>
    <br>
    <br>

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
                        <td><a href="update-house.php?id=<?= $house[0] ?>"><img src="/img/edit.png" alt=""></a></td>
                        <td><a href="php/delete/delete_house.php?id=<?= $house[0] ?>"><img src="/img/delete.png" alt=""></a></td>
                    </tr>

                <?php
            }
        ?>
        
    </table>


    <h2>Добавить запись в таблицу "Дом"</h2>
    <form action="/php/create/create_house.php" method="post">
        <input type="number" name="houseType" placeholder="Тип дома">
        <input type="number" name="houseAnnouncementType" placeholder="Тип объявления">
        <input type="number" name="houseSaleStatus" placeholder="Статус продажи">
        <input type="number" name="houseAgent" placeholder="Агент недвижимости">
        <input type="number" name="houseNeighborhood" placeholder="Район">
        <input type="number" name="housePrice" placeholder="Цена">
        <input type="number" name="houseRooms" placeholder="Число комнат">
        <input type="number" name="houseSquare" placeholder="Площадь (м²)">
        <input type="number" name="houseCeiling" placeholder="Высота потолков (м)">
        <br><br>
        <input type="number" name="houseKitchen" placeholder="Площадь кухни (м²)">
        <input type="text" name="houseAddress" placeholder="Адрес">
        <input type="date" name="houseDate" placeholder="Дата объявления">
        <button type="submit">Добавить</button>
    </form>

    <br>
    <br>
    <br>

    <h2>Сделки</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Адрес дома</th>
            <th>Клиент</th>
            <th>Агент клиента</th>
            <th>Дата</th>
            <th>Номер договора </th>
        </tr>

        <?php
            $deals = mysqli_query($connect, query:"SELECT deal.*, house.address AS 'Адрес дома', 
            user.surname AS 'Клиент', user_agent.surname AS 'Агент клиента' FROM deal 
            JOIN house ON deal.id_house = house.id_house 
            JOIN user ON deal.id_user = user.id_user 
            JOIN user_agent ON deal.id_user_agent = user_agent.id_user_agent;");
            
            $deals = mysqli_fetch_all($deals);
            foreach ($deals as $deal) {
                ?>
                    <tr>
                        <td><?= $deal[0] ?></td>
                        <td><?= $deal[6] ?></td>
                        <td><?= $deal[7] ?></td>
                        <td><?= $deal[8] ?></td>
                        <td><?= $deal[4] ?></td>
                        <td><?= $deal[5] ?></td>
                        <td><a href="update-deal.php?id=<?= $deal[0] ?>"><img src="/img/edit.png" alt=""></a></td>
                        <td><a href="php/delete/ddelete_deal.php?id=<?= $deal[0] ?>"><img src="/img/delete.png" alt=""></a></td>
                    </tr>

                <?php
            }
        ?>


        
    </table>

    <h2>Добавить запись в таблицу "Сделка"</h2>
    <form action="/php/create/create_deal.php" method="post">
        <input type="number" name="dealHouse" placeholder="Дом">
        <input type="number" name="dealClient" placeholder="Пользователь">
        <input type="number" name="dealAgentClient" placeholder="Клиент пользователя">
        <input type="date" name="dealDate" placeholder="Дата сделки">
        <input type="number" name="dealNum" placeholder="Номер договора">
        <button type="submit">Добавить</button>
    </form>

    
    <br>
    <br>
    <br>
    <h2>Избранное</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Адрес дома</th>
        <th>Клиент</th>
    </tr>

    <?php
        $favorites = mysqli_query($connect, query:"SELECT favorites.*, house.address AS 'Адрес дома', 
        user.surname AS 'Клиент' FROM favorites JOIN house ON favorites.id_house = house.id_house JOIN user 
        ON favorites.id_user = user.id_user;");
        
        $favorites = mysqli_fetch_all($favorites);
        foreach ($favorites as $favorite) {
            ?>
                <tr>
                    <td><?= $favorite[0] ?></td>
                    <td><?= $favorite[3] ?></td>
                    <td><?= $favorite[4] ?></td>
                    <td><a href="update-favorite.php?id=<?= $favorite[0] ?>"><img src="/img/edit.png" alt=""></a></td>
                    <td><a href="php/delete/delete_favorite.php?id=<?= $favorite[0] ?>"><img src="/img/delete.png" alt=""></a></td>
                </tr>

            <?php
        }
    ?>


    
</table>

<h2>Добавить запись в таблицу "Избранное"</h2>
<form action="/php/create/create_favorite.php" method="post">
    <input type="number" name="favoriteHouse" placeholder="Дом">
    <input type="number" name="favoriteClient" placeholder="Пользователь">
    <button type="submit">Добавить</button>
</form>
</body>
</html> 