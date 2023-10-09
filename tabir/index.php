<?php
require '../php/blocks.php';

$disciplines = array(
    [
        'Впоряд', 'Тактика', 'Домедична допомога', 'ММГ', 'Виживання', 'Право', 'Стрільба', 'Історія',
        'Орієнтування', 'Самозахист', 'Туризм',
    ],
    [
        'Тренує дисципліну та субординацію - навички, необхідні для справжнього лідера',
        'Базові навички руху зі зброєю, наодинці та в команді. <br>Вміння поводитись зі зброєю — чудовий спосіб виховання відповідальності.',
        'Врятувати життя може кожен. Головне - знати як',
        'Все про автомат Калашникова - як працює та як розбирається',
        'Виживання в лісі - це вихід з зони комфорту. Навчимо добувати їжу, воду, вогонь та будувати шелест',
        'Навчимо захищати свою позицію законом, спілкуватися з поліцією, охоронцями та іншими. Навички перевіряються в першому ліпшому АТБ.',
        'Очікування ідеального моменту для точного пострілу гартує терпіння та зосередженість.',
        'Нація, що не знає свого минулого приречена на його повторення',
        'Після нашої гутірки неможливо загубитись в трьох соснах. Якщо сосен буде більше - ми безсилі. <br>Сусаніном ви не станете, але в трьох соснах вже не загубитесь.',
        'Добро повинно бути з кулаками.',
        'Багато вузлів, мотузок та спусків. Найвеселіша дисципліна. <br>І можна сміливо відпочивати в будь-яких умовах, що підготує природа'
    ],
    ['впоряд', 'тактика', 'домедичка', 'ммг', 'виживання', 'правознавство', 'стрільба', 'історія', 'орієнтування', 'самозахист', 'туризм']
);


