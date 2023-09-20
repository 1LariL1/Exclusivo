<? require_once 'php/config/connect.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Купить элитный дом - Exclusivo</title>
</head>
<body class="b-c">
    <header class="header-color">
        <div class="container">
            <nav class="heading heading-m">
                <div class="heading__nav">
                    <ul class="heading__left">
                        <li><a href="main.php" class="heading__item"><img src="img/logo.png" alt="Логотип Exclusivo"></a></li>
                        <li><a href="about-us.php" class="heading__item ">О компании</a></li>
                        <li><a href="#" class="heading__item ">Каталог</a></li>
                    </ul>
                    <ul class="heading__right">
                        <li><a href="contacts.php" class="heading__item">Контакты</a></li>
                        <li><button class="heading__button"><img src="img/acc_log.png" alt="Аккаунт"></button></li>
                    </ul>
                </div>
            </nav>

            <div class="heading__login">
                <div class="heading__wrapper">
                    <div class="login__form">
                        <div class="form__buttons">
                            <p class="form__p">Вход</p>
                            <button class="form__reg">Регистрация</button>
                            <button class="form__close"><img src="img/close.png" alt="Крестик"></button>
                        </div>

                        <h3 class="login__h3">Добро пожаловать!</h3>
                        <p class="login__p">Войдите, чтобы продолжить</p>

                        <form class="login__input" method="POST" novalidate action="php/config/signin.php">
                            <input type="email" id="emailInput" name="email" class="input__email" placeholder="Email" required>
                            <span class="error-email" aria-live="polite"></span>
                            <input type="password" id="passwordInput" name="password" class="input__password" placeholder="Пароль" required minlength="8">
                            <span class="error-password" aria-live="polite"></span>
                            <input type="submit" id="3"  class="login__button" value="Войти"> 
                        </form> 

                        <button class="login__reg">Нет аккаунта? Зарегистрироваться</button>
                    </div>
                    <div class="photo__form">
                        <img src="img/formphoto.png" class="photo__form-settings" alt="Пример интерьера">
                    </div>
                </div>
            </div>

            <div class="heading__reg">
                <div class="heading__wrapper-reg">
                    <div class="reg__form">
                        <div class="form__buttons-reg">
                            <button class="form__log">Вход</button>
                            <p class="form__p-reg">Регистрация</p>
                            <button class="form__close-reg"><img src="img/close.png" alt="Крестик"></button>
                        </div>

                        <h3 class="reg__h3">Добро пожаловать!</h3>
                        <p class="reg__p">Зарегистируйтесь, чтобы продолжить</p>

                        <form class="reg__input" method="POST" novalidate action="php/config/store-signup.php">
                            <input type="email" id="emailInputReg" name="email" class="input__email-reg" placeholder="Email" required>
                            <span class="error-email" aria-live="polite"></span>
                            <input type="text" id="fioInput" name="surname" class="input__name-reg" placeholder="Фамилия" required minlength="8">
                            <span class="error-name" aria-live="polite"></span>
                            <input type="password" id="passRegInput" name="passwordReg" class="input__password-reg" placeholder="Пароль" required minlength="8">
                            <span class="error-pass" aria-live="polite"></span>
                            <input type="password" id="passConfirmRegInput" name="passwordConfirmReg" class="input__repeat-reg" placeholder="Повторите пароль" required>
                            <span class="error-passConfirm" aria-live="polite"></span>
                            <input type="submit" id="8"  class="reg__button" value="Создать аккаунт" name="REG-BUT-SUBMIT"> 
                        </form> 

                        <button class="reg__login">У меня уже есть аккаунт</button>
                    </div>
                    <div class="photo__form">
                        <img src="img/formphoto.png" class="photo__form-settings" alt="Пример интерьера">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>


        <section class="catalog">
            <div class="container">
                <h2 class="catalog__title">Каталог объектов</h2>

                <div class="catalog__object y">

                    <?php
                        $houses = mysqli_query($connect, query:"SELECT house.*, neighborhood.name AS 'Район' , house_type.type AS 'Тип дома'
                        FROM house 
                        JOIN neighborhood ON house.id_neighborhood = neighborhood.id_neighborhood
                        JOIN house_type ON house.id_house_type = house_type.id_house_type
                        where `id_house` = '1'");
                        $houses = mysqli_fetch_all($houses);
                        foreach ($houses as $house) {
                    ?>

                    <img src="img/card-house.png" alt="Пример объекта" class="object__adaptiv">
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


                <div class="catalog__object y">

                    <?php
                        $houses = mysqli_query($connect, query:"SELECT house.*, neighborhood.name AS 'Район' , house_type.type AS 'Тип дома'
                        FROM house 
                        JOIN neighborhood ON house.id_neighborhood = neighborhood.id_neighborhood
                        JOIN house_type ON house.id_house_type = house_type.id_house_type
                        where `id_house` = '5'");
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

                <div class="catalog__object y">

                    <?php
                        $houses = mysqli_query($connect, query:"SELECT house.*, neighborhood.name AS 'Район' , house_type.type AS 'Тип дома'
                        FROM house 
                        JOIN neighborhood ON house.id_neighborhood = neighborhood.id_neighborhood
                        JOIN house_type ON house.id_house_type = house_type.id_house_type
                        where `id_house` = '6'");
                        $houses = mysqli_fetch_all($houses);
                        foreach ($houses as $house) {
                    ?>

                    <img src="img/card-house2.png" alt="Пример объекта" class="object__adaptiv">
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

                <div class="catalog__object y">

                    <?php
                        $houses = mysqli_query($connect, query:"SELECT house.*, neighborhood.name AS 'Район' , house_type.type AS 'Тип дома'
                        FROM house 
                        JOIN neighborhood ON house.id_neighborhood = neighborhood.id_neighborhood
                        JOIN house_type ON house.id_house_type = house_type.id_house_type
                        where `id_house` = '7'");
                        $houses = mysqli_fetch_all($houses);
                        foreach ($houses as $house) {
                    ?>

                    <img src="img/card-house3.png" alt="Пример объекта" class="object__adaptiv">
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

                <div class="catalog__object y">

                    <?php
                        $houses = mysqli_query($connect, query:"SELECT house.*, neighborhood.name AS 'Район' , house_type.type AS 'Тип дома'
                        FROM house 
                        JOIN neighborhood ON house.id_neighborhood = neighborhood.id_neighborhood
                        JOIN house_type ON house.id_house_type = house_type.id_house_type
                        where `id_house` = '8'");
                        $houses = mysqli_fetch_all($houses);
                        foreach ($houses as $house) {
                    ?>

                    <img src="img/card-house4.png" alt="Пример объекта" class="object__adaptiv">
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

                <div class="catalog__object y">

                    <?php
                        $houses = mysqli_query($connect, query:"SELECT house.*, neighborhood.name AS 'Район' , house_type.type AS 'Тип дома'
                        FROM house 
                        JOIN neighborhood ON house.id_neighborhood = neighborhood.id_neighborhood
                        JOIN house_type ON house.id_house_type = house_type.id_house_type
                        where `id_house` = '9'");
                        $houses = mysqli_fetch_all($houses);
                        foreach ($houses as $house) {
                    ?>

                    <img src="img/card-house5.png" alt="Пример объекта" class="object__adaptiv">
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
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer__row">
                <div class="footer__nav">
                    <div class="footer__start">
                        <a href="main.php"><img src="img/logo.png" class="footer__logo" alt="Логотип Exclusivo"></a>
                        <ul class="footer__wrapper">
                            <li><a href="about-us.php" class="footer__item">О компании</a></li>
                            <li><a href="#" class="footer__item">Каталог</a></li>
                            <li><a href="contacts.php" class="footer__item">Контакты</a></li>
                            <li><a href="account-main.php" class="footer__item">Личный кабинет</a></li>
                        </ul>
                    </div>
                    <div class="footer__end">
                        <img src="img/instagram.png" alt="инстаграм">
                        <img src="img/whatsapp.png" alt="ватсапп">
                        <img src="img/telegram.png" alt="телеграмм">
                        <img src="img/vk.png" alt="вконтакте">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>