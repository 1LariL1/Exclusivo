<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>
<?php

require_once 'php/config/connect.php';

$id_user = $_GET['id'];
$user = mysqli_query($connect, query:"SELECT * FROM `user` WHERE `id_user` = '$id_user'");
$user = mysqli_fetch_assoc($user);
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
                        <p class="personal-info__p">Изменить личные данные</p>
                    </div>
                </div>

                    <div class="personal-info__block">
                    
                        <form method="post" action="php/update/update_account-main.php">
                            <div class="block-update__wrapper">
                                <img src="img/ava.png" alt="Ваш аватар">
                                <div>
                                    <input type="hidden" name="userId" value="<?= $user['id_user']?>"> 
                                    <p class="block-update__p">Имя</p>
                                    <input type="text" name="userName" value="<?= $user['name']?>" class="block-update__input">
                                    <p class="block-update__p">Фамилия</p>
                                    <input type="text" name="userSurname" value="<?= $user['surname']?>" class="block-update__input">
                                    <p class="block-update__p">Отчество</p>
                                    <input type="text" name="userPatronymic" value="<?= $user['patronymic']?>" class="block-update__input">
                                    <p class="block-update__p">Номер телефона</p>
                                    <input type="tel" name="userTel" value="<?= $user['telephone']?>" class="block-update__input">
                                    <p class="block-update__p">Адрес электронной почты</p>
                                    <input type="email" name="userEmail" value="<?= $user['email']?>" class="block-update__input">
                                    <p class="block-update__p">Пароль</p>
                                    <input type="text" name="userPass" value="<?= $user['password']?>" class="block-update__input">
                                    <p class="block-update__p">Бюджет</p>
                                    <input type="number" name="userBudget" value="<?= $user['budget']?>" class="block-update__input"> 

                                </div>
                            </div>

                            <button class="four-block__share personal-info__button" type="submit"><img src="img/edit-sec.png" alt="Изменить"></button>
                        </form>
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