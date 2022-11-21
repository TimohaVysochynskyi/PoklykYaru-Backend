<?php
require '../php/blocks.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Поклик Яру | Відгуки</title>
    <link rel="icon" type="image/x-icon" href="../images/header&footer/logo.ico">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/event.css">
    <link rel="stylesheet" href="../css/merch.css">
    <link rel="stylesheet" href="../css/secondary.css">
</head>

<body>
    <header class="header">
        <section class="header__info">
            <h1 class="header__info-title">МЕРЧ</h1>
            <h2 class="header__info-event-title" id="eventListButton" onclick="showEventList()">Обрати захід <img src="../images/events/event-list-arrow.png" id="event__list-arrow"></h2>
            <ul class="event__list-mobile">
                <li><a href="#clothes" onclick="showClothes()" class="event__link-mobile">ОДЯГ</a></li>
                <li><a href="#stickers" onclick="showStickers()" class="event__link-mobile">СТІКЕРИ</a></li>
                <li><a href="#books" onclick="showBooks()" class="event__link-mobile">КНИГИ</a></li>
                <li><a href="#flags" onclick="showFlags()" class="event__link-mobile">ПРАПОРИ</a></li>
            </ul>
        </section>
        <nav class="event__nav">
            <ul class="event__list">
                <li><a href="#clothes" onclick="showClothes()" class="event__link wow fadeInLeft">ОДЯГ</a></li>
                <li><a href="#stickers" onclick="showStickers()" class="event__link wow fadeInRight">СТІКЕРИ</a></li>
                <li><a href="#books" onclick="showBooks()" class="event__link wow fadeInLeft">КНИГИ</a></li>
                <li><a href="#flags" onclick="showFlags()" class="event__link wow fadeInRight">ПРАПОРИ</a></li>
            </ul>
        </nav>
    </header>
    <?php secondaryHeader() ?>

    <main class="container">
        <div class="product__desc-wrapper" id="product-desc">
            <a href="javascript:void(0)" class="product__desc-back" onclick="closeDetails()"><img src="../images/events/event-list-arrow.png"
                    alt="Назад"></a>
            <div class="product__desc">
                <div class="product__desc-row">
                    <div class="product__desc-col">
                        <img src="../test/tshirt.png" alt="Картинка товару" id="parallax" class="product__desc-img">
                    </div>
                    <div class="product__desc-col">
                        <h2 class="product__desc-name">Ім'я товару</h2>
                        <p class="product__desc-desc">&nbspLorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur fuga
                            corrupti repudiandae voluptas est facere repellendus iste exercitationem accusantium labore. Magnam
                            voluptate exercitationem nesciunt architecto cupiditate tempore, natus nisi aliquam? <br> &nbspLorem ipsum, dolor sit amet consectetur adipisicing elit. Vero sunt eius est quia rem tempora possimus facere magnam fugiat</p>
                    </div> <!-- Flex -->
                </div>
                <div class="product__desc-row">
                    <div class="product__desc-col">
                        <ul class="product__desc-list">
                            <li class="product__desc-item">Фіча 1</li>
                            <li class="product__desc-item">Фіча 2</li>
                            <li class="product__desc-item">Фіча 3</li>
                        </ul>
                        <!-- Загуглить як робляться ці вогники/зірочки -->
                    </div>
                    <div class="product__desc-col">
                        <p class="product__item-price" style="font-size: 36px; color: #2a373d;">999<span style="color: #2a373d;">грн</span></p>
                        <a href="#" class="product__desc-btn">оплатити</a>
                    </div> <!-- Flex -->
                </div>
            </div>
        </div>
        <div class="default-title__wrapper" style="position: relative; bottom: 55px; margin: 0">
            <h2 class="default-title" id="merch-page-title">новинки</h2>
            <hr>
        </div>
        <div class="product__list-wrapper" id="merchCategories">
            <ul class="product__list" id="new">
                <li class="product__item">
                    <div class="product__item-row">
                        <img src="../test/phone.png" alt="Картинка товару" class="product__item-image">
                    </div>
                    <div class="product__item-row">
                        <h2 class="product__item-name">Телефон</h2>
                        <div class="product__item-row" style="display: flex; flex-direction: row; align-items: center">
                            <p class="product__item-price">999<span>$</span></p>
                            <a href="javascript:void(0)" class="product__item-btn" onclick="showDetails()">купити</a>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="product__list" id="clothes">
                <li class="product__item">
                    <div class="product__item-row">
                        <img src="../test/tshirt.png" alt="Картинка товару" class="product__item-image">
                    </div>
                    <div class="product__item-row">
                        <h2 class="product__item-name">Футболка</h2>
                        <div class="product__item-row" style="display: flex; flex-direction: row; align-items: center">
                            <p class="product__item-price">999<span>$</span></p>
                            <a href="javascript:void(0)" class="product__item-btn" onclick="showDetails()">купити</a>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="product__list" id="stickers">
                <li class="product__item">
                    <div class="product__item-row">
                        <img src="../test/stickers.png" alt="Картинка товару" class="product__item-image">
                    </div>
                    <div class="product__item-row">
                        <h2 class="product__item-name">Стікери</h2>
                        <div class="product__item-row" style="display: flex; flex-direction: row; align-items: center">
                            <p class="product__item-price">999<span>$</span></p>
                            <a href="javascript:void(0)" class="product__item-btn" onclick="showDetails()">купити</a>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="product__list" id="books">
                <li class="product__item">
                    <div class="product__item-row">
                        <img src="../test/book.png" alt="Картинка товару" class="product__item-image">
                    </div>
                    <div class="product__item-row">
                        <h2 class="product__item-name">Книга</h2>
                        <div class="product__item-row" style="display: flex; flex-direction: row; align-items: center">
                            <p class="product__item-price">999<span>$</span></p>
                            <a href="javascript:void(0)" class="product__item-btn" onclick="showDetails()">купити</a>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="product__list" id="flags">
                <li class="product__item">
                    <div class="product__item-row">
                        <img src="../test/flag.png" alt="Картинка товару" class="product__item-image">
                    </div>
                    <div class="product__item-row">
                        <h2 class="product__item-name">Прапор</h2>
                        <div class="product__item-row" style="display: flex; flex-direction: row; align-items: center">
                            <p class="product__item-price">999<span>$</span></p>
                            <a href="javascript:void(0)" class="product__item-btn" onclick="showDetails()">купити</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </main>

    <?php secondaryFooter() ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/parallax-move.js"></script>
</body>

</html>