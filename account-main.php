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
    <title>Личный кабинет</title>
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
                
                <h2 class="personal-info__title">Личный кабинет</h2>

                <div class="personal-info__nav">
                    <div class="personal-info__info">
                        <img src="img/account-lk.png" alt="Аккаунт">
                        <p class="personal-info__p">Личные данные</p>
                    </div>

                    <a href="account-like.php" class="personal-info__like">
                        <img src="img/like-lk.png" alt="Избранное">
                        <p class="personal-info__p-like">Избранное</p>
                    </a>

                    <a href="account-bought.php" class="personal-info__bought">
                        <img src="img/house-lk.png" alt="Куплено">
                        <p class="personal-info__p-bought">Куплено</p>
                    </a>
                </div>

                <div class="personal-info__block">
                    <div class="block__wrapper">
                        <img src="img/ava.png" alt="Ваш аватар">

                        <div class="block__row">
                            <div class="block__row-name">
                                <img src="img/account-lk.png" alt="Аккаунт">
                                <p class="block__row-name-p"><?= $_SESSION['user']['surname'] ?></p>
                            </div>
                            <div class="block__row-tele">
                                <img src="img/tele-sec-c.png" alt="Телефон">
                                <p class="block__row-tele-p"><?= $_SESSION['user']['telephone'] ?></p>
                            </div>
                            <div class="block__row-email">
                                <img src="img/email-third-c.png" alt="Эл.почта">
                                <p class="block__row-email-p"><?= $_SESSION['user']['email'] ?></p>
                            </div>
                        </div>
                    </div>

                    <button class="four-block__share personal-info__button"><a href="account-main-update.php?id=<?= $_SESSION['user']['id_user'] ?>"><img src="img/edit-sec.png" alt="Изменить"></a></button>
                </div>
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