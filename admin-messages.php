<? require_once 'php/config/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сообщения с формы обратной связи</title>
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
    <table>
        <tr>
            <th>ID</th>
            <th>Текст сообщения</th>
            <th>Телефон</th>
            <th>ФИО</th>
            <th>Адрес электронной почты</th>
        </tr>

        <?php
            $messages = mysqli_query($connect, query:"SELECT * FROM `message`");
            $messages = mysqli_fetch_all($messages);
            foreach ($messages as $message) {
                ?>
                    <tr>
                        <td><?= $message[0] ?></td>
                        <td><?= $message[1] ?></td>
                        <td><?= $message[2] ?></td>
                        <td><?= $message[3] ?></td>
                        <td><?= $message[4] ?></td>
                        <td><a href="php/delete/delete_message.php?id=<?= $message[0] ?>"><img src="/img/delete.png" alt=""></a></td>
                    </tr>

                <?php
            }
        ?>
    </table>
</body>
</html>