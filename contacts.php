<? require_once 'php/config/connect.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Контакты Exclusivo</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <header class="header-color">
        <div class="container">
            <nav class="heading">
                <div class="heading__nav">
                    <ul class="heading__left">
                        <li><a href="main.php" class="heading__item"><img src="img/logo.png" alt="Логотип Exclusivo"></a></li>
                        <li><a href="about-us.php" class="heading__item ">О компании</a></li>
                        <li><a href="catalog.php" class="heading__item ">Каталог</a></li>
                    </ul>
                    <ul class="heading__right">
                        <li><a href="#" class="heading__item">Контакты</a></li>
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
        <div class="biglogo">
            <div class="container">
                <img src="img/biglogo.png" alt="Большой логотип Exclusivo" class="biglogo__logo">
            </div>
        </div>

        <section class="contacts">
            <div class="container">
                <h2 class="contacts__h2">Контакты</h2>
                <div class="contacts__row">
                    <img src="img/office.png" alt="Офис Exclusivo" class="contacts__adaptiv">
                    <div class="contacts__wrapper">
                        <div class="contacts__wrapper-tele">
                            <img src="img/tele-c.png" alt="Лого телефона" class="wrapper-tele__photo">
                            <p class="wrapper-tele__p">+7 (495) 561-78-90</p>
                        </div>

                        <div class="contacts__wrapper-email">
                            <img src="img/email-sec-c.png" alt="Лого электронной почты" class="wrapper-email__photo">
                            <p class="wrapper-email__p">exclusivo@bk.ru</p>
                        </div>

                        <div class="contacts__wrapper-web">
                            <img src="img/instagram.png" alt="Лого инстаграма">
                            <img src="img/whatsapp.png" alt="Лого ватсапа">
                            <img src="img/telegram.png" alt="Лого телеграмма">
                            <img src="img/vk.png" alt="Лого вконтакте">
                        </div>

                        <div class="contacts__wrapper-clock">
                            <img src="img/clock.png" alt="Лого часы работы" class="wrapper-clock__photo">
                            <p class="wrapper-clock__p">Ежедневно с 9:00 до 21:00</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="map">
            <div class="container">
                <h2 class="map__h2">Расположение офиса на карте</h2>
                <div class="map__google">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2226.9195358282277!2d37.586765275984746!3d55.734383650771356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54ba6a70f45e3%3A0xf836697e769c4549!2z0YPQuy4g0JvRjNCy0LAg0KLQvtC70YHRgtC-0LPQviwgMTYsINCc0L7RgdC60LLQsCwgMTE5MDIx!5e0!3m2!1sru!2sru!4v1686150658385!5m2!1sru!2sru"  style="border:0; border-radius: 15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map__adaptiv"></iframe>
                </div>
            </div>
        </section>

        <section class="questions">
            <div class="container">
                <h2 class="questions__h2">Есть вопросы? Свяжитесь с нами!</h2>

                <form class="questions__form" method="post" action="/php/create/create_message.php">
                    <textarea  id="9" name="textMessage" class="questions__text" placeholder="Текст сообщения" required></textarea>

                    <div class="questions__two">
                        <div class="questions__contacts">
                            <div class="questions__tele">
                                <input type="tel" id="10" name="telMessage" class="questions__tel"  placeholder="Телефон" required>
                                <img src="img/tele-sec-c.png" alt="Лого телефона">
                            </div>
                            
                            <div class="questions__line"></div>

                            <div class="questions__name">
                                <input type="text" id="11" name="nameMessage" class="questions__imya"  placeholder="Имя и Фамилия" required>
                                <img src="img/name-sec-c.png" alt="Лого аккаунт">
                            </div>

                            <div class="questions__line"></div>

                            <div class="questions__email">
                                <input type="email" id="12" name="emailMessage" class="questions__mail"  placeholder="Email" required>
                                <img src="img/email-third-c.png" alt="Лого почты">             
                            </div>

                            <div class="questions__line"></div>
                        </div>
                        <div class="questions__checkbox">
                            <input type="checkbox" name="yes" value="yes" id="13" class="custom-checkbox" required> 
                            <label for="13">Я принимаю условия пользовательского соглашения</label>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LeFHtcmAAAAALLxEJGLhzTqAKE87NrAIcvp11ZQ"></div>
                        <input type="submit" id="14"  class="questions__button" value="Отправить сообщение"> 
                    </div>
                </form>
                

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
                            <li><a href="catalog.php" class="footer__item">Каталог</a></li>
                            <li><a href="#" class="footer__item">Контакты</a></li>
                            <li><a href="account-main.php" class="footer__item">Личный кабинет</a></li>
                        </ul>
                    </div>
                    <div class="footer__end">
                        <img src="img/instagram.png" alt="инстаграм">
                        <img src="img/whatsapp.png" alt="ватсап">
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