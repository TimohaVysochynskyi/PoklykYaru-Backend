<?php
require '../php/blocks.php';

$team = array(
    [
        'Ілля Мар\'ян, "Фестиваль"', 
        'Павло Добротворський, "Історик"', 
        'Анастасія Ткаченко, "Єнот"', 
        'Ярослав Корнієнко, "Стрикущ"', 
        'Микита Бровченко, "Лінгвіст"', 
        'Анастасія Скляр, "Мері"', 
        'Ірина Жирна, "Грань"', 
        'Катерина Дорошенко, "Вспишка"',
        'Вадим Паламарчук, "Мажор"', 
        'Марія Гусєва, "Катана"', 
        'Марина Суддя, "Незнайка"',
        'Валерія Шевченко, "Рапунцель"',
        'Софія Кіприч, "Сонце"',
        'Вероніка Замрига, "Волинь"',
        'Роман Надточій, "Ромек"',
        'Софія Гусєва, "Гусьмін"',
        'Катерина Купців, "Тінь"',
        'Володимир Маринін, "Бурий"',
        'Анастасія Замша, "Грінхет"'
    ],
    [
        'Координатор',
        'Координатор',
        'Координатор відділу "Писарство та Комунікації"',
        'Координатор відділу підтримки зв\'язку',
        'Координатор відділу апгрейду',
        'Заступник координатора відділу СММ',
        'Координатор відділу СММ',
        'Заступник координатора відділу «Писарство та Комунікації», дизайнер',
        '',
        'Координатор відділу мерчу',
        'Заступник координатора відділу Тік-ток',
        'Заступник координатора відділу апгрейду',
        '',
        'Заступник координатора відділу мерчу',
        'Голова ГО "Поклик Яру',
        'Координатор відділу Тік-ток',
        'Заступник координатора відділу СММ',
        '',
        ''
    ],
    [
        'fest.jpg',
        'istoryk.jpg',
        'enot.jpg',
        'stryk.jpg',
        'lingvist.jpg',
        'meri.jpg',
        'gran\'.jpg',
        'vspyshka.jpg',
        'major.jpg',
        'katana.jpg',
        'neznaika.jpg',
        'rapunzel.jpg',
        'sonze.jpg',
        'volyn\'.jpg',
        'romek.jpg',
        'gusmin.jpg',
        'tin\'.jpg',
        'buryi.jpg',
        'greenhat.jpg'
    ]
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Поклик Яру | Команда</title>
    <link rel="icon" type="image/x-icon" href="../images/header&footer/logo.ico">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../assets/3d-slider-style.css">
    <link rel="modulepreload" href="../assets/3d-slider-library.js">
</head>
<header class="header">
    <section class="header__info">
        <h1 class="header__info-title">Наша команда</h1>
    </section>
</header>
<?php secondaryHeader() ?>

<!-- Container -->
<main class="container">
    <div class="team__text-wrapper">
        <div class="team__paralelogram"></div>
        <!-- Текста -->
        
         <div id="app">
            <div class="swiper swiper-carousel team-swiper">
                <div class="swiper-wrapper">
                    <?php for ($i = 0; $i < count($team) - 2; $i++) : ?>
                        <?php for ($j = 0; $j < count($team[$i]); $j++) : ?>
                            <?php echo '
                                <div class="swiper-slide">
                                    <div class="swiper-carousel-animate-opacity">
                                        <img src="../images/team/' . $team[$i + 2][$j] . '" style="object-position: top;">
                                        <div class="slide-content">
                                            <h2>' . $team[$i][$j] . '</h2>
                                            <p>' . $team[$i + 1][$j] . '</p>
                                        </div>
                                    </div>
                                </div>
                            ' ?>
                        <?php endfor ?>
                    <?php endfor ?> 
                </div>
            </div>
            <div class="team-swiper-button-prev swiper-button-prev"></div>
            <div class="team-swiper-button-next swiper-button-next"></div>
            <div class="team-swiper-pagination swiper-pagination-bullets swiper-pagination"></div>
        </div>
    </div>


    <!-- 3Д слайдер. Тут краще нічого не міняти -->
    <div class="team-wrapper wow fadeInRight">
       <p class="team__text wow fadeInLeft">ПОКЛИК ЯРУ — організація, яка створена вмотивованою молоддю. <br><br> Студенти, школярі, молоді вчителі. Середній вік 18-20 років. Молодь, яка об’єднана цінностями Побратимства, Дисципліни і Патріотизму. Більшість з нас, були вихованцями “Поклик Яру”. <br> Ми щиро переконані, що виховання сильних поколінь залежить від молодих і амбітних юнаків та юначок, які вірять в цю державу та готові віддавати свою молодість на гуртування майбутніх еліт. <br><br> Якісний склад команди для нас понад усе. Виховуючи відповідальну молодь, потрібно бути прикладом для юних вихованців. Ми не найкращі і не досконалі, проте знаємо, що всього можна навчитись. Тому саморозвиток, системність, цілі, чіткий розподіл обов'язків, планування і численні вишколи - постійні супутники нашої команди. <br><br> Ще одним доказом ідейності виховника є відсутність поняття "зарплата". Ми працюємо на волонтерських засадах і це принцип "Поклик Яру". <br><br> Ми працюємо на волонтерських засадах і це принцип "Поклик Яру". Ми переконані, що виховання відповідальної молоді - найкоротший спосіб до процвітаючої Держави. Сьогодні ми взяли відповідальність за наше покоління. Завтра - вони візьмуть відповідальність за нашу Державу. <br><br>Наша команда втілить в життя заповіти Шевченка та Чучупаки. Холодний Яр готуватиме нових борців!</p>
    </div>
</main>

<!--Footer-->
<?php secondaryFooter() ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script defer="" src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon="{&quot;token&quot;: &quot;07e9b2efafbd4b458690b79234a62148&quot;}"></script>
<script type="module" crossorigin="" src="../assets/3d-team-control.js"></script>
<script src="../js/script.js"></script>
</body>

</html>