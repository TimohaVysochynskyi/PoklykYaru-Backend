<?php
    require './php/blocks.php'; // Connection крінжатинa from another file
?>
<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Поклик Яру | Головна</title>
    <link rel="icon" type="image/x-icon" href="./images/header&footer/logo.ico">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <!--Preloader-->
    <div class="preloader" id="preloader">
        <!--<div class="preloader-eraser"></div>-->
        <img src="./images/header&footer/preloader.gif" class="preloader__gif">
    </div>

    <!--Header-->
    <header class="header" id="header">
        <section class="header__registration">
            <div class="header__register-timer-wrapper">
                <a target="blank"
                    href="https://docs.google.com/forms/d/1IbLFIOxB1vnz4VdcdKWWGTlkIBd15mXIeui1fcPnb0k/edit"
                    class="header__register-timer">
                    <img src="./images/header&footer/header-arrow.png" class="header__register-img">
                    <span class="header__register-timer-text"> ЗАРЕЄСТРУВАТИСЬ </span>
                    <h1 class="header__register-title">РЕЄСТРАЦІЯ ПОЧАЛАСЯ</h1>
                </a>
            </div>
        </section>
    </header>
    <nav class="header__nav">
        <a href="./"><img src="./images/header&footer/logo.png" alt="Логотип" class="header__logo"></a>
        <ul class="header__list">
            <li>
                <a href="./aboutus" class="header__link">про нас</a>
            </li>
            <li><a href="./tabir" class="header__link">табір</a></li>
            <li>
                <a href="./event" class="header__link" id="eventheader" onclick="eventHeader()">заходи</a>
            </li>
            <li>
                <a href="./merch" class="header__link" id="merchheader">мерч</a>
                <!--<a href="#" class="header__link" id="merchheader2">одяг</a>
                <a href="#" class="header__link" id="merchheader3">аксесуари</a>
                <a href="#" class="header__link" id="merchheader4">книги</a>-->
            </li>
            <li><a href="./help" class="header__link">допомога</a></li>
            <li><a href="./comevent" class="header__link">комерційні заходи</a></li>
        </ul>
    </nav>

    <!--Container-->
    <main class="container" id="container">

        <!--About us block-->
        <div class="about" id="about">

            <a href="javascript:void(0)" class="whoarewe wow fadeInLeft" onclick="whoAreWe()">
                <img id="whoarewe-img" src="./images/whoarewe-img.png">
                <div class="about__col">
                    <h1 class="about__col-title" id="whoarewe-title">ХТО МИ?</h1>
                    <p class="about__col-text" id="whoarewe-text">Мета «Поклик Яру» - виховання відповідальної молоді.
                        <br><br>Ми переконані, що це найкоротший шлях до процвітання і
                        розвитку нашої Держави. <br><br>Наша команда — це свідома українська молодь, об'єднана
                        цінностями Побратимства,
                        Дисципліни та Патріотизму.
                    </p>
                </div>
            </a>

            <a href="javascript:void(0)" class="whatarewedoing wow fadeInRight" onclick="whatAreWeDoing()">
                <div class="about__col">
                    <h1 class="about__col-title" id="whatarewedoing-title">ЧИМ МИ ЗАЙМАЄМОСЬ?</h1>
                    <p class="about__col-text" id="whatarewedoing-text">Наша модель виховання — це систематична і
                        регулярна робота з молоддю протягом років. <br><br>Ми організовуємо:<br>Табори
                        національно-патріотичного виховання. <br>Освітні, виховні, вишкільні, культурні, туристичні
                        заходи.<br>Популяризуємо
                        історичний регіон Холодний Яр.<br>Волонтерські заходи на підтримку Збройних Сил України</p>
                </div>
                <img id="whatarewedoing-img" src="./images/whatarewedoing-img.png">
            </a>

        </div>

        <!--Short statistic block-->
        <div class="statistic wow fadeInUp">
            <h2 class="statistic-title">ПОКЛИК ЯРУ В ЦИФРАХ - ЦЕ: </h2>
            <div class="statistic__row">
                <div class="statistic__col"><span>28</span><span>Згадок в ЗМІ</span></div>
                <div class="statistic__col"><span>864</span><span>учасників</span></div>
                <div class="statistic__col"><span style="color: #293C43cc;">15</span><span>заходів</span></div>
            </div>
        </div>

        <!--Short feedback block-->
        <div class="feedback-wrapper">
            <div class="default-title__wrapper">
                <h2 class="default-title">ВІДГУКИ</h2>
                <hr>
            </div>
            <div class="feedback" id="feedback">
                <div class="feedback__item wow fadeInLeft">
                    <div class="feedback__item-col"><img src="./images/feedback/feedback-istoryk.png"
                            class="feedback__item-img"></div>
                    <div class="feedback__item-col">
                        <h4 class="feedback__item-title">ІСТОРИК<br><span>Координатор організації «Поклик Яру»</span></h4>
                        <p class="feedback__item-text">&nbspКоманда з 17-ти людей, які щодня, безкоштовно будують
                            організацію, що хоче виховувати відповідальну молодь. Понад 100 вихованців, які щороку
                            проводять своє літо на таборі "Поклик Яру". Вони змінюються під нашим впливом і обирають
                            альтернативний спосіб життя. Понад 200 батьків, які знають мене особисто, тиснуть руку,
                            довіряють і питають поради стосовно виховання своїх дітей. Що буде далі? Масштаб нашої
                            виховної системи буде виходити за межі одного табору. «Поклик Яру» пропонує модель
                            виховання, яка працює і має десятки прикладів успіху в організації заходів, вишколів,
                            благодійних акцій. «Поклик Яру» стане сходом сонця нашої Держави</p>
                    </div>
                </div>
                <div class="feedback__item wow fadeInRight">
                    <div class="feedback__item-col"><img src="./images/feedback/feedback-major.png"
                            class="feedback__item-img"></div>
                    <div class="feedback__item-col">
                        <h4 class="feedback__item-title">МАЖОР<br><span>Ройовий «Холодноярський вітер»</span></h4>
                        <p class="feedback__item-text">Їдучи на табір третє літо поспіль, я мав за честь стати ройовим.
                            24/7 відчував відповідальність. Хтось не почергував, хтось забув автомат, хтось не встиг на
                            збірку. Все це тепер контролював я. Особливо запам'ятав момент, коли вночі повинен був
                            зібрати свій рій, але десь не було однієї людини. Бігав по наметах, заглядав, рій стоїть на
                            кулаках, а він просто був сонний і став не до свого рою. Це одна з багатьох цікавих історій
                            на таборі. Мій рій ніколи не сумував. Було безліч кумедних історій. Але головним є те, що за
                            такий короткий час ми стали Побратимами</p>
                    </div>
                </div>
                <div class="feedback__item wow fadeInLeft">
                    <div class="feedback__item-col"><img src="./images/feedback/feedback-sergiihusiev.png"
                            class="feedback__item-img"></div>
                    <div class="feedback__item-col">
                        <h4 class="feedback__item-title">СЕРГІЙ ГУСЄВ<br><span>Батько подруги Катани та Гусьмін</span>
                        </h4>
                        <p class="feedback__item-text">&nbspПригадую, як дівчата розповіли мені, що під час одного з
                            походів їх навчали способам виживання. Крім навичок орієнтування в лісі, вихованців вчили
                            розводити багаття, робити шелести і сховища. Також їм доводилось їсти коріння лопуха, і, що
                            найшокуюче, жаб, хробаків і жуків. Відтоді я зрозумів, що мої доньки вже дорослі. Вони стали
                            витривалими, самостійними і зможуть пристосуватися до будь-яких умов. Ці випробування на
                            таборі необхідні для розширення зони комфорту💪🏻<br>&nbspМарія стала Катаною, а Софія
                            відтоді подруга Гусьмін. І найоб’єктивнішою оцінкою табору стало те, що вже наступного року
                            дівчатка з нетерпінням чекали своєї зміни на “Поклик Яру”. Катана поїхала в ролі помічника
                            виховника, а Гусьмін, як вихованиця.</p>
                    </div>
                </div>
                <div class="feedback__item wow fadeInRight">
                    <div class="feedback__item-col"><img src="./images/feedback/feedback-volyn.png"
                            class="feedback__item-img"></div>
                    <div class="feedback__item-col">
                        <h4 class="feedback__item-title">ВОЛИНЬ<br><span>Член команди «ПОКЛИК ЯРУ»</span></h4>
                        <p class="feedback__item-text">&nbspНайпомітніша зміна від перебування в команді «Поклик Яру» —
                            починає зникати етап «а нашо, може пізніше, а воно мені треба?» у виконанні будь-чого.
                            Натомість, з’являється стійке і холодне розуміння невідкладності роботи. Я навчилась більш
                            якісної комунікації з різними людьми. Розв’язувати конфлікти, вирішувати важливі питання до
                            дедлайну — фундаментальні навички у сучасному світі. Я отримала афігенне ком’юніті, людей зі
                            спільними ідеями цінностями та поглядами. Організація «Поклик Яру» стала невід’ємною
                            частиною мого життя і я цьому безмежно рада</p>
                    </div>
                </div>
                <div class="feedback__item wow fadeInLeft">
                    <div class="feedback__item-col"><img src="./images/feedback/feedback-sonce.png"
                            class="feedback__item-img"></div>
                    <div class="feedback__item-col">
                        <h4 class="feedback__item-title">СОНЦЕ<br><span>Рій імені Василя Чучупаки</span></h4>
                        <p class="feedback__item-text">&nbspГортаючи стрічку в тік тоці, я наштовхнулася на відео про
                            «Поклик Яру». Так і прийняла рішення, яке врешті дуже вплинуло на моє життя. Численні
                            гутірки, виховні моменти від проводу, випробування і велика кількість нових для мене
                            перешкод. Табір наштовхнув мене на переосмислення багатьох речей та змінив систему
                            цінностей. Я стала дивитися на світ, як відповідальна і національно-свідома людина. Мені
                            дивно, що моя свідомість стала інакшою всього за десять таборових днів. Це заслуга молодої
                            команди «Поклик Яру». Вони передають кожному з вихованців думку про те, що всі бар'єри
                            існують лише в нашій голові</p>
                    </div>
                </div>
                <div class="feedback__item wow fadeInRight">
                    <div class="feedback__item-col"><img src="./images/feedback/feedback-nadia.png"
                            class="feedback__item-img"></div>
                    <div class="feedback__item-col">
                        <h4 class="feedback__item-title">НАДІЯ ЗАМРИГА<br><span>Мама подруги Волинь</span></h4>
                        <p class="feedback__item-text">&nbspЇї перша зміна на таборі була цікавою, складною, емоційною,
                            випробувальною. Не передати мій подив, коли на половині моєї дороги до Черкас вона
                            подзвонила і сказала, що хоче залишитися ще на одну зміну! Друга зміна, під час якої моя
                            Волинь стала ройовою, ще більше зміцнила її і загартувала характер. Систематизувався в її
                            поглядах національний дух, поглибилися знання з історії країни. Вона з надзвичайним трепетом
                            читала одразу придбану після табору книгу «Холодний Яр».
                            Саме донька навчила мене і пояснила, як виконується Державний гімн України. Під час співу
                            притискаємо до серця не долоню, а кулак. Зерна української ідеї, які пояснені командою
                            «Поклик Яру», я впевнена, зростуть!</p>
                    </div>
                </div>
                <div class="feedback__gradient"></div>
            </div>
            <div class="default-title__wrapper">
                <a href="./feedback#feedback-page" id="showfeedbackbtn" class="default-title feedback__btn">БІЛЬШЕ
                    ВІДГУКІВ</a>
                <hr>
            </div>
        </div>

        <!--Map-->
        <div class="parallax-container">
            <div class="map parallax-base">
                <img src="./images/map.png" alt="">
                <a href="https://www.google.com.ua/maps/place/%D0%9F%D0%BE%D0%BA%D0%BB%D0%B8%D0%BA+%D0%AF%D1%80%D1%83+-+%D0%BD%D0%B0%D1%86%D1%96%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE-%D0%BF%D0%B0%D1%82%D1%80%D1%96%D0%BE%D1%82%D0%B8%D1%87%D0%BD%D0%B8%D0%B9+%D1%82%D0%B0%D0%B1%D1%96%D1%80/@49.1558184,32.278744,17z/data=!3m1!4b1!4m5!3m4!1s0x40d1253807924971:0xb1f0e53c3d064e50!8m2!3d49.1557855!4d32.2809419?hl=uk&authuser=0"
                    target="blank"></a>
            </div>
        </div>
    </main>

    <!--Footer-->
    <footer class="footer wow fadeInUp">
        <div class="footer-block">
            <div class="footer__col">
                <nav class="footer__nav">
                    <ul class="footer__list">
                        <li><a href="https://www.youtube.com/channel/UCROFrx6_3YVPx2pKHyY8C2w" class="footer__link"><img
                                    src="./images/header&footer/yt-link.png" alt=""></a></li>
                        <li><a href="https://www.tiktok.com/@poklyk.yaru" class="footer__link"><img
                                    src="./images/header&footer/tt-link.png" alt=""></a></li>
                        <li><a href="https://t.me/PoklykYaru" class="footer__link">
                                <img src="./images/header&footer/tg-link.png" alt=""></a></li>
                        <li><a href="https://www.facebook.com/poklyk.yaru" class="footer__link"><img
                                    src="./images/header&footer/fc-link.png" alt=""></a></li>
                        <li><a href="https://www.instagram.com/poklyk.yaru/" class="footer__link"><img
                                    src="./images/header&footer/inst-link.png" alt=""></a></li>
                    </ul>
                </nav>
            </div>
            <div class="footer__col">
                <h3 class="footer__adress">20933, Черкаська область,<br>с. Мельники, вул. Підлісна, 4</h3>
                <h3 class="footer__adress">+380 96 092 31 10</h3>
            </div>
        </div>
        <div class="footer-block">
            <h3 class="footer__license">ГО “Поклик яру” 2020-2023. Всі права захищені</h3>
            <h3 class="footer__license">Дизайн сайту Olha Skarzhynets, графічний дизайн Катя Вспишка, верстка сайту Дон
            </h3>
        </div>
    </footer>

    <!--Scripts-->
    <script>
        window.onload = setTimeout(function () {
            $("#preloader").slideUp("slow");
            document.querySelector('body').style.overflow = "scroll";
        }, 2500);
    </script>

    <!-- Frameworks/libraries and JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/parallax-rotate.js"></script>
</body>

</html>