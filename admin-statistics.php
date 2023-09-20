<? require_once 'php/config/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отчетность</title>
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
    <h2><a href="/admin.php">Вернуться к базе данных</a></h2>
    <h2>Получить список всех домой в определенном районе</h2>
    <table>
        <tr>
            <th>Дом</th>
            <th>Район</th>
        </tr>

        <?php
            $first_requests = mysqli_query($connect, query:"SELECT house.address AS 'Дом', neighborhood.name AS 'Район' FROM house JOIN neighborhood ON house.id_neighborhood = neighborhood.id_neighborhood WHERE neighborhood.id_neighborhood = 9;");
            $first_requests = mysqli_fetch_all($first_requests);
            foreach ($first_requests as $first_request) {
                ?>
                    <tr>
                        <td><?= $first_request[0] ?></td>
                        <td><?= $first_request[1] ?></td>
                    </tr>

                <?php
            }
        ?>
        


    </table>

    <h2>Получить список всех клиентов, заинтересованных в домах определенного типа</h2>
    <table>
        <tr>
            <th>Клиент</th>
            <th>Дом</th>
            <th>Тип дома</th>
        </tr>

        <?php
            $second_requests = mysqli_query($connect, query:"SELECT user.surname AS 'Клиент', house.address AS 'Дом', house_type.type AS 'Тип дома' FROM favorites JOIN user ON favorites.id_user = user.id_user JOIN house ON favorites.id_house = house.id_house JOIN house_type ON house.id_house_type = house_type.id_house_type WHERE house_type.id_house_type = 2;");
            $second_requests = mysqli_fetch_all($second_requests);
            foreach ($second_requests as $second_request) {
                ?>
                    <tr>
                        <td><?= $second_request[0] ?></td>
                        <td><?= $second_request[1] ?></td>
                        <td><?= $second_request[2] ?></td>
                    </tr>

                <?php
            }
        ?>
        


    </table>

    <h2>Получить список всех сделок, заключенных агентом недвижимости с определенным идентификатором</h2>
    <table>
        <tr>
            <th>ID сделки</th>
            <th>Номер договора</th>
            <th>Агент недвижимости</th>
        </tr>

        <?php
            $third_requests = mysqli_query($connect, query:"SELECT deal.id_deal AS 'ID Сделки', deal.number_of_deal AS 'Номер договора', house_agent.surname AS 'Агент недвижимости' FROM deal JOIN house ON deal.id_house = house.id_house JOIN house_agent ON house.id_house_agent = house_agent.id_house_agent WHERE house_agent.id_house_agent = 3;");
            $third_requests = mysqli_fetch_all($third_requests);
            foreach ($third_requests as $third_request) {
                ?>
                    <tr>
                        <td><?= $third_request[0] ?></td>
                        <td><?= $third_request[1] ?></td>
                        <td><?= $third_request[2] ?></td>
                    </tr>

                <?php
            }
        ?>
        


    </table>

    <h2>Получить список всех домов с указанием их стоимости и агента недвижимости, ответственного за продажу</h2>
    <table>
        <tr>
            <th>Дом</th>
            <th>Стоимость</th>
            <th>Агент недвижимости</th>
        </tr>

        <?php
            $fourth_requests = mysqli_query($connect, query:"SELECT house.address AS 'Адрес дома', house.price AS 'Стоимость дома', house_agent.surname AS 'Агент недвижимости' FROM house JOIN house_agent ON house.id_house_agent = house_agent.id_house_agent;");
            $fourth_requests = mysqli_fetch_all($fourth_requests);
            foreach ($fourth_requests as $fourth_request) {
                ?>
                    <tr>
                        <td><?= $fourth_request[0] ?></td>
                        <td><?= $fourth_request[1] ?></td>
                        <td><?= $fourth_request[2] ?></td>
                    </tr>

                <?php
            }
        ?>
        


    </table>

    <h2>Получить список всех клиентов, совершивших сделку на определенную сумму и с указанием дома, который был продан</h2>
    <table>
        <tr>
            <th>Номер договора</th>
            <th>Клиент</th>
            <th>Дом</th>
            <th>Стоимость</th>
        </tr>

        <?php
            $fifth_requests = mysqli_query($connect, query:"SELECT deal.number_of_deal AS 'Номер договора', user.surname AS 'Клиент', house.address AS 'Дом', house.price AS 'Стоимость' FROM deal JOIN house ON deal.id_house = house.id_house JOIN user ON deal.id_user = user.id_user WHERE house.price = 8000000;");
            $fifth_requests = mysqli_fetch_all($fifth_requests);
            foreach ($fifth_requests as $fifth_request) {
                ?>
                    <tr>
                        <td><?= $fifth_request[0] ?></td>
                        <td><?= $fifth_request[1] ?></td>
                        <td><?= $fifth_request[2] ?></td>
                        <td><?= $fifth_request[3] ?></td>
                    </tr>

                <?php
            }
        ?>
        


    </table>


    <h2>Получить список всех домов, доступных для продажи на определенную дату</h2>
    <table>
        <tr>
            <th>Дом</th>
            <th>Статус</th>
            <th>Дата объявления</th>
        </tr>

        <?php
            $sixth_requests = mysqli_query($connect, query:"SELECT house.address AS 'Дом', sale_status.status 'Статус', house.announcement_date 'Дата объявления' FROM house JOIN sale_status ON house.id_sale_status = sale_status.id_sale_status WHERE sale_status.status = 'В продаже' AND house.announcement_date <= '2023-06-23';");
            $sixth_requests = mysqli_fetch_all($sixth_requests);
            foreach ($sixth_requests as $sixth_request) {
                ?>
                    <tr>
                        <td><?= $sixth_request[0] ?></td>
                        <td><?= $sixth_request[1] ?></td>
                        <td><?= $sixth_request[2] ?></td>
                    </tr>

                <?php
            }
        ?>
        


    </table>

    <h2>Получить список всех агентов недвижимости и общей суммы сделок, заключенных каждым агентом</h2>
    <table>
        <tr>
            <th>Агент недвижимости</th>
            <th>Сумма всех сделок</th>
        </tr>

        <?php
            $seventh_requests = mysqli_query($connect, query:"SELECT house_agent.surname AS 'Агент недвижимости', SUM(house.price) AS 'Сумма всех сделок' FROM deal JOIN house ON deal.id_house = house.id_house JOIN house_agent ON house.id_house_agent = house_agent.id_house_agent GROUP BY house_agent.surname;");
            $seventh_requests = mysqli_fetch_all($seventh_requests);
            foreach ($seventh_requests as $seventh_request) {
                ?>
                    <tr>
                        <td><?= $seventh_request[0] ?></td>
                        <td><?= $seventh_request[1] ?></td>
                    </tr>

                <?php
            }
        ?>
        


    </table>

    <h2>Получить список всех доступных домов определенного типа</h2>
    <table>
        <tr>
            <th>Дом</th>
            <th>Статус</th>
            <th>Тип дома</th>
        </tr>

        <?php
            $eigth_requests = mysqli_query($connect, query:"SELECT house.address, sale_status.status, house_type.type FROM house JOIN sale_status ON house.id_sale_status = sale_status.id_sale_status JOIN house_type ON house.id_house_type = house_type.id_house_type WHERE sale_status.status = 'В продаже' AND house_type.id_house_type = 2;");
            $eigth_requests = mysqli_fetch_all($eigth_requests);
            foreach ($eigth_requests as $eigth_request) {
                ?>
                    <tr>
                        <td><?= $eigth_request[0] ?></td>
                        <td><?= $eigth_request[1] ?></td>
                        <td><?= $eigth_request[2] ?></td>
                    </tr>

                <?php
            }
        ?>
        


    </table>

    <h2>Получить список всех клиентов, у которых бюджет позволяет приобрести дома в определенном ценовом диапазоне</h2>
    <table>
        <tr>
            <th>Клиент</th>
            <th>Бюджет</th>
        </tr>

        <?php
            $nine_requests = mysqli_query($connect, query:"SELECT user.surname, user.budget FROM user WHERE user.budget BETWEEN '10000000' AND '100000000';");
            $nine_requests = mysqli_fetch_all($nine_requests);
            foreach ($nine_requests as $nine_request) {
                ?>
                    <tr>
                        <td><?= $nine_request[0] ?></td>
                        <td><?= $nine_request[1] ?></td>
                    </tr>

                <?php
            }
        ?>
        


    </table>

    <h2>Получить список всех домов, с указанием количества комнат и площади каждого дома, статуса продажи, стоимости</h2>
    <table>
        <tr>
            <th>Дом</th>
            <th>Количество комнат</th>
            <th>Площадь</th>
            <th>Статус продажи</th>
            <th>Стоимость</th>
        </tr>

        <?php
            $ten_requests = mysqli_query($connect, query:"SELECT house.address, house.number_of_rooms, house.square, sale_status.status, house.price FROM house JOIN sale_status ON house.id_sale_status = sale_status.id_sale_status;");
            $ten_requests = mysqli_fetch_all($ten_requests);
            foreach ($ten_requests as $ten_request) {
                ?>
                    <tr>
                        <td><?= $ten_request[0] ?></td>
                        <td><?= $ten_request[1] ?></td>
                        <td><?= $ten_request[2] ?></td>
                        <td><?= $ten_request[3] ?></td>
                        <td><?= $ten_request[4] ?></td>
                    </tr>

                <?php
            }
        ?>
        


    </table>
</body>
</html>