<? require_once 'php/config/connect.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>О компании Exclusivo</title>
</head>
<body>
    <header class="header-color">
        <div class="container">
            <nav class="heading">
                <div class="heading__nav">
                    <ul class="heading__left">
                        <li><a href="main.php" class="heading__item"><img src="img/logo.png" alt="Логотип Exclusivo"></a></li>
                        <li><a href="#" class="heading__item ">О компании</a></li>
                        <li><a href="catalog.php" class="heading__item ">Каталог</a></li>
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
        <div class="biglogo-au">
            <div class="container">
                <img src="img/biglogo.png" alt="Большой логотип Exclusivo" class="biglogo-au__logo">
            </div>
        </div>

        <section class="about-company">
            <div class="container">
                <div class="about-company__wrapper">
                    <h2 class="about-company__h2">О нашей компании</h2>
                    <p class="about-company__p">Добро пожаловать в наше агентство по продаже элитных домов! Мы занимаемся поиском и продажей недвижимости для самых требовательных клиентов, которые ценят качество, роскошь и уют. Наша команда из профессионалов с большим опытом работы в этой сфере готова подойти к каждому клиенту индивидуально и помочь выбрать дом мечты, который будет соответствовать всем их потребностям и пожеланиям. Мы предлагаем широкий выбор элитных домов в лучших районах городов и за его пределами. Работать с нами – это шаг к реализации мечты о просторном и комфортном доме, который станет идеальным убежищем для всей вашей семьи.</p>
                </div>   
            </div>
        </section>

        <div class="photo-au">
            <div class="photo-au__size"></div>
        </div>

        <div class="choice">
            <div class="container">
                <div class="choice__wrapper">
                    <img src="img/whyus.png" alt="Пример работы дизайнеров Exclusivo" class="adaptiv">
                    <article class="choice__article">
                        <h2 class="choice__h2">Почему нас выбирают?</h2>
                        <p class="choice__p">Наше агентство занимается продажей элитных домов в лучших районах города. Мы предлагаем широкий выбор недвижимости, включая роскошные виллы, особняки, замки и другие уникальные объекты.
                            <br><br>Отличительной особенностью нашего агентства является высокое качество услуг и индивидуальный подход к каждому клиенту. Мы предоставляем полный спектр услуг, связанных с продажей и арендой элитной недвижимости - от оценки объекта до заключения сделки.
                            <br><br>Благодаря тесному сотрудничеству с известными архитекторами и дизайнерами, мы можем предложить нашим клиентам эксклюзивные объекты с уникальным дизайном и архитектурой.
                            <br><br>Мы понимаем, что покупка элитной недвижимости - это не только инвестиция, но и вопрос престижа и статуса. Поэтому наши эксперты всегда готовы помочь с выбором объекта, который подходит именно для вас.
                            <br><br>Если вы ищете жилую недвижимость высшего класса, свяжитесь с нами - мы поможем вам найти идеальный дом в лучших районах города.</p>
                    </article>
                    <img src="img/whyus.png" alt="Пример работы дизайнеров Exclusivo" class="non-adaptiv">
                </div>
            </div>
        </div>

        <section class="employers">
            <div class="container">
                <h2 class="employers__h2">Наши сотрудники</h2>

                <div class="employers__row">

                    <?php
                        $house_agents = mysqli_query($connect, query:"SELECT * FROM `house_agent` where `id_house_agent` = '3'");
                        $house_agents = mysqli_fetch_all($house_agents);
                        foreach ($house_agents as $house_agent) {
                            ?>
                    <div class="employers__block">
                        <div class="employers__photo">
                            <img src="img/emolyer.png" alt="Сотрудник компании">
                        </div>

                        <h3 class="employers__name"><?= $house_agent[2] ?> <?= $house_agent[1] ?> <?= $house_agent[3] ?></h3>
                        <p class="employers__role">Агент по продажам</p>

                        <div class="employers__contacts">
                            <div class="employers__telephone">
                                <img src="img/tele-au.png" alt="Иконка телефона">
                                <div class="employers__tele-block">
                                    <p class="tele-block__p">Телефон</p>
                                    <p class="tele-block__num"><?= $house_agent[4] ?></p>
                                </div>
                            </div>
                            <div class="employers__line"></div>
                            <div class="employers__email">
                                <img src="img/emailsecond-au.png" alt="Иконка электронной почты">
                                <div class="employers__email-block">
                                    <p class="email-block__p">Email</p>
                                    <p class="email-block__num"><?= $house_agent[5] ?></p>
                                </div>
                            </div>

                        </div>
                        <?php
                         }
                        ?>
                    </div>

                    
                    <?php
                        $house_agents = mysqli_query($connect, query:"SELECT * FROM `house_agent` where `id_house_agent` = '1'");
                        $house_agents = mysqli_fetch_all($house_agents);
                        foreach ($house_agents as $house_agent) {
                            ?>
                    <div class="employers__block">
                        <div class="employers__photo">
                            <img src="img/emolyer2.png" alt="Сотрудник компании">
                        </div>

                        <h3 class="employers__name"><?= $house_agent[2] ?> <?= $house_agent[1] ?> <?= $house_agent[3] ?></h3>
                        <p class="employers__role">Агент по продажам</p>

                        <div class="employers__contacts">
                            <div class="employers__telephone">
                                <img src="img/tele-au.png" alt="Иконка телефона">
                                <div class="employers__tele-block">
                                    <p class="tele-block__p">Телефон</p>
                                    <p class="tele-block__num"><?= $house_agent[4] ?></p>
                                </div>
                            </div>
                            <div class="employers__line"></div>
                            <div class="employers__email">
                                <img src="img/emailsecond-au.png" alt="Иконка электронной почты">
                                <div class="employers__email-block">
                                    <p class="email-block__p">Email</p>
                                    <p class="email-block__num"><?= $house_agent[5] ?></p>
                                </div>
                            </div>

                        </div>
                        <?php
                         }
                        ?>
                    </div>

                    
                    <?php
                        $house_agents = mysqli_query($connect, query:"SELECT * FROM `house_agent` where `id_house_agent` = '4'");
                        $house_agents = mysqli_fetch_all($house_agents);
                        foreach ($house_agents as $house_agent) {
                            ?>
                    <div class="employers__block">
                        <div class="employers__photo">
                            <img src="img/emolyer3.png" alt="Сотрудник компании">
                        </div>

                        <h3 class="employers__name"><?= $house_agent[2] ?> <?= $house_agent[1] ?> <?= $house_agent[3] ?></h3>
                        <p class="employers__role">Агент по продажам</p>

                        <div class="employers__contacts">
                            <div class="employers__telephone">
                                <img src="img/tele-au.png" alt="Иконка телефона">
                                <div class="employers__tele-block">
                                    <p class="tele-block__p">Телефон</p>
                                    <p class="tele-block__num"><?= $house_agent[4] ?></p>
                                </div>
                            </div>
                            <div class="employers__line"></div>
                            <div class="employers__email">
                                <img src="img/emailsecond-au.png" alt="Иконка электронной почты">
                                <div class="employers__email-block">
                                    <p class="email-block__p">Email</p>
                                    <p class="email-block__num"><?= $house_agent[5] ?></p>
                                </div>
                            </div>

                        </div>
                        <?php
                         }
                        ?>
                    </div>


                    
                    <?php
                        $house_agents = mysqli_query($connect, query:"SELECT * FROM `house_agent` where `id_house_agent` = '5'");
                        $house_agents = mysqli_fetch_all($house_agents);
                        foreach ($house_agents as $house_agent) {
                            ?>
                    <div class="employers__block">
                        <div class="employers__photo">
                            <img src="img/emolyer4.png" alt="Сотрудник компании">
                        </div>

                        <h3 class="employers__name"><?= $house_agent[2] ?> <?= $house_agent[1] ?> <?= $house_agent[3] ?></h3>
                        <p class="employers__role">Агент по продажам</p>

                        <div class="employers__contacts">
                            <div class="employers__telephone">
                                <img src="img/tele-au.png" alt="Иконка телефона">
                                <div class="employers__tele-block">
                                    <p class="tele-block__p">Телефон</p>
                                    <p class="tele-block__num"><?= $house_agent[4] ?></p>
                                </div>
                            </div>
                            <div class="employers__line"></div>
                            <div class="employers__email">
                                <img src="img/emailsecond-au.png" alt="Иконка электронной почты">
                                <div class="employers__email-block">
                                    <p class="email-block__p">Email</p>
                                    <p class="email-block__num"><?= $house_agent[5] ?></p>
                                </div>
                            </div>

                        </div>
                        <?php
                         }
                        ?>
                    </div>

                    <?php
                        $house_agents = mysqli_query($connect, query:"SELECT * FROM `house_agent` where `id_house_agent` = '1'");
                        $house_agents = mysqli_fetch_all($house_agents);
                        foreach ($house_agents as $house_agent) {
                            ?>
                    <div class="employers__block">
                        <div class="employers__photo">
                            <img src="img/emolyer5.png" alt="Сотрудник компании">
                        </div>

                        <h3 class="employers__name"><?= $house_agent[2] ?> <?= $house_agent[1] ?> <?= $house_agent[3] ?></h3>
                        <p class="employers__role">Агент по продажам</p>

                        <div class="employers__contacts">
                            <div class="employers__telephone">
                                <img src="img/tele-au.png" alt="Иконка телефона">
                                <div class="employers__tele-block">
                                    <p class="tele-block__p">Телефон</p>
                                    <p class="tele-block__num"><?= $house_agent[4] ?></p>
                                </div>
                            </div>
                            <div class="employers__line"></div>
                            <div class="employers__email">
                                <img src="img/emailsecond-au.png" alt="Иконка электронной почты">
                                <div class="employers__email-block">
                                    <p class="email-block__p">Email</p>
                                    <p class="email-block__num"><?= $house_agent[5] ?></p>
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
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer__row">
                <div class="footer__nav">
                    <div class="footer__start">
                        <a href="main.php"><img src="img/logo.png" class="footer__logo" alt="Логотип Exclusivo"></a>
                        <ul class="footer__wrapper">
                            <li><a href="#" class="footer__item">О компании</a></li>
                            <li><a href="catalog.php" class="footer__item">Каталог</a></li>
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