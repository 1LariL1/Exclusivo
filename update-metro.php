<?php

    require_once 'php/config/connect.php';

    $id_metro = $_GET['id'];
    $metro = mysqli_query($connect, query:"SELECT * FROM `metro` WHERE `id_metro` = '$id_metro'");
    $metro = mysqli_fetch_assoc($metro);
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
    <form method="post" action="/php/update/update_metro.php">
        <input type="hidden" name="metroId" value="<?= $metro['id_metro']?>">
        <p>Название метро</p>
        <input type="text" name="metroName" value="<?= $metro['name']?>">
        <p>ID района</p>
        <input type="text" name="metroNeighborhood" value="<?= $metro['id_neighborhood']?>">
        <button type="submit">Изменить</button>
    </form>
</body>
</html>