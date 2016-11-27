<!DOCTYPE html>
<html lang="ru">
    <head>
        <script src="https://localhost:4444/livereload.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=1200">
        <title>ДНК</title> 
        <!-- <link type="image/x-icon" href="favicon.ico" rel="shortcut icon"> -->
        <!-- <script>
            if (screen.width <= 750) {
                document.location = "../mobile/" + document.location.search;
            }
        </script> -->
        <style>
            <?php include('css/head.css');
            ?>
        </style>
        <link type="text/css" href="css/libs.css" rel="stylesheet">
        <link type="text/css" href="css/style.css" rel="stylesheet">
        <link type="text/css" href="css/media.css" rel="stylesheet">
        <link type="text/css" href="css/scripts.css" rel="stylesheet">
        <?php include('../track/head.php'); ?>
    </head>
    <body>
        <!-- <div id="maket"></div> -->
        <div class="header">
            <a class="btn_menu_open" href="#"></a>
            <a class="logo" href="#"></a>
            <a class="login" href="#"></a>
            <div class="user">
                <p class="user_n">Марина Хлебникова</p>
                <a class="logout" href="#">Выйти</a>
            </div>
        </div>
        <div id="slide-viewport">
            <section class="sec1 active_ste_slide" data-step="1">
                <div>
                    <h1>ДНК Бизнеса</h1>
                    <span>Для предпринимателей и их бабушек</span>
                    <p>Стираем границы между обучением и практикой</p>
                    <h2>Все решения по привлечению и<br> взаимодействию с клиентом на<br> одном сервисе</h2>
                    <div class="block">
                        <div class="vid video_btn" data-video="w6K0iDsu0TM">
                            <div class="play"></div>
                        </div>
                        <h3>ДНК Атом</h3>
                    </div>
                    <a class="btn next-step" href="#">Начать</a>
                    <a class="politic" href="#">Политика<br> конфидицеальности</a>
                </div>
            </section>
            <section class="sec2" data-step="2">
                <div>
                    <h2>Пошаговый сервис по созданию потока <br>клиентов и взаимодействия с ними</h2>
                    <p>Мы не только решим проблему привлечения клиентов,
                        <br>но и дадим тебе все инструменты для дальнейшего
                        <br>развития твоего бизнеса</p>
                    <div class="block">
                        <div class="vid video_btn" data-video="96fg9N00QX0">
                            <div class="play"></div>
                        </div>
                    </div>
                    <div class="block">
                        <p>Не теряй время на видео,
                            <br>нажимай на кнопку и
                            <br>получи поток клиентов
                            <br>уже сегодня!</p>
                        <a class="btn next-step" href="#">Получить клиентов</a>
                    </div>
                </div>
            </section>
            <section class="sec3" data-step="3">
                <div>
                    <h2>Твой сайт уже готов!</h2>
                    <h3>Осталось наполнить его информацией</h3>
                    <p>Напишите свой дескриптор</p>
                    <div class="block">
                        <div class="vid video_btn" data-video="bYT2pmXPOkI">
                            <div class="play"></div>
                        </div>
                        <textarea name="descriptor" data-input-type="descriptor" placeholder="Введите текст"></textarea>
                        <span>Не более 70 символов</span>
                    </div>
                    <a class="btn_next next-step" href="#">Следующий шаг</a>
                </div>
            </section>
            <section class="sec4" data-step="4">
                <div>
                    <div class="vid_offer">
                        <h2>Самая важная часть вашего сайта это оффер!</h2>
                        <div class="vid video_btn" data-video="lF_C7BvAf_A">
                            <div class="play"></div>
                        </div>
                    </div>
                        <div class="offer_top">
                            <div class="block">
                                <div class="vid video_btn" data-video="tlxs_mG-8nA">
                                    <div class="play"></div>
                                </div>
                                <textarea name="what_sell" data-input-type="what_sell" placeholder="Что Вы продаете?"></textarea>
                            </div>
                            <div class="block">
                                <div class="vid video_btn" data-video="tlxs_mG-8nA">
                                    <div class="play"></div>
                                </div>
                                <textarea name="what_buy" data-input-type="what_buy" placeholder="Что покупает клиент?"></textarea>
                            </div>
                            <div class="block">
                                <div class="vid video_btn" data-video="tlxs_mG-8nA">
                                    <div class="play"></div>
                                </div>
                                <textarea name="what_take" data-input-type="what_take" placeholder="Что получает клиент?"></textarea>
                            </div>
                        </div>
                        <div class="of_for_block">
                            <h2>Как сформулировать оффер?</h2>
                            <div class="block">
                                <div class="vid video_btn" data-video="lF_C7BvAf_A">
                                    <div class="play"></div>
                                </div>
                            </div>
                            <div class="block">
                                <p>Посмотри примеры 20 офферов, которые
                                    <br>дают конверсию более 7,5%</p>
                                <a class="btn" id="offer_pop" href="#">Посмотреть примеры офферов</a>
                            </div>
                        </div>
                        <div class="write_offer">
                            <h2>Напишите здесь свой оффер !</h2>
                            <div class="link">
                                <textarea name="offer_h1" data-input-type="offer_h1" placeholder="Основа"></textarea>
                                <span>Не более 80 символов</span>
                            </div>
                            <div class="link">
                                <textarea name="offer_h2" data-input-type="offer_h2" placeholder="Преимущество"></textarea>
                                <span>Не более 70 символов</span>
                            </div>
                            <a class="btn_next next-step" href="#">Следующий шаг</a>
                        </div>
                    </div>
            </section>
            <section class="sec5" data-step="5">
                <div>
                    <h2>Введи данные, куда будут приходить <br>звонки и заявки</h2>
                    <div class="block">
                        <p>Телефон для заявок:</p>
                        <div class="link">
                            <div class="input">
                                <span class="placeholder_p">Введите номер с кодом</span>
                                <span>+</span>
                                <input class="iph1 valid" name="phone_p1" data-input-type="ph1" type="text" placeholder="_">
                                <span>(</span>
                                <input class="iph2 valid" name="phone_p2" data-input-type="ph2" type="text" placeholder="___">
                                <span>)</span>
                                <input class="iph3 valid" name="phone_p3" data-input-type="ph3" type="text" placeholder="___-__-__">
                                <input class="hid-valid" name="phone" type="hidden">
                            </div>
                        </div>
                    </div>
                    <div class="block">
                        <p>Почта для заявок:</p>
                        <div class="link">
                            <input class="valid" name="act_email" data-input-type="act_email" type="email" placeholder="Введите Ваш e-mail для заявок">
                        </div>
                    </div>
                    <div class="block">
                        <p>Почта на сайте:</p>
                        <div class="link">
                            <input class="valid" name="page_email" data-input-type="page_email" type="email" placeholder="Введите Ваш e-mail на сайте">
                            <span>Если почта та же, что и для заявок оставьте поле пустым</span>
                        </div>
                    </div>
                    <div class="block">
                        <p>Адрес Вашей компании:</p>
                        <div class="link">
                            <input class="valid" name="page_addr" data-input-type="page_addr" type="text" placeholder="Индекс, Город, Адрес">
                        </div>
                    </div>
                    <a class="btn_next next-step" href="#">Следующий шаг</a>
                </div>
            </section>
            <section class="sec6" data-step="6">
                <div>
                    <h2>Регистрация почты</h2>
                    <div class="vid video_btn" data-video="lF_C7BvAf_A">
                        <div class="play"></div>
                    </div>
                    <div class="wrap">
                        <div class="block absolute">
                            <a data-event="register" href="#">У меня нет аккаунта</a>
                            <a data-event="login" href="#">У меня есть аккаунт</a>
                        </div>
                        <div class="block-after">
                            <div class="block">
                                <a class="gmail" href="https://mail.google.com/mail/u/0/#inbox" target="_blank">Google почта</a>
                                <a class="yandex" href="https://mail.yandex.ua/" target="_blank">Яндекс почта</a>
                                <a class="mail" href="https://e.mail.ru/messages/inbox/" target="_blank">Mail почта</a>
                            </div>
                            <p>Для продолжения работы необходимо подтвердить
                                <br>электронный адрес, для этого перейдите в свою почту и
                                <br>найдите письмо с отправителем ДНК АТОМ.</p>
                            <p>В тексте письма перейдите по ссылке подтверждение и
                                <br>продолжите работу с сервисом.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sec7" data-step="7">
                <div>
                    <h2>Есть ли у вашей компании продающее видео?</h2>
                    <div class="block">
                        <a class="btn video_trigger" data-event="show" href="#">Есть видео</a>
                        <a class="btn video_trigger" data-event="hide" href="#">Нет видео</a>
                    </div>
                    <input type="text" name="content_video" id="content_video" placeholder="Вставьте сюда ссылку на видео youtube" class="valid" data-input-type="video">
                    <div class="block">
                        <a class="btn_url" id="content_video_pop" href="#">Примеры продаюищх видео</a>
                    </div>
                    <div class="block">
                        <div class="line"></div>
                    </div>
                    <h2>Есть ли у вашей компании логотип?</h2>
                    <div class="block">
                        <a class="btn logo_trigger" data-event="show" href="#">Да, есть</a>
                        <a class="btn logo_trigger" data-event="hide" href="#">увы, нет</a>
                    </div>
                    <div class="logo_part_show">
                        <p>Загрузите Ваш логотип в нужном формате</p>
                        <div class="block">
                            <form class="block" enctype="multipart/form-data" action="#">
                                <label for="upfile1">
                                    Загрузить логотип
                                </label>
                                <input id="upfile1" type="file" name="file">               
                                <div class="vid video_btn" data-video="lF_C7BvAf_A">
                                    <div class="play"></div>
                                </div>
                            </form>      
                            <input id="logo_img" name="logo_img" class="valid" data-input-type="logo_img" type="hidden">               
                            <div class="block">
                                <span>Так он будет выглядеть:</span>
                                <div class="logo_img"></div>
                            </div>
                        </div>
                    </div>
                    <div class="logo_part_hide">
                        <p>Сгенерируйте себе логотип за 5 минут</p>
                        <div class="vid video_btn" data-video="lF_C7BvAf_A">
                            <div class="play"></div>
                        </div>
                    </div>
                        <a class="btn_next next-step" href="#">Следующий шаг</a>
                </div>
            </section>
            <section class="sec8" data-step="8">
                <div>
                    <h2>Причина оставить заявку</h2>
                    <div class="block">
                        <div class="block">
                            <div class="vid video_btn" data-video="lF_C7BvAf_A">
                                <div class="play"></div>
                            </div>
                        </div>
                        <div class="block">
                            <textarea id="form_head" name="form_head" class="valid" data-input-type="form_head" placeholder="Введите причину, по которой вам будут оставлять заявки"></textarea>
                            <textarea id="form_button" name="form_button" class="valid" data-input-type="form_button" placeholder="Введите надпись на кнопке"></textarea>
                        </div>
                        
                    </div> 
                        <h2>Какие данные вы хотите получить от клиента?</h2>
                        <div class="block">
                            <a class="r_btn active perm" href="#">Имя</a>
                            <a class="r_btn active perm" href="#">Телефон</a>
                            <a class="r_btn check" data-check="email" href="#">e-mail</a>
                            <div class="clear"></div>
                            <a class="r_btn check" data-check="custom" href="#">Текстовое поле</a>
                            <span class="inputs">
                                <input type="text" id="form_custom_name" name="form_custom_name" data-input-type="input_par_name" value="0" class="valid" placeholder="Название поля">
                                <input type="text" id="form_custom_plac" name="form_custom_plac" class="valid" data-input-type="input_par_plac" value="0" placeholder="Надпись на поле">
                            </span>
                        </div>
                        <input type="hidden" name="input_count" id="input_count" value="2" class="valid" data-input-type="input_count">
                        <input type="hidden" name="email" id="form_input_email" value="0">
                        <input type="hidden" name="custom" id="form_input_custom" value="0">
                        <a class="btn_next next-step" href="#">Следующий шаг</a>
                </div>
            </section>
            <section class="sec9" data-step="9">
                <div>
                    <h2>Осталось выбрать фото / видео фон для сайта вашей</h2>
                    <div class="vid video_btn" data-video="lF_C7BvAf_A">
                        <div class="play"></div>
                    </div>
                    <form class="block" enctype="multipart/form-data" action="#">
                            <p>Загрузить фото:</p>
                            <label for="upfile2">
                                Загрузить
                            </label>
                            <input id="upfile2" type="file" name="file">
                    </form>
                    <div class="block">
                        <p>Ссылка на видео:</p>
                        <input class="valid" type="text" name="bg_video" id="bg_video" data-input-type="bg_video" placeholder="Вставьте сюда ссылку на видео youtube">
                    </div>
                    <input type="hidden" name="bg_img_d" id="bg_img_d"  class="valid" data-input-type="bg_img_d" value="">
                    <input type="hidden" name="bg_img_m" id="bg_img_m"  value="">
                    <a class="btn_next send-step" href="#">Следующий шаг</a>
                </div>
            </section>
            <section class="sec10" data-step="10">
                <div>
                    <img src="img/monitor.png" alt height="172" width="172">
                    <h2>Настало время посмотреть сайт!</h2>
                    <a class="btn next-step" href="#">Посмотреть сайт</a>
                </div>
            </section>
            <section class="sec11" data-step="11">
                <div class="laptop">
                    <div class="site"></div>
                </div>
                <div>
                    <h2>Отзывы пользователей DNK ATOM</h2>
                    <div class="slider_w">
                        <div class="slider init_slider">
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
                                    <div class="vid video_btn" data-video="lF_C7BvAf_A">
                                        <div class="play"></div>
                                    </div>
                                </div>
                            </div>
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
                                    <div class="vid video_btn" data-video="lF_C7BvAf_A">
                                        <div class="play"></div>
                                    </div>
                                </div>
                            </div>
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
                                    <div class="vid video_btn" data-video="lF_C7BvAf_A">
                                        <div class="play"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <a class="prev" href="#"></a> -->
                        <!-- <a class="next" href="#"></a> -->
                    </div>
                    <div class="block_url">
                        <p>Ссылка на твой сайт:</p>
                        <a class="url_site" href="#" target="_blank">www.yoursite.com</a>
                    </div>
                    <div class="block_v">
                        <div class="vid video_btn" data-video="lF_C7BvAf_A">
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
                        <a class="btn btn_hover" href="#">Мне не нужны <br>клиенты</a>
                        <a class="btn" href="#">Мне нужны клиенты. <br>Продолжить за 179 руб.</a>
                    </div>
                </div>
            </section>
            <section class="sec12" data-step="12">
                <div>
                    <h2>Привязка сайта к вашему домену</h2>
                    <!-- <div class="block">
                        <a class="btn" href="#">Я знаю как это делать</a>
                        <a class="btn" href="#">Есть домен, не знаю как привязать</a>
                        <a class="btn" href="#">Нет домена</a>
                    </div>
                    <p>Добавьте А запись: ХХХ.ХХ.Х.ХХ к вашему домену</p> -->
                    <input type="text" name="domian" value="" placeholder="">
                    <div class="block">
                        <div class="vid video_btn" data-video="lF_C7BvAf_A">
                            <div class="play"></div>
                        </div>
                    </div>
                    <a class="btn_next next-step" href="#">Следующий шаг</a>
                </div>
            </section>
            <section class="sec13" data-step="13">
                <div>
                    <h2>Привязка CRM системы</h2>
                    <div class="block">
                        <div class="vid video_btn" data-video="lF_C7BvAf_A">
                            <div class="play"></div>
                        </div>
                    </div>
                    <a class="btn_next next-step" href="#">Привязать CRM систему</a>
                </div>
            </section>
            <section class="sec14" data-step="14">
                <div>
                    <h2>Ваша CRM система уже привязана !</h2>
                    <div class="block">
                        <div class="vid video_btn" data-video="lF_C7BvAf_A">
                            <div class="play"></div>
                        </div>
                        <p>С этого момента вам открыт на 1 неделю доступ в CRM систему в
                            <br>вашем личном кабинете</p>
                    </div>
                    <a class="btn_next next-step" href="#">Настроить бизнес процессы</a>
                </div>
            </section>
            <section class="sec15" data-step="15">
                <div>
                    <h2>Настраиваем бизнес процессы</h2>
                    <div class="vid video_btn" data-video="lF_C7BvAf_A">
                        <div class="play"></div>
                    </div>
                    <div class="block">
                        <div class="etap-wrap">
                            <div class="etap">
                                <p>Первый этап</p>
                                <a class="btn" href="#" contenteditable="true">Обработать заявку</a>
                                <span class="span"></span>
                            </div>
                            <div class="etap">
                                <p>Второй этап</p>
                                <a class="btn" href="#" contenteditable="true">Скинуть предложение</a>
                                <span class="span"></span>
                            </div>
                            <div class="etap">
                                <p>Третий этап</p>
                                <a class="btn" href="#">Получить оплату</a>
                                <span class="span"></span>
                            </div>
                        </div>
                        <a class="plus" href="#">Добавить следующий этап</a>
                    </div>
                    <div class="block">
                        <a class="btn_next" href="#">Перейти к CRM</a>
                    </div>
                    <div class="block">
                        <a class="btn_next" href="#">Настроить Яндекс Директ</a>
                    </div>
                </div>
            </section>
            <section class="sec16" data-step="16">
                <div>
                    <h2>Настройка Яндекс Директа <br>за 30 минут</h2>
                    <h3>Посмотрите вводное видео</h3>
                    <div class="vid video_btn" data-video="lF_C7BvAf_A">
                        <div class="play"></div>
                    </div>
                    <div class="block">
                        <a class="btn_next" href="#">Приступить к настройке</a>
                    </div>
                </div>
            </section>
            <section class="sec17" data-step="17">
                <div>
                    <h2>Собираем список ключевых <br>запросов</h2>
                    <h3>№1 Железобетонные запросы</h3>
                    <div class="vid video_btn" data-video="lF_C7BvAf_A">
                        <div class="play"></div>
                    </div>
                    <div class="block">
                        <div class="zapros">
                            <p>Запрос №1</p>
                            <textarea name="discr" data-input-type="descriptor" placeholder="Введите текст"></textarea>
                        </div>
                        <div class="zapros">
                            <p>Запрос №2</p>
                            <textarea name="discr" data-input-type="descriptor" placeholder="Введите текст"></textarea>
                        </div>
                        <div class="zapros">
                            <p>Запрос №3</p>
                            <textarea name="discr" data-input-type="descriptor" placeholder="Введите текст"></textarea>
                        </div>
                    </div>
                    <div class="block">
                        <a class="btn plus_z" href="#">Добавить запрос</a>
                    </div>
                    <div class="block">
                        <div class="line"></div>
                    </div>
                    <h3>№2 Запросы по целевой аудитории</h3>
                    <div class="vid video_btn" data-video="lF_C7BvAf_A">
                        <div class="play"></div>
                    </div>
                    <div class="block">
                        <a class="btn_logic" href="#">Логика №1</a>
                        <a class="btn_logic" href="#">Логика №2</a>
                        <a class="btn_logic" href="#">Логика №3</a>
                        <a class="btn_logic plus" href="#">Добавить логику</a>
                        <div class="block_text">
                            <textarea name="discr" data-input-type="descriptor" placeholder="Введите текст"></textarea>
                            <textarea name="discr" data-input-type="descriptor" placeholder="Введите текст"></textarea>
                        </div>
                    </div>
                    <a class="btn_next" href="#">Оформить объявление</a>
                </div>
            </section>
            <section class="sec18" data-step="18">
                <div>
                    <h2>Как написать заголовок объявления</h2>
                    <div class="vid video_btn" data-video="lF_C7BvAf_A">
                        <div class="play"></div>
                    </div>
                    <div class="block">
                        <p>Напишите здесь заголовок вашего объявления</p>
                        <div class="link">
                            <textarea name="discr" data-input-type="descriptor" placeholder="Введите текст"></textarea>
                            <span>Не более 33 символов</span>
                        </div>
                    </div>
                    <h2>Как написать текст объявления?</h2>
                    <div class="vid video_btn" data-video="lF_C7BvAf_A">
                        <div class="play"></div>
                    </div>
                    <div class="block">
                        <p>Напишите здесь заголовок вашего объявления</p>
                        <div class="link">
                            <textarea name="discr" data-input-type="descriptor" placeholder="Введите текст"></textarea>
                            <span>Не более 33 символов</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sec19" data-step="19">
                <div>
                    <h2>Последний рывок!</h2>
                    <div class="vid video_btn" data-video="lF_C7BvAf_A">
                        <div class="play"></div>
                    </div>
                    <div class="block">
                        <a class="btn down" href="#">Скачать мою кампанию</a>
                    </div>
                    <div class="block">
                        <p>Login:</p>
                        <span>dnkatom119@yandex.ru</span>
                        <p>Password:</p>
                        <span>fxlsdfsf4tw4t2f428</span>
                    </div>
                    <div class="vid video_btn" data-video="lF_C7BvAf_A">
                        <div class="play"></div>
                    </div>
                    <h3>Загрузка рекламной кампании <br>в Яндекс</h3>
                    <div class="vid video_btn" data-video="lF_C7BvAf_A">
                        <div class="play"></div>
                    </div>
                    <h3>Настройка рекламной кампании</h3>
                    <div class="vid video_btn" data-video="lF_C7BvAf_A">
                        <div class="play"></div>
                    </div>
                    <h3>Запуск рекламы!</h3>
                    <div class="vid video_btn" data-video="lF_C7BvAf_A">
                        <div class="play"></div>
                    </div>
                    <div class="block">
                        <a class="btn_next" href="#">Пополнить баланс</a>
                    </div>
                </div>
            </section>
            <section class="sec20" data-step="20">
                <div>
                    <h2>Поздравляем!</h2>
                    <h3>Надеемся вы сделали все правильно и уже сегодня <br>вы получите первых клиентов !</h3>
                    <div class="vid video_btn" data-video="lF_C7BvAf_A">
                        <div class="play"></div>
                    </div>
                    <p>Вы можете контролировать CRM систему и вносить <br>изменения на своем сайте в личном кабинете !</p>
                    <div class="block">
                        <a class="btn_next" href="#">Перейти в личный кабинет</a>
                    </div>
                </div>
            </section>
            </div>
            <div id="hidden-box">
                <div class="popap" id="validation_popup">
                    <div class="close_p"></div>
                    <p>
                        <span></span>
                    </p>
                </div>
                <div class="conf-pop">
                    <div class="close close_p">
                    </div>
                    <p>Данное соглашение об обработке персональных данных разработано в соответствии с законодательством Российской Федерации. Все лица заполнившие сведения, составляющие персональные данные на данном сайте, а также разместившие иную информацию обозначенными действиями подтверждают свое согласие на обработку персональных данных и их передачу оператору обработки персональных данных. Под персональными данными Гражданина понимается нижеуказанная информация: общая информация; посетители сайта направляют свои персональные данные. Гражданин, принимая настоящее Соглашение, выражают свою заинтересованность и полное согласие, что обработка их персональных данных может включать в себя следующие действия: сбор, систематизацию, накопление, хранение, уточнение (обновление, изменение), использование, уничтожение. Гражданин гарантирует: информация, им предоставленная, является полной, точной и достоверной; при предоставлении информации не нарушается действующее законодательство Российской Федерации, законные права и интересы третьих лиц; вся предоставленная информация заполнена Гражданина в отношении себя лично.</p>
                </div>
                <div class="offer-pop popap">
                    <div class="close close_p">
                    </div>
                    <ul class="init_slider">
                        <li>
                            <p>Товарищи! дальнейшее развитие различных форм деятельности требуют от нас анализа</p>
                            <span>Товарищи! дальнейшее развитие различных форм деятельности требуют от н</span>
                        </li>
                        <li>
                            <p>Товарищи! дальнейшее развитие различных форм деятельности требуют от нас анализа</p>
                            <span>Товарищи! дальнейшее развитие различных форм деятельности требуют от н</span>
                        </li>
                        <li>
                            <p>Товарищи! дальнейшее развитие различных форм деятельности требуют от нас анализа</p>
                            <span>Товарищи! дальнейшее развитие различных форм деятельности требуют от н</span>
                        </li>
                    </ul>
                </div>
                <div class="content-video-pop popap">
                    <div class="close close_p">
                    </div>
                    <ul class="init_slider">
                        <li>
                            <div class="vid video_btn" data-video="w6K0iDsu0TM">
                                <div class="play"></div>
                            </div>
                            <p>Заголовок для продающего видео</p>
                        </li>
                        <li>
                            <div class="vid video_btn" data-video="w6K0iDsu0TM">
                                <div class="play"></div>
                            </div>
                            <p>Заголовок для продающего видео</p>
                        </li>
                        <li>
                            <div class="vid video_btn" data-video="w6K0iDsu0TM">
                                <div class="play"></div>
                            </div>
                            <p>Заголовок для продающего видео</p>
                        </li>
                    </ul>
                </div>
                <div class="not-allowed">
                    <div class="close close_p">
                    </div>
                    <p>Вы еще не дошли до этого этапа</p>
                </div>
            </div>
            <div class="pop" id="menu">
                <div class="close"></div>
                <div>
                    <div class="block">
                        <a class="menu_a allowed active" data-step="1" href="#">Главная</a>
                    </div>
                    <div class="block">
                        <a class="menu_a" data-step="2" href="#">Пошаговый сервис</a>
                    </div>
                    <div class="block">
                        <a class="menu_a" data-step="3" href="#">Твой сайт уже готов</a>
                    </div>
                    <div class="block">
                        <a class="menu_a" data-step="4" href="#">Написать свой оффер</a>
                    </div>
                    <div class="block">
                        <a class="menu_a" data-step="5" href="#">Введите данные куда будут приходить заявки</a>
                    </div>
                    <div class="block">
                        <a class="menu_a" data-step="6" href="#">Есть ли у Вашей компании видео?</a>
                    </div>
                    <div class="block">
                        <a class="menu_a" data-step="7" href="#">Причина оставить заявку</a>
                    </div>
                    <div class="block">
                        <a class="menu_a" data-step="8" href="#">Поставить фото/видео фон</a>
                    </div>
                    <div class="block">
                        <a class="menu_a" data-step="9" href="#">Твой сайт уже готов</a>
                    </div>
                    <div class="block">
                        <a class="menu_a" data-step="10" href="#">Отзывы пользователей DNK Atom</a>
                    </div>
                    <div class="block">
                        <a class="menu_a" data-step="11" href="#">Привязка сайта к Вашему домену</a>
                    </div>
                </div>
            </div>
            <div class="pop" id="login">
            <div class="close"></div>
            <div class="div">
                <div class="block">
                    <h2>Войти</h2>
                    <form action="#" class="login" data-event="login_to_send">
                        <input name="login" type="text" class="valid" placeholder="Введите Ваш e-mail" data-input-type="textarea">
                        <input name="password" type="password" class="valid" placeholder="Введите пароль" data-input-type="pass">
                        <input class="sub" type="submit" value="Войти">
                    </form>
                </div>
            </div>
        </div>

            <div class="back_btn">
                назад
            </div>
            <input type="hidden" name="userKey" id="userKey" value="">
            <input type="hidden" name="pageId" id="pageId" value="">
            <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
            <script src="js/init.js"></script>
            <?php include('../track/body.php'); ?>
    </body>
</html>