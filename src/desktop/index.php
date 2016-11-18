<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=1200">
        <title>ДНК</title>
        <!-- <link type="image/x-icon" href="favicon.ico" rel="shortcut icon"> -->
        <script>
            if (screen.width <= 750) {
                document.location = "../mobile/" + document.location.search;
            }
        </script>
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
        <div id="maket"></div>
        <div class="header">
            <a class="btn_menu_open" href="#"></a>
            <a class="logo" href="#"></a>
            <a class="login" href="#"></a>
            <div class="user">
                <img class="user_im" src="img/ava.png" alt height="57" width="57">
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
                        <textarea name="discr" placeholder="Введите текст" data-input-type="descriptor"></textarea>
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
                            <textarea name="what_sell" placeholder="Что Вы продаете?" data-input-type="what_sell"></textarea>
                        </div>
                        <div class="block">
                            <div class="vid video_btn" data-video="tlxs_mG-8nA">
                                <div class="play"></div>
                            </div>
                            <textarea name="what_buy" placeholder="Что покупает клиент?" data-input-type="what_buy"></textarea>
                        </div>
                        <div class="block">
                            <div class="vid video_btn" data-video="tlxs_mG-8nA">
                                <div class="play"></div>
                            </div>
                            <textarea name="what_take" placeholder="Что получает клиент?" data-input-type="what_take"></textarea>
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
                            <a class="btn" href="#">Посмотреть примеры офферов</a>
                        </div>
                    </div>
                    <div class="write_offer">
                        <h2>Напишите здесь свой оффер !</h2>
                        <div class="link">
                            <textarea name="offer_h1" placeholder="Основа" data-input-type="offer_h1"></textarea>
                            <span>Не более 80 символов</span>
                        </div>
                        <div class="link">
                            <textarea name="offer_h2" placeholder="Преимущество" data-input-type="offer_h2"></textarea>
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
                                <input type="text" class="iph1" name="phone1" placeholder="_">
                                <span>(</span>
                                <input type="text" class="iph2" name="phone2" placeholder="___">
                                <span>)</span>
                                <input type="text" class="iph3" name="phone3" placeholder="___-__-__">
                                
                            </div>
                        </div>
                    </div>
                    <div class="block">
                        <p>Почта для заявок:</p>
                        <div class="link">
                            <input type="text" name="act_email" placeholder="Введите Ваш e-mail для заявок">
                        </div>
                    </div>
                    <div class="block">
                        <p>Почта на сайте:</p>
                        <div class="link">
                            <input type="text" name="page_email" placeholder="Введите Ваш e-mail на сайте">
                            <span>Если почта та же, что и для заявок оставьте поле пустым</span>
                        </div>
                    </div>
                    <div class="block">
                        <p>Адрес Вашей компании:</p>
                        <div class="link">
                            <input type="text" name="page_addr" placeholder="Введите город">
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
                    <div class="block">
                        <a class="gmail" href="#">Google почта</a>
                        <a class="yandex" href="#">Яндекс почта</a>
                        <a class="mail" href="#">Mail почта</a>
                    </div>
                    <p>Для продолжения работы необходимо подтвердить
                        <br>электронный адрес, для этого перейдите в свою почту и
                        <br>найдите письмо с отправителем ДНК АТОМ.</p>
                    <p>В тексте письма перейдите по ссылке подтверждение и
                        <br>продолжите работу с сервисом.</p>
                </div>
            </section>
            <section class="sec7" data-step="7">
                <div>
                    <h2>Есть ли у вашей компании продающее видео?</h2>
                    <div class="block">
                        <a class="btn" href="#">Есть видео</a>
                        <a class="btn" href="#">Нет видео</a>
                    </div>
                    <textarea name="discr" placeholder="Вставьте сюда ссылку на видео youtube"></textarea>
                    <div class="block">
                        <a class="btn_url" href="#">Примеры продаюищх видео</a>
                    </div>
                    <div class="block">
                        <div class="line"></div>
                    </div>
                    <h2>Есть ли у вашей компании логотип?</h2>
                    <div class="block">
                        <a class="btn" href="#">Да, есть</a>
                        <a class="btn" href="#">увы, нет</a>
                    </div>
                    <p>Загрузите Ваш логотип в нужном формате</p>
                    <div class="block">
                        <div class="block">
                            <label for="upfile1">
                                 Загрузить логотип
                            </label>
                            <input type="file" id="upfile1">
                            <div class="vid video_btn" data-video="lF_C7BvAf_A">
                                <div class="play"></div>
                            </div>
                        </div>
                        <div class="block">
                            <span>Так он будет выглядеть:</span>
                            <div class="logo_img"></div>
                        </div>
                    </div>
                    <a class="btn_next" href="#">Следующий шаг</a>
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
                            <textarea name="discr" placeholder="Введите причину, по которой вам будут оставлять заявки"></textarea>
                            <textarea name="discr" placeholder="Введите надпись на кнопке"></textarea>
                        </div>
                    </div>
                    <h2>Какие данные вы хотите получить от клиента?</h2>
                    <div class="block">
                        <a class="r_btn" href="#">Имя</a>
                        <a class="r_btn" href="#">Телефон</a>
                        <a class="r_btn active" href="#">e-mail</a>
                    </div>
                    <a class="btn_next" href="#">Следующий шаг</a>
                </div>
            </section>
            <section class="sec9" data-step="9">
                <div>
                    <h2>Осталось выбрать фото / видео фон для сайта вашей</h2>
                    <div class="vid video_btn" data-video="lF_C7BvAf_A">
                        <div class="play"></div>
                    </div>
                    <div class="block">
                        <p>Ссылка на видео:</p>
                        <textarea name="discr" placeholder="Вставьте сюда ссылку на видео youtube"></textarea>
                    </div>
                    <div class="block">
                        <p>Загрузить фото:</p>
                        <label for="upfile2">
                            Загрузить
                        </label>
                        <input type="file" id="upfile2"> 
                    </div>
                    <a class="btn_next" href="#">Следующий шаг</a>
                </div>
            </section>
            <section class="sec10" data-step="10">
                <div>
                    <img src="img/monitor.png" alt height="172" width="172">
                    <h2>Настало время посмотреть сайт!</h2>
                    <a class="btn" href="#">Посмотреть сайт</a>
                </div>
            </section>
            <section class="sec11" data-step="11">
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
                                    <div class="vid video_btn" data-video="lF_C7BvAf_A">
                                        <div class="play"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="prev" href="#"></a>
                        <a class="next" href="#"></a>
                    </div>
                    <div class="block_url">
                        <p>Ссылка на твой сайт:</p>
                        <a class="url_site" href="#">www.yoursite.com</a>
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
                        <a class="btn" href="#">Мне не нужны <br>клиенты</a>
                        <a class="btn" href="#">Мне нужны клиенты. <br>Продолжить за 179 руб.</a>
                    </div>
                </div>
            </section>
            <section class="sec12" data-step="12">
                <div>
                    <h2>Привязка сайта к вашему домену</h2>
                    <div class="block">
                        <a class="btn" href="#">Я знаю как это делать</a>
                        <a class="btn" href="#">Есть домен, не знаю как привязать</a>
                        <a class="btn" href="#">Нет домена</a>
                    </div>
                    <p>Добавьте А запись: ХХХ.ХХ.Х.ХХ к вашему домену</p>
                    <div class="block">
                        <div class="vid video_btn" data-video="lF_C7BvAf_A">
                            <div class="play"></div>
                        </div>
                    </div>
                    <a class="btn_next" href="#">Следующий шаг</a>
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
                    <a class="btn_next" href="#">Привязать CRM систему</a>
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
                    <a class="btn_next" href="#">Настроить бизнес процессы</a>
                </div>
            </section>
        </div>
        <div id="hidden-box">
            <div class="popap" id="validation_popup">
                <div class="close_p"></div>
                <p><span></span></p>
            </div>
            <div class="pop" id="login">
                <div>
                    <div class="close close_p"></div>
                    <div class="block">
                        <h2>Войти</h2>
                        <form action="#">
                            <input name="mail" type="text" placeholder="Введите Ваш e-mail">
                            <input name="password" type="text" placeholder="Введите пароль">
                            <input class="sub" type="submit" value="Войти">
                        </form>
                    </div>
                </div>
            </div>
            <div class="conf-pop">
                <div class="close close_p">
                </div>
                <p>Данное соглашение об обработке персональных данных разработано в соответствии с законодательством Российской Федерации. Все лица заполнившие сведения, составляющие персональные данные на данном сайте, а также разместившие иную информацию обозначенными действиями подтверждают свое согласие на обработку персональных данных и их передачу оператору обработки персональных данных. Под персональными данными Гражданина понимается нижеуказанная информация: общая информация; посетители сайта направляют свои персональные данные. Гражданин, принимая настоящее Соглашение, выражают свою заинтересованность и полное согласие, что обработка их персональных данных может включать в себя следующие действия: сбор, систематизацию, накопление, хранение, уточнение (обновление, изменение), использование, уничтожение. Гражданин гарантирует: информация, им предоставленная, является полной, точной и достоверной; при предоставлении информации не нарушается действующее законодательство Российской Федерации, законные права и интересы третьих лиц; вся предоставленная информация заполнена Гражданина в отношении себя лично.</p>
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
                    <a class="menu_a allowed active" href="#" data-step="1">Главная</a>
                </div>
                <div class="block">
                    <a class="menu_a" href="#" data-step="2">Пошаговый сервис</a>
                </div>
                <div class="block">
                    <a class="menu_a" href="#" data-step="3">Твой сайт уже готов</a>
                </div>
                <div class="block">
                    <a class="menu_a" href="#" data-step="4">Написать свой оффер</a>
                </div>
                <div class="block">
                    <a class="menu_a" href="#" data-step="5">Введите данные куда будут приходить заявки</a>
                </div>
                <div class="block">
                    <a class="menu_a" href="#" data-step="6">Есть ли у Вашей компании видео?</a>
                </div>
                <div class="block">
                    <a class="menu_a" href="#" data-step="7">Причина оставить заявку</a>
                </div>
                <div class="block">
                    <a class="menu_a" href="#" data-step="8">Поставить фото/видео фон</a>
                </div>
                <div class="block">
                    <a class="menu_a" href="#" data-step="9">Твой сайт уже готов</a>
                </div>
                <div class="block">
                    <a class="menu_a" href="#" data-step="10">Отзывы пользователей DNK Atom</a>
                </div>
                <div class="block">
                    <a class="menu_a" href="#" data-step="11">Привязка сайта к Вашему домену</a>
                </div>
            </div>
        </div>
        <div class="back_btn">
            назад
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script src="js/init.js"></script>
        <?php include('../track/body.php'); ?>
    </body>
</html>