<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=480">
    <title>Document</title>
    <link type="image/x-icon" href="favicon.ico" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400i,600i|PT+Sans+Caption:400,700|Roboto+Slab:700&amp;subset=cyrillic" rel="stylesheet">
    <script>
        if (screen.width <= 750) {
            document.location = "../mobile/" + document.location.search;
        }
    </script>
    <style>
        <?php include('css/head.css');
        ?>
    </style>
    <link rel="stylesheet" href="css/sass/style.css">

    <?php include('../track/head.php'); ?>
</head>

<body>
    <div id="maket"></div>
    <header>
        <div>
            <a href="" class="btn_menu_open"></a>
            <a href="" class="logo"></a>
            <a href="" class="login"></a>
            <div class="user">
                <img class="user_im" src="img/ava.png" alt="" width="57" height="57">
                <p class="user_n">Марина Хлебникова</p>
                <a href="" class="logout">Выйти</a>
            </div>
        </div>
    </header>
    <section class="sec1">
        <div>
            <h1>ДНК Бизнеса</h1>
            <span>Для предпринимателей и их бабушек</span>
            <p>Стираем границы между обучением
                <br>и практикой</p>
            <h2>Все решения по привлечению <br>и взаимодействию с<br> клиентом на одном сервисе</h2>
            <div class="vid">
                <div class="play"></div>
            </div>
            <h3>ДНК Атом</h3>
            <a href="" class="btn">Начать</a>
            <a href="" class="politic">Политика конфидицеальности</a>
        </div>
    </section>
    <section class="sec2">
        <div>
            <h2>Пошаговый сервис по <br>созданию потока клиентов <br>и взаимодействия с ними</h2>
            <p>Мы не только решим проблему
                <br>привлечения клиентов, но и
                <br> дадим тебе все инструменты для дальнейшего развития
                <br>твоего бизнеса</p>
            <div class="vid">
                <div class="play"></div>
            </div>
            <p>Не теряй время на видео,
                <br>нажимай на кнопку и
                <br>получи поток клиентов
                <br>уже сегодня!</p>
            <a href="" class="btn">Получить клиентов</a>
        </div>
    </section>
    <section class="sec3">
        <div>
            <h2>Твой сайт <br>уже готов!</h2>
            <h3>Осталось наполнить его информацией</h3>
            <div class="vid">
                <div class="play"></div>
            </div>
            <p>Напишите свой дескриптор</p>
            <textarea name="discr" placeholder="Введите текст"></textarea>
            <a href="" class="btn_next">Следующий шаг</a>
        </div>
    </section>
    <section class="sec4">
        <div>
            <div class="vid_offer">
                <h2>Самая важная часть вашего <br>сайта это оффер!</h2>
                <div class="vid">
                    <div class="play"></div>
                </div>
            </div>
            <div class="offer_top">
                <div class="block">
                    <div class="vid">
                        <div class="play"></div>
                    </div>
                    <textarea name="discr" placeholder="Что Вы продаете?"></textarea>
                </div>
                <div class="block">
                    <div class="vid">
                        <div class="play"></div>
                    </div>
                    <textarea name="discr" placeholder="Что Впокупает клиент?"></textarea>
                </div>
                <div class="block">
                    <div class="vid">
                        <div class="play"></div>
                    </div>
                    <textarea name="discr" placeholder="Что получает клиент?"></textarea>
                </div>
            </div>
            <div class="of_for_block">
                <h2>Как сформулировать <br>оффер?</h2>
                <div class="vid">
                    <div class="play"></div>
                </div>
                <p>Посмотри примеры 20 офферов, <br>которые дают конверсию <br>более 7,5%</p>
                <a href="" class="btn">Посмотреть примеры офферов</a>
            </div>
            <div class="write_offer">
                <h2>Напишите здесь свой <br>оффер !</h2>
                <div class="link">
                    <textarea name="discr" placeholder="Основа"></textarea>
                    <span>Не более 36 символов</span>
                </div>
                <div class="link">
                    <textarea name="discr" placeholder="Преимущество"></textarea>
                    <span>Не более 90 символов</span>
                </div>
            </div>
            <a href="" class="btn_next">Следующий шаг</a>
        </div>
    </section>
    <section class="sec5">
        <div>
            <h2>Введи данные, куда будут <br> приходить звонки и заявки</h2>
            <div class="block">
                <p>Телефон для заявок:</p>
                <div class="link">
                    <input type="text" placeholder="Введите номер с кодом">
                </div>
            </div>
            <div class="block">
                <p>Почта для заявок:</p>
                <div class="link">
                    <input type="text" placeholder="Введите Ваш e-mail для заявок">
                </div>
            </div>
            <div class="block">
                <p>Почта на сайте:</p>
                <div class="link">
                    <input type="text" placeholder="Введите Ваш e-mail на сайте">
                    <span>Если почта та же, что и для заявок оставьте поле пустым</span>
                </div>
            </div>
            <div class="block">
                <p>Адрес Вашей компании:</p>
                <div class="link">
                    <input type="text" placeholder="Введите город">
                </div>
            </div>
            <a href="" class="btn_next">Следующий шаг</a>
        </div>
    </section>
    <section class="sec6">
        <div>
            <h2>Регистрация почты</h2>
            <div class="vid">
                <div class="play"></div>
            </div>
            <div class="block">
                <a href="" class="gmail">Google почта</a>
                <a href="" class="yandex">Яндекс почта</a>
                <a href="" class="mail">Mail почта</a>
            </div>
            <p>Для продолжения работы необходимо <br>подтвердить электронный адрес, для этого <br>перейдите в свою почту и найдите письмо с <br>отправителем ДНК АТОМ.</p>
            <p>В тексте письма перейдите по ссылке <br> подтверждение и продолжите работу с <br>сервисом.</p>
        </div>
    </section>
    <section class="sec7">
        <div>
            <h2>Есть ли у вашей компании продающее видео?</h2>
            <div class="block">
                <a href="" class="btn">Есть видео</a>
                <a href="" class="btn">Нет видео</a>
            </div>
            <textarea name="discr" placeholder="Вставьте сюда ссылку на видео youtube"></textarea>
            <div class="block">
                <a href="" class="btn_url">Примеры продаюищх видео</a>
            </div>
            <div class="block">
                <div class="line"></div>
            </div>
            <h2>Есть ли у вашей компании логотип?</h2>
            <div class="block">
                <a href="" class="btn">Да, есть</a>
                <a href="" class="btn">увы, нет</a>
            </div>
            <p>Загрузите Ваш логотип в нужном формате</p>
            <div class="block">
                <div class="block">
                    <label for="">
                        <input type="file"> Загрузить логотип
                    </label>
                    <div class="vid">
                        <div class="play"></div>
                    </div>
                </div>
                <div class="block">
                    <span>Так он будет выглядеть:</span>
                    <div class="logo_img"></div>
                </div>
            </div>
            <a href="" class="btn_next">Следующий шаг</a>
        </div>
    </section>
    <section class="sec8">
        <div>
            <h2>Причина оставить заявку</h2>
            <div class="block">
                <div class="block">
                    <div class="vid">
                        <div class="play"></div>
                    </div>
                </div>
                <div class="block">
                    <textarea name="discr" placeholder="Введите причину, по которой вам будут оставлять заявки"></textarea>
                    <textarea name="discr" placeholder="Введите надпись на кнопке"></textarea>
                </div>
            </div>
            <h2>Какие данные вы хотите получить от клиента?</h2>
            <div class="block">
                <a href="" class="r_btn">Имя</a>
                <a href="" class="r_btn">Телефон</a>
                <a href="" class="r_btn active">e-mail</a>
            </div>
            <a href="" class="btn_next">Следующий шаг</a>
        </div>
    </section>
    <section class="sec9">
        <div>
            <h2>Осталось выбрать фото / видео фон для сайта вашей</h2>
            <div class="vid">
                <div class="play"></div>
            </div>
            <div class="block">
                <p>Ссылка на видео:</p>
                <textarea name="discr" placeholder="Вставьте сюда ссылку на видео youtube"></textarea>
            </div>
            <div class="block">
                <p>Загрузить фото:</p>
                <label for="">
                    <input type="file"> Загрузить
                </label>
            </div>
            <a href="" class="btn_next">Следующий шаг</a>
        </div>
    </section>
    <section class="sec10">
        <div>
            <img src="img/monitor.png" alt="" width="172" height="172">
            <h2>Настало время посмотреть сайт!</h2>
            <a href="" class="btn">Посмотреть сайт</a>
        </div>
    </section>
    <section class="sec11">
        <div class="laptop">
            <div class="site"></div>
        </div>
        <div>
            <h2>Отзывы пользователей DNK ATOM</h2>
            <div class="slider_w">
                <div class="slider">
                    <div class="slid">
                        <div class="block">
                            <div class="block">
                                <p>Сайт</p>
                                <span>www.site.com</span>
                            </div>
                            <div class="block">
                                <p>Конверсия</p>
                                <span>348</span>
                            </div>
                            <div class="block">
                                <p>Цена</p>
                                <span>29 000 руб.</span>
                            </div>
                        </div>
                        <div class="block">
                            <div class="vid">
                                <div class="play"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="" class="prev"></a>
                <a href="" class="next"></a>
            </div>
            <div class="block_url">
                <p>Ссылка на твой сайт:</p>
                <a href="" class="url_site">www.yoursite.com</a>
            </div>
            <div class="block_v">
                <div class="vid">
                    <div class="play"></div>
                </div>
                <p>Подключи сайт к своему домену, привяжи его к СРМ системе
                    <br>и настрой эффективную компанию на Яндекс Директ</p>
            </div>
            <h2>Ты сделаешь все это всего <br>за 1 час И уже сегодня получишь <br>первых клиентов!</h2>
            <div class="block">
                <div class="line"></div>
            </div>
            <h3>Открой доступ к продолжению пошагового <br>курса по привлечению клиентов в твой <br>бизнес всего за 179 руб. !</h3>
            <div class="block_b">
                <p>Бонусом ты получишь еще 15 крутых
                    <br>примеров продающих видео и офферов</p>
                <a href="" class="btn">Мне не нужны <br>клиенты</a>
                <a href="" class="btn">Мне нужны клиенты. <br>Продолжить за 179 руб.</a>
            </div>
        </div>
    </section>
    <section class="sec12">
        <div>
            <h2>Привязка сайта к вашему домену</h2>
            <div class="block">
                <a href="" class="btn">Я знаю как это делать</a>
                <a href="" class="btn">Есть домен, не знаю как привязать</a>
                <a href="" class="btn">Нет домена</a>
            </div>
            <p>Добавьте А запись: ХХХ.ХХ.Х.ХХ к вашему домену</p>
            <div class="block">
                <div class="vid">
                    <div class="play"></div>
                </div>
            </div>
            <a href="" class="btn_next">Следующий шаг</a>
        </div>
    </section>
    <section class="sec13">
        <div>
            <h2>Привязка CRM системы</h2>
            <div class="block">
                <div class="vid">
                    <div class="play"></div>
                </div>
            </div>
            <a href="" class="btn_next">Привязать CRM систему</a>
        </div>
    </section>
    <section class="sec14">
        <div>
            <h2>Ваша CRM система уже привязана !</h2>
            <div class="block">
                <div class="vid">
                    <div class="play"></div>
                </div>
                <p>С этого момента вам открыт на 1 неделю доступ в CRM систему в
                    <br>вашем личном кабинете</p>
            </div>
            <a href="" class="btn_next">Настроить бизнес процессы</a>
        </div>
    </section>

    <div id="hidden-box">
        <div class="popap">
            <div class="close_p"></div>
            <p>Данное поле заполнено
                <br>некорректно!</p>
        </div>
        <div class="pop" id="login">
            <div>
                <div class="close"></div>
                <div class="block">
                    <h2>Войти</h2>
                    <form action="">
                        <input type="text" name="mail" placeholder="Введите Ваш e-mail">
                        <input type="text" name="password" placeholder="Введите пароль">
                        <input class="sub" type="submit" value="Войти" placeholder="Войти">
                    </form>
                </div>
            </div>
        </div>
        <div class="pop" id="menu">
            <div>
                <div class="close"></div>
                <div class="block">
                    <a href="" class="menu_a">Главная</a>
                </div>
                <div class="block">
                    <a href="" class="menu_a">Пошаговый сервис</a>
                </div>
                <div class="block">
                    <a href="" class="menu_a">Твой сайт уже готов</a>
                </div>
                <div class="block">
                    <a href="" class="menu_a">Написать свой оффер</a>
                </div>
                <div class="block">
                    <a href="" class="menu_a active">Введите данные куда будут приходить звонки</a>
                </div>
                <div class="block">
                    <a href="" class="menu_a">Есть ли у Вашей компании видео?</a>
                </div>
                <div class="block">
                    <a href="" class="menu_a">Причина оставить заявку</a>
                </div>
                <div class="block">
                    <a href="" class="menu_a">Поставить фото/видео фон</a>
                </div>
                <div class="block">
                    <a href="" class="menu_a">Твой сайт уже готов</a>
                </div>
                <div class="block">
                    <a href="" class="menu_a">Отзывы пользователей DNK Atom</a>
                </div>
                <div class="block">
                    <a href="" class="menu_a">Привязка сайта к Вашему домену</a>
                </div>
            </div>
        </div>
    </div>

    <?php include('../track/body.php'); ?>
</body>

</html>