$guests = array(
    [
        'Михайло Шитко', 'Сергій Золотаренко, "Петрович"', 'Вікторія Гуро', 'Ольга Галушко', 'Богдан Легоняк',
        'Сергій Василюк', 'Сергій Кривонос', 'Олексій Святенко', 'Тереха',
        'Сергій Мазур', 'Валентина Поліщук', 'Смутна Ірина'
    ],
    [
        'Інструктор з тактичної медицини', 'Інструктор з боксу та самооборони', 'Психолог', 'Краєзнавець Холодного Яру',
        'Дослідник Холодного Яру', 'Лідер гурту "Тінь Сонця"', 'Генерал Збройних сил України', 'Військовий волонтер',
        'Друг "Поклик Яру"', 'Друг "Поклик Яру"', 'Фотограф', 'Фотограф'
    ],
    ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12']
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Поклик Яру | Табір</title>
    <link rel="icon" type="image/x-icon" href="../images/header&footer/logo.ico">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="./style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../assets/3d-slider-style.css">
    <link rel="modulepreload" href="../assets/3d-slider-library.js">

</head>

<body>
    <header class="header">
        <section class="header__info">
            <h1 class="header__info-title">Табір</h1>
        </section>
    </header>
    <?php secondaryHeader() ?>
    <main class="container">
        <div class="default-title__wrapper">
            <h2 class="default-title">цінності табору</h2>
            <hr>
        </div>
        <div class="tabir__video-wrapper">
            <div class="tabir__video">
                <video id="tabir-video" class="tabir__video-player" poster="./video-poster.png">
                    <source src="./video.mp4" type="video/mp4" />
                </video>
                <div class="tabir-video__controls">
                    <button class="tabir-video__play-button tabir-video__control-button">
                        <img src="../images/tabir/video-play.png" alt="Play">
                    </button>
                </div>
            </div>
            <div class="tabir__video-message">
                <div class="video__message-col">
                    <h1 class="video__message-number">5</h1>
                </div>
                <div class="video__message-col">
                    <h1 class="video__message-text">Причин відвідати табір Поклик Яру</h1>
                </div>
            </div>
        </div>

        <div class="default-title__wrapper-y">
            <hr>
        </div>
        <div class="tabir__features">
            <ul class="tabir__features-list">
                <li>
                    <a onmouseout="$('#tabir-feature-text-1').slideDown(200);" href="javascript:void(0)">
                        <h3>Виховання відповідальної молоді</h3>
                        <p class="tabir__feature-text" id="tabir-feature-text-1">&nbsp&nbspЗ цією метою заснований табір. Ми переконані, що майбутнє України за відповідальними. Тому формуємо літню програму так, щоб молодь навчалась приймати самостійні рішення і брати відповідальність за себе та побратимів</p>
                    </a>
                </li>
                <li>
                    <a onmouseout="$('#tabir-feature-text-2').slideDown(200);" href="javascript:void(0)">
                        <h3>Чіткі принципи виховання:</h3>
                        <p class="tabir__feature-text" id="tabir-feature-text-2">&nbsp&nbspПобратимство - головний елемент виховання гідної людини. Взаємопідтримка для нас понад усе. Дисципліна – основа порядку. Чіткий розпорядок дня, рівні правила і можливості, відповідальність за колектив. Патріотична молодь, що шанує рідне, беззаперечно стане справжнім фундаментом сильної України.</p></a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <h3>10 днів насиченої програми, яка цікава і водночас корисна для життя.</h3>
                    </a>
                </li>
                <li>
                    <a onmouseout="$('#tabir-feature-text-4').slideDown(200);" href="javascript:void(0)">
                        <h3>Чисте довкілля і жодних гаджетів</h3>
                        <p class="tabir__feature-text" id="tabir-feature-text-4">&nbsp&nbspХолодноярський ліс, віддаленість від великих міст, свіже повітря, смачна і здорова їжа. Телефони видаються вихованцям лише на одну годину ввечері для зв'язку з рідними, що повністю занурює дитину у світ Поклик Яру.</p>
                    </a>
                </li>
                <li>
                    <a onmouseout="$('#tabir-feature-text-5').slideDown(200);" href="javascript:void(0)">
                        <h3>Молода команда виховників</h3>
                        <p class="tabir__feature-text" id="tabir-feature-text-5">&nbsp&nbspНаша команда стане для вихованців не лише наставниками і прикладом, а й справжніми друзями. Ми тримаємо зв'язок з дитиною протягом року, тому що Родина Поклик Яру - це назавжди.</p>   
                    </a>        
                </li>
            </ul>
        </div>

        <div class="default-title__wrapper">
            <h2 class="default-title">Реєстрація</h2>
            <hr style="border-color: #FFD537;">
        </div>

        <!-- СУДА -->
        <div class="registration-wrapper">
            <h2 class="registration__course-title" style="font-size: 8vh">ДО ЗУСТРІЧІ НАСТУПНОГО ЛІТА!</h2>

            <!--<div class="registration-wrapper__row">
                <div class="default-title__wrapper-y" style="top: 60px;">
                    <a href="https://docs.google.com/forms/d/1IbLFIOxB1vnz4VdcdKWWGTlkIBd15mXIeui1fcPnb0k/edit" class="default-title" style="box-shadow: 0px 0px 10px #293C43;">зареєструватись</a>
                    <hr>
                </div>
            </div>-->
        </div>

        <div class="disciplines-wrapper">
            <h2 class="tabir__slider-wrapper__title">дисципліни</h2>
            <div id="app">
                <div class="swiper swiper-carousel disciplines-swiper">
                    <div class="swiper-wrapper">
                        <?php for ($i = 0; $i < count($disciplines) - 2; $i++) : ?>
                            <?php for ($j = 0; $j < count($disciplines[$i]); $j++) : ?>
                                <?php echo '
                                    <div class="swiper-slide">
                                        <div class="swiper-carousel-animate-opacity">
                                            <img src="../images/tabir/disciplines/' . $disciplines[$i + 2][$j] . '.jpg">
                                            <div class="slide-content">
                                                <h2>' . $disciplines[$i][$j] . '</h2>
                                                <p>' . $disciplines[$i + 1][$j] . '</p>
                                            </div>
                                        </div>
                                    </div>
                                ' ?>
                            <?php endfor ?>
                        <?php endfor ?>
                    </div>
                </div>
                <div class="disciplines-swiper-button-prev swiper-button-prev"></div>
                <div class="disciplines-swiper-button-next swiper-button-next"></div>
                <div class="disciplines-swiper-pagination swiper-pagination-bullets swiper-pagination"></div>
            </div>
        </div>

        <div class="disciplines-wrapper">
            <h2 class="tabir__slider-wrapper__title">гості</h2>
            <div id="app">
                <div class="swiper swiper-carousel tabir-swiper">
                    <div class="swiper-wrapper">
                        <?php for ($i = 0; $i < count($guests) - 2; $i++) : ?>
                            <?php for ($j = 0; $j < count($guests[$i]); $j++) : ?>
                                <?php echo '
                                    <div class="swiper-slide">
                                        <div class="swiper-carousel-animate-opacity">
                                            <img src="../images/tabir/guests/' . $guests[$i + 2][$j] . '.jpg" style="object-position: top;">
                                            <div class="slide-content">
                                                <h2>' . $guests[$i][$j] . '</h2>
                                                <p>' . $guests[$i + 1][$j] . '</p>
                                            </div>
                                        </div>
                                    </div>
                                ' ?>
                            <?php endfor ?>
                        <?php endfor ?>
                    </div>
                </div>
                <div class="tabir-swiper-button-prev swiper-button-prev"></div>
                <div class="tabir-swiper-button-next swiper-button-next"></div>
                <div class="tabir-swiper-pagination swiper-pagination-bullets swiper-pagination"></div>
            </div>
        </div>
    </main>

    <?php secondaryFooter() ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script defer="" src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon="{&quot;token&quot;: &quot;07e9b2efafbd4b458690b79234a62148&quot;}"></script>
    <script type="module" crossorigin="" src="../assets/3d-tabir-control.js"></script>
    <script src="../js/script.js"></script>
    <script src="./video-player.js"></script>
</body>

</html>