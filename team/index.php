<?php
require '../php/blocks.php';
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
        <p class="team__text wow fadeInLeft">ПОКЛИК ЯРУ — організація, яка створена вмотивованою молоддю. <br><br> Студенти, школярі, молоді вчителі. Середній вік 18-20 років. Молодь, яка об’єднана цінностями Побратимства, Дисципліни і Патріотизму. Більшість з нас, були вихованцями “Поклик Яру”. <br> Ми щиро переконані, що виховання сильних поколінь залежить від молодих і амбітних юнаків та юначок, які вірять в цю державу та готові віддавати свою молодість на гуртування майбутніх еліт. <br><br> Якісний склад команди для нас понад усе. Виховуючи відповідальну молодь, потрібно бути прикладом для юних вихованців. Ми не найкращі і не досконалі, проте знаємо, що всього можна навчитись. Тому саморозвиток, системність, цілі, чіткий розподіл обов'язків, планування і численні вишколи - постійні супутники нашої команди. <br><br> Ще одним доказом ідейності виховника є відсутність поняття "зарплата". Ми працюємо на волонтерських засадах і це принцип "Поклик Яру". <br><br> Ми працюємо на волонтерських засадах і це принцип "Поклик Яру". Ми переконані, що виховання відповідальної молоді - найкоротший спосіб до процвітаючої Держави. Сьогодні ми взяли відповідальність за наше покоління. Завтра - вони візьмуть відповідальність за нашу Державу. <br><br>Наша команда втілить в життя заповіти Шевченка та Чучупаки. Холодний Яр готуватиме нових борців!</p>
    </div>


    <!-- 3Д слайдер. Тут краще нічого не міняти -->
    <div class="team-wrapper wow fadeInRight">
        <div id="app">
            <div class="swiper swiper-carousel team-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-carousel-animate-opacity">
                            <img src="../images/tabir/disciplines/впоряд.jpg">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-carousel-animate-opacity">
                            <img src="../images/tabir/disciplines/тактика.jpg">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-carousel-animate-opacity">
                            <img src="../images/tabir/disciplines/домедичка.JPG">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-carousel-animate-opacity">
                            <img src="../images/tabir/disciplines/ммг.jpg">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-carousel-animate-opacity">
                            <img src="../images/tabir/disciplines/виживання.jpg">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-carousel-animate-opacity">
                            <img src="../images/tabir/disciplines/правознавство.jpg">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-carousel-animate-opacity">
                            <img src="../images/tabir/disciplines/стрільба.jpg">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-carousel-animate-opacity">
                            <img src="../images/tabir/disciplines/історія.jpg">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-carousel-animate-opacity">
                            <img src="../images/tabir/disciplines/орієнтування.jpg">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-carousel-animate-opacity">
                            <img src="../images/tabir/disciplines/самозахист.jpg">

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-carousel-animate-opacity">
                            <img src="../images/tabir/disciplines/туризм.jpg">
                        </div>
                    </div>

                </div>
            </div>
            <div class="team-swiper-button-prev swiper-button-prev"></div>
            <div class="team-swiper-button-next swiper-button-next"></div>
            <div class="team-swiper-pagination swiper-pagination-bullets swiper-pagination"></div>
        </div>
    </div>
</main>

<!--Footer-->
<footer class="footer wow fadeInUp">
    <div class="footer-block">
        <div class="footer__col">
            <nav class="footer__nav">
                <ul class="footer__list">
                    <li><a href="https://www.youtube.com/channel/UCROFrx6_3YVPx2pKHyY8C2w" class="footer__link"><img src="../images/header&footer/yt-link.png" alt=""></a></li>
                    <li><a href="https://www.tiktok.com/@pokluk.yary?_t=8VGQqhNHl7G&_r=1" class="footer__link"><img src="../images/header&footer/tt-link.png" alt=""></a></li>
                    <li><a href="https://t.me/PoklykYaru" class="footer__link">
                            <img src="../images/header&footer/tg-link.png" alt=""></a></li>
                    <li><a href="https://www.facebook.com/poklyk.yaru" class="footer__link"><img src="../images/header&footer/fc-link.png" alt=""></a></li>
                    <li><a href="https://www.instagram.com/poklyk.yaru/" class="footer__link"><img src="../images/header&footer/inst-link.png" alt=""></a></li>
                </ul>
            </nav>
        </div>
        <div class="footer__col">
            <h3 class="footer__adress">2972 Westheimer Rd. Santa Ana, Illinois 85486 </h3>
            <h3 class="footer__adress">(207) 555-0119</h3>
            <h3 class="footer__adress">(207) 555-0119</h3>
        </div>
    </div>
    <div class="footer-block">
        <h3 class="footer__license">ГО “Поклик яру” 2020-2021. Всі права захищені</h3>
        <h3 class="footer__license">Дизайн сайту Olha Skarzhynets, графічний дизайн Катя Вспишка, верстка сайту Дон</h3>
    </div>
</footer>

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