<?php
if ( (isset($_GET["utm_campaign"])) && (isset($_GET["utm_medium"])) && (isset($_GET["utm_source"])) ){
    $campaign = $_GET["utm_campaign"];
    $medium = $_GET["utm_medium"];
    $source = $_GET["utm_source"];
}
else {
    $campaign='';
    $medium='';
    $source='';
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Yandex.Taxi - Зарабатывайте деньги на вашем автомобиле!</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body class="is-preload">
        <header id="header">
            <img class="logo" alt="logo" src="images/logo.jpg"/><br/>
            <p>oficiālais <br/>partneris <span><span class="redSymbol">M</span>ikluha</span></p>
            <a class="lang" href="index.php?utm_source=<?php echo $source; ?>&utm_medium=<?php echo $medium; ?>&utm_campaign=<?php echo $campaign; ?>" alt="language">LV</a>
            <nav>
                <a class="number" href="#about"><img class="number" alt="phone_icon" src="images/trubas.png"/>+371 22836762</a><br/>
                <a class="number" href="#about"><img class="number" alt="phone_icon" src="images/trubas.png"/>+371 24987778</a>
            </nav>
        </header>
        <section id="banner">
            <div class="inner">
                <h1>У вас нет машины, но есть желание работать? Тогда вам к нам!</h1>
                <h2>Официальный партнер Яндекс.Такси в Латвии предоставит вам автомобиль компании и вы начнёте зарабатывать уже сегодня.</h2>
                <p>Нажимайте на кнопку ниже и получите всю необходимую информацию: </p>
                <button class="cta_button">Получить бесплатную консультацию</button>
            </div>
        </section>
        <section class="wrapper">
            <div class="inner">
                <div class="highlights">
                    <section>
                        <div class="content">
                                
                            <img src="images/1adv.png" alt="Yandex Taxi advantage 1"/>
                            <h3>Бесплатная <br/>регистрация</h3>
                            <p>Регистрация и обучение в офисе займут менее 30 минут.</p>
                                
                        </div>
                    </section>
                    <section>
                        <div class="content">
                            <img src="images/2adv.png" alt="Yandex Taxi advantage 2"/>
                            <h3>Свободный <br/>график</h3>
                            <p>Возможность выбирать любой график работы.</p>
                        </div>
                    </section>
                    <section>
                        <div class="content">
                            <img src="images/3adv.png" alt="Yandex Taxi advantage 3"/>
                            <h3>Доход до 120€ <br/>в день</h3>
                            <p>Гарантии минималой стоимости заказов, увеличение зараработка во время повышенного спроса.</p>
                        </div>
                    </section>
                    <section>
                        <div class="content">
                            <img src="images/4adv.png" alt="Yandex Taxi advantage 4"/>
                            <h3>Большое кол-во <br/>заказов</h3>
                            <p>Яндекс.Такси - лидер в Латвии по количеству выполненых заказов.</p>
                        </div>
                    </section>
                </div>
            </div>
        </section>
        <section id="cta" class="wrapper">
            <div class="inner">
                <h1 class="step_header">Как это работает?</h1>
                <div id="step_grid">
                    <div id="first_row">
                        <p><img src="images/1.png" alt="first step"/><br/>Заполните <br/>заявку</p>
                        <div id="arrow_wrap"><img alt="right arrow" src="images/right_arrow.png"/></div>
                        <p><img src="images/2.png" alt="first step"/><br/>С Вами свяжется менеджер</p>
                    </div>
                    <div id="second_row">
                        <div id="arrow_wrap"><img alt="right arrow" src="images/right_arrow.png"/></div>
                        <p><img src="images/3.png" alt="first step"/><br/>Пройдите <br/>обучение</p>
                        <div id="arrow_wrap"><img alt="right arrow" src="images/right_arrow.png"/></div>
                        <p><img src="images/4.png" alt="first step"/><br/>Начните <br/>зарабатывать</p>
                    </div>
                </div>
                <h2 class="step_subheader">Принцпип работы приложения «Таксометр» для получения клиентов</h2>
                <div class="video_wrap">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/tNEQikTxd7o" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </section>
        <section id="faq" class="wrapper">
            <div class="inner">
                <h2>Часто задаваемые вопросы</h2>
                <div class="faq_accordion">
                    <button class="accordion">Где брать обучающие материалы?</button>
                    <div class="panel">
                        <div class="video_wrap">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/qjbwFj4EKJM" frameborder="0"  allowfullscreen></iframe>
                        </div>
                        <div class="video_wrap">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/04_z0qMfOGg" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <button class="accordion">Почему лучше работать с официальным партнером?</button>
                    <div class="panel">
                        <p>Сниженные комиссии, круглосуточная тех. поддержка, ускоренное решение всех вопросов без посредников</p>
                    </div>

                    <button class="accordion">Что необходимо для регистрации и начала работы?</button>
                    <div class="panel">
                        <p>Для начала работы необходимо связаться с нами, уточнить, подходит ли ваш автомобиль для работы, пройти регистрацию и обучение.</p>
                    </div>
                    <button class="accordion">Хватает ли заказов для всех водителей и хорошего заработка?</button>
                    <div class="panel">
                        <p>Сервис обеспечивает водителей достаточным количеством заказов.</p>
                    </div>
                    <button class="accordion">Как часто водители получают деньги?</button>
                    <div class="panel">
                        <p>Расчет с водителями происходит каждую неделю..</p>
                    </div>
                    <button class="accordion">Лучшие локации и время работы?</button>
                    <div class="panel">
                        <p>Лучшее время и локации для работы необходимо определять самостоятельно в зависимости от направления движения большинства клиентов в определенный промежуток времени. Более подробную информацию по данному вопросу можно получить при регистрации.</p>
                    </div>
                </div>
                <h2>Мы с радостью ответим на все оставшиеся вопросы</h2>
                <button id ="restInfoBtnRu" class="cta_button">Получить бесплатную консультацию</button>
            </div>
        </section>
      
        <footer id="footer">
            <div class="inner">
                <div class="content">
                    <section id="about">
                        <h3>SIA MIKLUHA</h3>
                        <p>
                            Jēzusbaznīcas iela 7<br/>
                            Rīga<br/>
                            +371 22836762<br/>
                            +371 24987778
                        </p>
                    </section>
                        
                </div>
                <div class="copyright">
                    &copy; SIA "MIKLUHA"
                </div>
            </div>
        </footer>
        <section id="form">

            <div class="form-popup"  id="myForm">
                <form action="awhrest.php" method="post" class="form-container" onsubmit="return validateForm()">
                    <h1>Заполните форму</h1>
                    <p>Мы с вами свяжемся, чтобы рассказать всё подробнее</p>
                    <label for="name"><b>Имя</b></label>
                    <input type="text" placeholder="Введите имя" name="name" required>

                    <label for="number"><b>Номер телефона</b></label>
                    <input id ="num" type="text" placeholder="Введите номер телефона" name="number" required>
                    <input type="hidden" name="utm_campaign" value="<?php echo $campaign; ?>">
                    <input type="hidden" name="utm_source" value="<?php echo $source; ?>">
                    <input type="hidden" name="utm_medium" value="<?php echo $medium; ?>">
                    <label for="car_choice"><b>Выберите подходящий вариант:</b></label>
                    <select style="width:100%;margin-bottom:7px;background-color:#ddd;padding:4px" name="car_choice">
                                <option value="own">Я буду работать на своей машине</option>
                                <option value="company">Я буду работать на машине компании</option>
                    </select>
                    <input type="hidden" value="ru" name="lang">
                    <button type="submit" class="btn" id="submitBtn">Отправить</button>
                    
                    <br/>
                    <input type="checkbox" value="Знаком" required />
                    <label id="agreement">Piekritu datu apstrādāšanai <a href="terms.pdf">(privātuma politika)</a></label> 
                    
                    <button type="button" id="cancelBtn" class="btn cancel" onclick="closeForm()">+</button>
                    
                        
                        
                </form>
            </div>
        </section>
        <section id="numberPopup">
            <div>
                <a href="#about">
                    <img class="number" alt="phone_icon" src="images/trubas.png"/>
                    <p>+371 22836762<br/>
                    +371 24987778</p>
                </a>
            </div>
            
        </section>


        <!-- Scripts-->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
        


    </body>
</html>