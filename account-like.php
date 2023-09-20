<? require_once 'php/config/connect.php';
?>
<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Избранное | Личный кабинет</title>
</head>
<body>
    <header class="header-color">
        <div class="container">
            <nav class="heading heading__main">
                <div class="heading__nav ">
                    <ul class="heading__left">
                        <li><a href="main.php" class="heading__item"><img src="img/logo.png" alt="логотип Exclusivo"></a></li>
                        <li><a href="about-us.php" class="heading__item ">О компании</a></li>
                        <li><a href="catalog.php" class="heading__item ">Каталог</a></li>
                    </ul>
                    <ul class="heading__right">
                        <li><a href="contacts.php" class="heading__item">Контакты</a></li>
                        <li><a href="php/config/logout.php"><img src="img/logout.png" alt="выйти из аккаунта"></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <main>
        
        <section class="personal-info">
            <div class="container">
                
                <h2 class="personal-info__title">Избранное</h2>

                <div class="personal-info__nav">
                    <a href="account-main.php" class="personal-info__info">
                        <img src="img/account-lk-l.png" alt="Аккаунт">
                        <p class="personal-info__p-l">Личные данные</p>
                    </a>

                    <div class="personal-info__like">
                        <img src="img/like-lk-l.png" alt="Избранное">
                        <p class="personal-info__p-like-l">Избранное</p>
                    </div>

                    <a href="account-bought.php" class="personal-info__bought">
                        <img src="img/house-lk.png" alt="Куплено">
                        <p class="personal-info__p-bought">Куплено</p>
                    </a>
                </div>

                <div class="catalog__object y c">

                    <?php
                        $houses = mysqli_query($connect, query:"SELECT house.*, neighborhood.name AS 'Район' , house_type.type AS 'Тип дома'
                        FROM favorites 
                        JOIN house ON favorites.id_house = house.id_house 
                        JOIN neighborhood ON house.id_neighborhood = neighborhood.id_neighborhood 
                        JOIN house_type ON house.id_house_type = house_type.id_house_type 
                        where id_user = '" . $_SESSION['user']['id_user'] . "'");
                        $houses = mysqli_fetch_all($houses);
                        foreach ($houses as $house) {
                    ?>

                    <img src="img/card-house1.png" alt="Пример объекта" class="object__adaptiv">
                    <div class="object__parametrs">
                        <div class="object__hot">
                            <p class="object__hot-p">Горячее предложение</p>
                        </div>
                        <div class="object__new">
                            <p class="object__new-p">Новинка</p>
                        </div>
                        <div class="object__id">
                            <p class="object__id-p">ID: <?= $house[0] ?></p>
                        </div>
                    </div>

                    <div class="object__info">
                        <div class="object__first-block">
                            <h2 class="first-block__title"><?= $house[14] ?> дом, <?= $house[8] ?> м²</h2>
                            <p class="first-block__date"><?= $house[12] ?></p>
                        </div>

                        <div class="object__second-block">
                            <div class="second-block__kitchen">
                                <img src="img/kitchen.png" alt="Кухня">
                                <p class="second-block__p"><?= $house[10] ?> м²</p>
                            </div>

                            <div class="second-block__height">
                                <img src="img/height.png" alt="Высота потолков">
                                <p class="second-block__p"><?= $house[9] ?>.00 м</p>
                            </div>
                        </div>

                        <div class="object__third-block">
                            <div class="third-block__naigbourhood">
                                <img src="img/nabourhood.png" alt="Район">
                                <p class="third-block__p"><?= $house[13] ?></p>
                            </div>

                            <div class="third-block__map">
                                <img src="img/map.png" alt="Карта">
                                <p class="third-block__p-t"><?= $house[11] ?></p>
                            </div>
                        </div>

                        


                        <div class="object__four-block">
                            <div class="four-block__cost">
                                <h2 class="four-block__price"><?= $house[6] ?> ₽</h2>
                            </div>

                        </div>
                    </div>

                    <?php
                    }

                    ?>
                    

                
            </div>
        </section>

    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer__row">
                <div class="footer__nav">
                    <div class="footer__start">
                        <a href="main.php"><img src="img/logo.png" class="footer__logo" alt="Лого Exclusivo"></a>
                        <ul class="footer__wrapper">
                            <li><a href="about-us.php" class="footer__item">О компании</a></li>
                            <li><a href="catalog.php" class="footer__item">Каталог</a></li>
                            <li><a href="contacts.php" class="footer__item">Контакты</a></li>
                            <li><a href="#" class="footer__item">Личный кабинет</a></li>
                        </ul>
                    </div>
                    <div class="footer__end">
                        <img src="img/instagram.png" alt="Инстаграм">
                        <img src="img/whatsapp.png" alt="Ватсапп">
                        <img src="img/telegram.png" alt="Телеграм">
                        <img src="img/vk.png" alt="ВКонтакте">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>