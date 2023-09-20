
<? require_once 'php/config/connect.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Exclusivo - Агенство по продаже элитных домов</title>
</head>
<body>
    <header class="header-m">
        <div class="container">
            <nav class="heading heading__main">
                <div class="heading__nav ">
                    <ul class="heading__left">
                        <li><a href="#" class="heading__item"><img src="img/logo.png" alt="логотип Exclusivo"></a></li>
                        <li><a href="about-us.php" class="heading__item ">О компании</a></li>
                        <li><a href="catalog.php" class="heading__item ">Каталог</a></li>
                    </ul>
                    <ul class="heading__right">
                        <li><a href="contacts.php" class="heading__item">Контакты</a></li>
                        <li><button class="heading__button"><img src="img/acc_log.png" alt="логотип аккаунта"></button></li>
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

            <div class="heading__dropdown dropdown">
                <h1 class="dropdown__h">
                    Недвижимость в Москве
                </h1>



    </header>


    <main>
    
        <section class="offer">
            
            <div class="container">
                
                <h2 class="offer__h2">Горячие предложения</h2>
                <div class="offer__row">

                    <?php
                        $houses = mysqli_query($connect, query:"SELECT house.*, neighborhood.name AS 'Район' , house_type.type AS 'Тип дома'
                        FROM house 
                        JOIN neighborhood ON house.id_neighborhood = neighborhood.id_neighborhood
                        JOIN house_type ON house.id_house_type = house_type.id_house_type
                        where `id_house` = '5'");
                        $houses = mysqli_fetch_all($houses);
                        foreach ($houses as $house) {
                    ?>

                    <div class="offer__first">
                        <div class="first__photo">
                            <img src="img/fcard.png" class="photo-m" alt="Пример дома">
                            <div class="first__wrapper">
                                <div class="first__hot">
                                    <p class="hot__p">Горячее предложение</p>
                                </div>

                                <div class="first__id">
                                    <p class="id__p">ID: <?= $house[0] ?></p>
                                </div>
                            </div>
                            <div class="first__card">
                                <h3 class="card__h3"><?= $house[14] ?> дом, <?= $house[8] ?> м²</h3>
                                <div class="card__attribute">
                                    <div class="attribute__kitchen">
                                        <img src="img/kitchen.png" alt="Логотип кухни">
                                        <p class="attribute__p"><?= $house[10] ?> м²</p>
                                    </div>

                                    <div class="attribute__height">
                                        <img src="img/height.png" alt="Высота потолков">
                                        <p class="attribute__p"><?= $house[9] ?>.00 м</p>
                                    </div>
                                </div>
                                <div class="card__neigbourhood">
                                    <img src="img/nabourhood.png" alt="Район"> 
                                    <p class="neigbourhood__p"><?= $house[13] ?></p>
                                </div>
                                <div class="card__line"></div>
                                <div class="card__cost">
                                    <div class="cost__full">
                                        <h3 class="full__h3"><?= $house[6] ?> ₽</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>

                 
                    <?php
                        $houses = mysqli_query($connect, query:"SELECT house.*, neighborhood.name AS 'Район' , house_type.type AS 'Тип дома'
                        FROM house 
                        JOIN neighborhood ON house.id_neighborhood = neighborhood.id_neighborhood
                        JOIN house_type ON house.id_house_type = house_type.id_house_type
                        where `id_house` = '7'");
                        $houses = mysqli_fetch_all($houses);
                        foreach ($houses as $house) {
                    ?>

                    <div class="offer__first">
                        <div class="first__photo">
                            <img src="img/fcard1.png" class="photo-m" alt="Пример дома">
                            <div class="first__wrapper">
                                <div class="first__hot">
                                    <p class="hot__p">Горячее предложение</p>
                                </div>

                                <div class="first__id">
                                    <p class="id__p">ID: <?= $house[0] ?></p>
                                </div>
                            </div>
                            <div class="first__card">
                                <h3 class="card__h3"><?= $house[14] ?> дом, <?= $house[8] ?> м²</h3>
                                <div class="card__attribute">
                                    <div class="attribute__kitchen">
                                        <img src="img/kitchen.png" alt="Логотип кухни">
                                        <p class="attribute__p"><?= $house[10] ?> м²</p>
                                    </div>

                                    <div class="attribute__height">
                                        <img src="img/height.png" alt="Высота потолков">
                                        <p class="attribute__p"><?= $house[9] ?>.00 м</p>
                                    </div>
                                </div>
                                <div class="card__neigbourhood">
                                    <img src="img/nabourhood.png" alt="Район"> 
                                    <p class="neigbourhood__p"><?= $house[13] ?></p>
                                </div>
                                <div class="card__line"></div>
                                <div class="card__cost">
                                    <div class="cost__full">
                                        <h3 class="full__h3"><?= $house[6] ?> ₽</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>

                    <?php
                        $houses = mysqli_query($connect, query:"SELECT house.*, neighborhood.name AS 'Район' , house_type.type AS 'Тип дома'
                        FROM house 
                        JOIN neighborhood ON house.id_neighborhood = neighborhood.id_neighborhood
                        JOIN house_type ON house.id_house_type = house_type.id_house_type
                        where `id_house` = '10'");
                        $houses = mysqli_fetch_all($houses);
                        foreach ($houses as $house) {
                    ?>

                    <div class="offer__first">
                        <div class="first__photo">
                            <img src="img/fcard2.png" class="photo-m" alt="Пример дома">
                            <div class="first__wrapper">
                                <div class="first__hot">
                                    <p class="hot__p">Горячее предложение</p>
                                </div>

                                <div class="first__id">
                                    <p class="id__p">ID: <?= $house[0] ?></p>
                                </div>
                            </div>
                            <div class="first__card">
                                <h3 class="card__h3"><?= $house[14] ?> дом, <?= $house[8] ?> м²</h3>
                                <div class="card__attribute">
                                    <div class="attribute__kitchen">
                                        <img src="img/kitchen.png" alt="Логотип кухни">
                                        <p class="attribute__p"><?= $house[10] ?> м²</p>
                                    </div>

                                    <div class="attribute__height">
                                        <img src="img/height.png" alt="Высота потолков">
                                        <p class="attribute__p"><?= $house[9] ?>.00 м</p>
                                    </div>
                                </div>
                                <div class="card__neigbourhood">
                                    <img src="img/nabourhood.png" alt="Район"> 
                                    <p class="neigbourhood__p"><?= $house[13] ?></p>
                                </div>
                                <div class="card__line"></div>
                                <div class="card__cost">
                                    <div class="cost__full">
                                        <h3 class="full__h3"><?= $house[6] ?> ₽</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>


                    <?php
                        $houses = mysqli_query($connect, query:"SELECT house.*, neighborhood.name AS 'Район' , house_type.type AS 'Тип дома'
                        FROM house 
                        JOIN neighborhood ON house.id_neighborhood = neighborhood.id_neighborhood
                        JOIN house_type ON house.id_house_type = house_type.id_house_type
                        where `id_house` = '13'");
                        $houses = mysqli_fetch_all($houses);
                        foreach ($houses as $house) {
                    ?>

                    <div class="offer__first">
                        <div class="first__photo">
                            <img src="img/fcard3.png" class="photo-m" alt="Пример дома">
                            <div class="first__wrapper">
                                <div class="first__hot">
                                    <p class="hot__p">Горячее предложение</p>
                                </div>

                                <div class="first__id">
                                    <p class="id__p">ID: <?= $house[0] ?></p>
                                </div>
                            </div>
                            <div class="first__card">
                                <h3 class="card__h3"><?= $house[14] ?> дом, <?= $house[8] ?> м²</h3>
                                <div class="card__attribute">
                                    <div class="attribute__kitchen">
                                        <img src="img/kitchen.png" alt="Логотип кухни">
                                        <p class="attribute__p"><?= $house[10] ?> м²</p>
                                    </div>

                                    <div class="attribute__height">
                                        <img src="img/height.png" alt="Высота потолков">
                                        <p class="attribute__p"><?= $house[9] ?>.00 м</p>
                                    </div>
                                </div>
                                <div class="card__neigbourhood">
                                    <img src="img/nabourhood.png" alt="Район"> 
                                    <p class="neigbourhood__p"><?= $house[13] ?></p>
                                </div>
                                <div class="card__line"></div>
                                <div class="card__cost">
                                    <div class="cost__full">
                                        <h3 class="full__h3"><?= $house[6] ?> ₽</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>


                    <?php
                        $houses = mysqli_query($connect, query:"SELECT house.*, neighborhood.name AS 'Район' , house_type.type AS 'Тип дома'
                        FROM house 
                        JOIN neighborhood ON house.id_neighborhood = neighborhood.id_neighborhood
                        JOIN house_type ON house.id_house_type = house_type.id_house_type
                        where `id_house` = '5'");
                        $houses = mysqli_fetch_all($houses);
                        foreach ($houses as $house) {
                    ?>

                    <div class="offer__first">
                        <div class="first__photo">
                            <img src="img/fcard4.png" class="photo-m" alt="Пример дома">
                            <div class="first__wrapper">
                                <div class="first__hot">
                                    <p class="hot__p">Горячее предложение</p>
                                </div>

                                <div class="first__id">
                                    <p class="id__p">ID: <?= $house[0] ?></p>
                                </div>
                            </div>
                            <div class="first__card">
                                <h3 class="card__h3"><?= $house[14] ?> дом, <?= $house[8] ?> м²</h3>
                                <div class="card__attribute">
                                    <div class="attribute__kitchen">
                                        <img src="img/kitchen.png" alt="Логотип кухни">
                                        <p class="attribute__p"><?= $house[10] ?> м²</p>
                                    </div>

                                    <div class="attribute__height">
                                        <img src="img/height.png" alt="Высота потолков">
                                        <p class="attribute__p"><?= $house[9] ?>.00 м</p>
                                    </div>
                                </div>
                                <div class="card__neigbourhood">
                                    <img src="img/nabourhood.png" alt="Район"> 
                                    <p class="neigbourhood__p"><?= $house[13] ?></p>
                                </div>
                                <div class="card__line"></div>
                                <div class="card__cost">
                                    <div class="cost__full">
                                        <h3 class="full__h3"><?= $house[6] ?> ₽</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>


                </div>
            </div>
        </section>

        <section class="new">
            <div class="container">
                <h2 class="new__h2">Новинки</h2>
                    <div class="new__row">
                        <?php
                            $houses = mysqli_query($connect, query:"SELECT house.*, neighborhood.name AS 'Район' , house_type.type AS 'Тип дома'
                            FROM house 
                            JOIN neighborhood ON house.id_neighborhood = neighborhood.id_neighborhood
                            JOIN house_type ON house.id_house_type = house_type.id_house_type
                            where `id_house` = '12'");
                            $houses = mysqli_fetch_all($houses);
                            foreach ($houses as $house) {
                        ?>
                        <div class="new__first">
                            <div class="first__photo">
                                <img src="img/fcard5.png" class="photo-m" alt="Пример дома">
                                <div class="first__wrapper">
                                    <div class="first__new">
                                        <p class="new__p">Новинка</p>
                                    </div>
                                    <div class="first__id">
                                        <p class="id__p">ID: <?= $house[0] ?></p>
                                    </div>
                                </div>
                                <div class="first__card">
                                    <h3 class="card__h3"><?= $house[14] ?> дом, 800 м²</h3>
                                    <div class="card__attribute">
                                        <div class="attribute__kitchen">
                                            <img src="img/kitchen.png" alt="Кухня">
                                            <p class="attribute__p"><?= $house[10] ?> м²</p>
                                        </div>

                                        <div class="attribute__height">
                                            <img src="img/height.png" alt="Высота потолков"> 
                                            <p class="attribute__p"><?= $house[9] ?>.00 м</p>
                                        </div>
                                    </div>
                                    <div class="card__neigbourhood">
                                        <img src="img/nabourhood.png" alt="Район">
                                        <p class="neigbourhood__p"><?= $house[13] ?></p>
                                    </div>
                                    <div class="card__line"></div>
                                    <div class="card__cost">
                                        <div class="cost__full">
                                            <h3 class="full__h3"><?= $house[6] ?> ₽</h3>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        </div>

                        <?php
                            $houses = mysqli_query($connect, query:"SELECT house.*, neighborhood.name AS 'Район' , house_type.type AS 'Тип дома'
                            FROM house 
                            JOIN neighborhood ON house.id_neighborhood = neighborhood.id_neighborhood
                            JOIN house_type ON house.id_house_type = house_type.id_house_type
                            where `id_house` = '6'");
                            $houses = mysqli_fetch_all($houses);
                            foreach ($houses as $house) {
                        ?>
                        <div class="new__first">
                            <div class="first__photo">
                                <img src="img/fcard6.png" class="photo-m" alt="Пример дома">
                                <div class="first__wrapper">
                                    <div class="first__new">
                                        <p class="new__p">Новинка</p>
                                    </div>
                                    <div class="first__id">
                                        <p class="id__p">ID: <?= $house[0] ?></p>
                                    </div>
                                </div>
                                <div class="first__card">
                                    <h3 class="card__h3"><?= $house[14] ?> дом, 800 м²</h3>
                                    <div class="card__attribute">
                                        <div class="attribute__kitchen">
                                            <img src="img/kitchen.png" alt="Кухня">
                                            <p class="attribute__p"><?= $house[10] ?> м²</p>
                                        </div>

                                        <div class="attribute__height">
                                            <img src="img/height.png" alt="Высота потолков"> 
                                            <p class="attribute__p"><?= $house[9] ?>.00 м</p>
                                        </div>
                                    </div>
                                    <div class="card__neigbourhood">
                                        <img src="img/nabourhood.png" alt="Район">
                                        <p class="neigbourhood__p"><?= $house[13] ?></p>
                                    </div>
                                    <div class="card__line"></div>
                                    <div class="card__cost">
                                        <div class="cost__full">
                                            <h3 class="full__h3"><?= $house[6] ?> ₽</h3>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        </div>

                        <?php
                            $houses = mysqli_query($connect, query:"SELECT house.*, neighborhood.name AS 'Район' , house_type.type AS 'Тип дома'
                            FROM house 
                            JOIN neighborhood ON house.id_neighborhood = neighborhood.id_neighborhood
                            JOIN house_type ON house.id_house_type = house_type.id_house_type
                            where `id_house` = '12'");
                            $houses = mysqli_fetch_all($houses);
                            foreach ($houses as $house) {
                        ?>
                        <div class="new__first">
                            <div class="first__photo">
                                <img src="img/fcard7.png" class="photo-m" alt="Пример дома">
                                <div class="first__wrapper">
                                    <div class="first__new">
                                        <p class="new__p">Новинка</p>
                                    </div>
                                    <div class="first__id">
                                        <p class="id__p">ID: <?= $house[0] ?></p>
                                    </div>
                                </div>
                                <div class="first__card">
                                    <h3 class="card__h3"><?= $house[14] ?> дом, 800 м²</h3>
                                    <div class="card__attribute">
                                        <div class="attribute__kitchen">
                                            <img src="img/kitchen.png" alt="Кухня">
                                            <p class="attribute__p"><?= $house[10] ?> м²</p>
                                        </div>

                                        <div class="attribute__height">
                                            <img src="img/height.png" alt="Высота потолков"> 
                                            <p class="attribute__p"><?= $house[9] ?>.00 м</p>
                                        </div>
                                    </div>
                                    <div class="card__neigbourhood">
                                        <img src="img/nabourhood.png" alt="Район">
                                        <p class="neigbourhood__p"><?= $house[13] ?></p>
                                    </div>
                                    <div class="card__line"></div>
                                    <div class="card__cost">
                                        <div class="cost__full">
                                            <h3 class="full__h3"><?= $house[6] ?> ₽</h3>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        </div>

                        <?php
                            $houses = mysqli_query($connect, query:"SELECT house.*, neighborhood.name AS 'Район' , house_type.type AS 'Тип дома'
                            FROM house 
                            JOIN neighborhood ON house.id_neighborhood = neighborhood.id_neighborhood
                            JOIN house_type ON house.id_house_type = house_type.id_house_type
                            where `id_house` = '6'");
                            $houses = mysqli_fetch_all($houses);
                            foreach ($houses as $house) {
                        ?>
                        <div class="new__first">
                            <div class="first__photo">
                                <img src="img/fcard8.png" class="photo-m" alt="Пример дома">
                                <div class="first__wrapper">
                                    <div class="first__new">
                                        <p class="new__p">Новинка</p>
                                    </div>
                                    <div class="first__id">
                                        <p class="id__p">ID: <?= $house[0] ?></p>
                                    </div>
                                </div>
                                <div class="first__card">
                                    <h3 class="card__h3"><?= $house[14] ?> дом, 800 м²</h3>
                                    <div class="card__attribute">
                                        <div class="attribute__kitchen">
                                            <img src="img/kitchen.png" alt="Кухня">
                                            <p class="attribute__p"><?= $house[10] ?> м²</p>
                                        </div>

                                        <div class="attribute__height">
                                            <img src="img/height.png" alt="Высота потолков"> 
                                            <p class="attribute__p"><?= $house[9] ?>.00 м</p>
                                        </div>
                                    </div>
                                    <div class="card__neigbourhood">
                                        <img src="img/nabourhood.png" alt="Район">
                                        <p class="neigbourhood__p"><?= $house[13] ?></p>
                                    </div>
                                    <div class="card__line"></div>
                                    <div class="card__cost">
                                        <div class="cost__full">
                                            <h3 class="full__h3"><?= $house[6] ?> ₽</h3>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        </div>

                        <?php
                            $houses = mysqli_query($connect, query:"SELECT house.*, neighborhood.name AS 'Район' , house_type.type AS 'Тип дома'
                            FROM house 
                            JOIN neighborhood ON house.id_neighborhood = neighborhood.id_neighborhood
                            JOIN house_type ON house.id_house_type = house_type.id_house_type
                            where `id_house` = '12'");
                            $houses = mysqli_fetch_all($houses);
                            foreach ($houses as $house) {
                        ?>
                        <div class="new__first">
                            <div class="first__photo">
                                <img src="img/fcard9.png" class="photo-m" alt="Пример дома">
                                <div class="first__wrapper">
                                    <div class="first__new">
                                        <p class="new__p">Новинка</p>
                                    </div>
                                    <div class="first__id">
                                        <p class="id__p">ID: <?= $house[0] ?></p>
                                    </div>
                                </div>
                                <div class="first__card">
                                    <h3 class="card__h3"><?= $house[14] ?> дом, 800 м²</h3>
                                    <div class="card__attribute">
                                        <div class="attribute__kitchen">
                                            <img src="img/kitchen.png" alt="Кухня">
                                            <p class="attribute__p"><?= $house[10] ?> м²</p>
                                        </div>

                                        <div class="attribute__height">
                                            <img src="img/height.png" alt="Высота потолков"> 
                                            <p class="attribute__p"><?= $house[9] ?>.00 м</p>
                                        </div>
                                    </div>
                                    <div class="card__neigbourhood">
                                        <img src="img/nabourhood.png" alt="Район">
                                        <p class="neigbourhood__p"><?= $house[13] ?></p>
                                    </div>
                                    <div class="card__line"></div>
                                    <div class="card__cost">
                                        <div class="cost__full">
                                            <h3 class="full__h3"><?= $house[6] ?> ₽</h3>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        </div>
            </div>
        </section>


        <section class="partners">
            <div class="container"> 
                <h2 class="partners__h2">Наши партнеры</h2>
                <div class="partners__row">
                    <div class="partners__avito">
                        <img src="img/avito.png" alt="Лого Авито">
                    </div>

                    <div class="partners__cian">
                        <img src="img/cian.png" alt="Лого Циан">
                    </div>

                    <div class="partners__domclick">
                        <img src="img/domclick.png" alt="Лого Дом Клик">
                    </div>

                    <div class="partners__rosreestr">
                        <img src="img/rosreestr.png" alt="Лого РосРеестр">
                    </div>

                    <div class="partners__yandexmaps">
                        <img src="img/yandexmaps.png" alt="Лого Яндекс Карты">
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer__row">
                <div class="footer__nav">
                    <div class="footer__start">
                        <a href="#"><img src="img/logo.png" class="footer__logo" alt="Лого Exclusivo"></a>
                        <ul class="footer__wrapper">
                            <li><a href="about-us.php" class="footer__item">О компании</a></li>
                            <li><a href="catalog.php" class="footer__item">Каталог</a></li>
                            <li><a href="contacts.php" class="footer__item">Контакты</a></li>
                            <li><a href="account-main.php" class="footer__item">Личный кабинет</a></li>
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