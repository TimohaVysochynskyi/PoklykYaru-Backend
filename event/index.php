<?php
require '../php/blocks.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Поклик Яру | Заходи</title>
    <link rel="icon" type="image/x-icon" href="../images/header&footer/logo.ico">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header class="header">
        <section class="header__info">
            <h1 class="header__info-title">ЗАХОДИ</h1>
            <h2 class="header__info-event-title" id="eventListButton" onclick="showEventList()">Обрати захід <img
                    src="../images/events/event-list-arrow.png" id="event__list-arrow"></h2>
            <ul class="event__list-mobile">
                <li><a href="#щедруй для захисників" class="event__link-mobile">ЩЕДРУЙ ДЛЯ ЗАХИСНИКІВ</a></li>
                <li><a href="#туристичне змагання ім. в. чучупаки" class="event__link-mobile">ТУРИСТИЧНЕ ЗМАГАННЯ ІМ. В.
                        ЧУЧУПАКИ</a></li>
                <li><a href="#покрова в холодному яру" class="event__link-mobile">СВЯТО ПОКРОВИ В ХОЛОДНОМУ ЯРУ</a></li>
                <li><a href="#зимовий похід" class="event__link-mobile">ЗИМОВИЙ ПОХІД ІМЕНІ ГОРЛІСА-ГОРСЬКОГО</a></li>
            </ul>
        </section>
        <nav class="event__nav">
            <ul class="event__list">
                <li><a href="#щедруй для захисників" class="event__link wow fadeInLeft">ЩЕДРУЙ ДЛЯ ЗАХИСНИКІВ</a></li>
                <li><a href="#туристичне змагання ім. в. чучупаки" class="event__link wow fadeInRight">ТУРИСТИЧНЕ
                        ЗМАГАННЯ ІМ. В. ЧУЧУПАКИ</a></li>
                <li><a href="#покрова в холодному яру" class="event__link wow fadeInLeft">СВЯТО ПОКРОВИ В ХОЛОДНОМУ
                        ЯРУ</a></li>
                <li><a href="#зимовий похід" class="event__link wow fadeInRight">ЗИМОВИЙ ПОХІД ІМЕНІ
                        ГОРЛІСА-ГОРСЬКОГО</a></li>
            </ul>
        </nav>
    </header>
    <?php secondaryheader() ?>

    <!-- Container -->
    <main class="container">
        <div class="default-title__wrapper">
            <h2 class="default-title">ЗАХОДИ</h2>
            <hr>
        </div>
        <ul class="event__list-wrpper">
            <li class="event-block wow fadeInLeft" id="щедруй для захисників">
                <div class="event__row">
                    <section class="event__info">
                        <div class="event-paralelogram-wrapper">
                            <div class="event-paralelogram"></div>
                            <div class="event-paralelogram__text">
                                <h1 class="event-title">щедруй для захисників</h1>
                                <h2 class="event-time">13.01.2024</h2>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="event__row">
                    <div class="event__col">
                        <div class="event-paralelogram-bg"></div>
                        <p class="event-text">Різдвяні свята. Теплі будинки та багаті столи.
                            З 2014 року не всі можуть так святкувати. Новий рік, Різдво, Щедрий вечір наші воїни
                            проводять на передовій. Без них
                            не було б ні свободи, ні свята, ні України.</p>
                        <p class="event-text">"Щедруй для захисників!" - це спосіб потішити щедрівками українських
                            господарів та господинь,
                            водночас збираючи гроші
                            на підтримку Збройних Сил України. Ми можемо спокійно святкувати завдяки їхній цілодобовій
                            праці. То чому б не
                            поєднати приємне з корисним, підтримавши наших захисників.</p>
                    </div>
                    <div class="event__col"><img src="../images/events/щедруй-для-захисників2.png"></div>
                </div>
                <a href="#" class="event__btn">Зареєструватись</a>
            </li>
            <li class="event-block wow fadeInLeft" id="туристичне змагання ім. в. чучупаки">
                <div class="event__row">
                    <section class="event__info">
                        <div class="event-paralelogram-wrapper">
                            <div class="event-paralelogram"></div>
                            <div class="event-paralelogram__text">
                                <h1 class="event-title">туристичне змагання<br><span>ім. Василя Чучупаки</span></h1>
                                <h2 class="event-time">квітень 2024</h2>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="event__row">
                    <div class="event__col">
                        <div class="event-paralelogram-bg"></div>
                        <p class="event-text">Новий формат нашого заходу, яким продовжуємо популяризувати Головного
                            Отамана Холодного Яру.</p>
                        <p class="event-text">🔸40 км шляху, що гартує козаків.</p>
                        <p class="event-text">Маршрут, який пройдуть найсильніші. Фініш стане найбільшою перемогою над
                            собою, бо Холодний Яр обов’язково випробує на стійкість. </p>
                        <p class="event-text">🔸Команда.</p>
                        <p class="event-text">Команда — пріоритет. Формуйте команду та власну стратегію до перемоги.
                            Злагодженість і впевненість у свої сили стануть найкращими помічниками.</p>
                        <p class="event-text">🔸Місцевість, що дихає історією.</p>
                        <p class="event-text">Холодний Яр — місце, де об’єднувались козаки, гайдамаки та повстанці для
                            боротьби з одвічним ворогом. Не одне покоління запалювало вогонь, який горить і сьогодні.
                        </p>
                        <p class="event-text">І кожен з вас може стати іскрою, яка підсилюватиме вогонь боротьби.</p>
                    </div>
                    <div class="event__col"><img src="../images/events/туристичне-змагання2.jpg"></div>
                </div>
                <a href="#" class="event__btn">Зареєструватись</a>
            </li>
            <li class="event-block wow fadeInLeft" id="покрова в холодному яру">
                <div class="event__row">
                    <section class="event__info">
                        <div class="event-paralelogram-wrapper">
                            <div class="event-paralelogram"></div>
                            <div class="event-paralelogram__text">
                                <h1 class="event-title">свято покрови в холодному яру</h1>
                                <h2 class="event-time">01.10.2023</h2>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="event__row">
                    <div class="event__col">
                        <div class="event-paralelogram-bg"></div>
                        <p class="event-text">"Запали новий вогонь!" - коротке і чітке гасло свята Покрови в Холодному
                            Яру.</p>
                        <p class="event-text">Ми відновлюємо вогняний запал Дня козацтва, Дня УПА, Дня Захисника України
                            та і загалом свята всіх патріотів і
                            націоналістів.</p>
                        <p class="event-text">Сакральна місцевість Холодного Яру в поєднанні з чудовими людьми, що
                            запалюють сотні смолоскипів у вигляді живої карти
                            України</p>
                        <p class="event-text">Таким чином, Холодний Яр символічно пробуджує новий вогонь героїчного
                            минулого та сильного майбутнього.</p>
                    </div>
                    <div class="event__col"><img src=""></div>
                </div>
                <a href="#" class="event__btn">Зареєструватись</a>
            </li>
            <li class="event-block wow fadeInRight" id="зимовий похід">
                <div class="event__row">
                    <section class="event__info">
                        <div class="event-paralelogram-wrapper">
                            <div class="event-paralelogram"></div>
                            <div class="event-paralelogram__text">
                                <h1 class="event-title">зимовий похід<br>імені горліса-горського</h1>
                                <h2 class="event-time">01.12.2023</h2>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="event__row">
                    <div class="event__col">
                        <div class="event-paralelogram-bg"></div>
                        <p class="event-text">Грудень 1919 року поклав початок відомому Зимовому походу Армії УНР. У
                            ньому брав участь Юрій Горліс-Горський, який
                            лишився в Холодному Яру, щоб підлікуватись. Його вразила висока національна свідомість
                            тутешніх селян, вміння захищати
                            себе, традиція вітання "Слава Україні". <br>У Холодному Яру він знайшов "клаптик української
                            землі, який потрібно було відстояти або померти".</p>
                        <p class="event-text">Тож по цьому "клаптику української землі" на честь Юрія і за його
                            спогадами наша ватага протоптує зимові холодноярські
                            стежки щорічно.</p>
                        <p class="event-text">Медведівка, старий млин, Семидубова гора, Головківка з краєвидами на
                            Атаманський парк, місце останнього бою Василя
                            Чучупаки, древній Мотрин монастир, тисячолітній Дуб Залізняка — це далеко не повний перелік
                            локацій, які оживають перед
                            мандрівниками. Підкріплені красою засніженого Яру, вони довершують дивовижність цього
                            величного місця, що дихає
                            історією.</p>
                    </div>
                    <div class="event__col"><img src="../images/events/зимовий-похід.png"></div>
                </div>
                <a href="#" class="event__btn">Зареєструватись</a>
            </li>
        </ul>
    </main>

    <!-- Footer -->
    <?php secondaryFooter() ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>