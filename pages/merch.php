<?php
require '../php/blocks.php';
require '../php/connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Поклик Яру | Мерч</title>
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

        <?php foreach ($products as $productID => $attributes) {
            echo '
            <div class="product__desc-wrapper" id="product-desc'.$attributes['id'].'">
                <a href="javascript:void(0)" class="product__desc-back" onclick="closeDetails()"><img src="../images/events/event-list-arrow.png" alt="Назад"></a>
                <div class="product__desc">
                    <div class="product__desc-row">
                        <div class="product__desc-col">
                            <img src="../test/'.$attributes['image'].'" alt="Картинка товару" id="parallax" class="product__desc-img">
                        </div>
                        <div class="product__desc-col">
                            <h2 class="product__desc-name">'.$attributes['title'].'</h2>
                            <p class="product__desc-desc">&nbsp'.$attributes['description'].'</p>
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
                            <p class="product__item-price" style="font-size: 36px; color: #2a373d;">'.$attributes['price'].'<span style="color: #2a373d;">грн</span></p>
                            <form action="../assets/stripeIPN.php?id=' . $productID . '" method="POST">
                                <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="' . $stripeDetails['publishableKey'] . '" data-amount="' . $attributes['price'] * 100 . '" data-name="' . $attributes['title'] . '" data-description="Widget" data-image="https://stripe.com/img/documentation/checkout/marketplace.png" data-locale="auto">
                                </script>
                            </form>
                        </div> <!-- Flex -->
                    </div>
                </div>
            </div>';
        }
        ?>

        <div class="default-title__wrapper" style="position: relative; bottom: 55px; margin: 0">
            <h2 class="default-title" id="merch-page-title">новинки</h2>
            <hr>
        </div>
        <div class="product__list-wrapper" id="merchCategories">
            <ul class="product__list" id="new">
                <?php
                foreach ($products as $productID => $attributes) {
                    if ($attributes['type'] == "new") {
                        echo '
                            <li class="product__item">
                                <div class="product__item-row">
                                    <img src="../test/' . $attributes['image'] . '" alt="Картинка товару" class="product__item-image">
                                </div>
                                <div class="product__item-row">
                                    <h2 class="product__item-name">' . $attributes['title'] . '</h2>
                                    <div class="product__item-row" style="display: flex; flex-direction: row; align-items: center">
                                        <p class="product__item-price">' . $attributes['price'] . '<span>грн</span></p>
                                        <a href="javascript:void(0)" id="' . $attributes['id'] . '" class="product__item-btn" onclick="showDetails()">купити</a>
                                    </div>
                                </div>
                            </li>
                        ';
                    }
                }
                ?>
            </ul>
            <ul class="product__list" id="clothes">
                <?php
                foreach ($products as $productID => $attributes) {
                    if ($attributes['type'] == "clothe") {
                        echo '
                            <li class="product__item">
                                <div class="product__item-row">
                                    <img src="../test/' . $attributes['image'] . '" alt="Картинка товару" class="product__item-image">
                                </div>
                                <div class="product__item-row">
                                    <h2 class="product__item-name">' . $attributes['title'] . '</h2>
                                    <div class="product__item-row" style="display: flex; flex-direction: row; align-items: center">
                                        <p class="product__item-price">' . $attributes['price'] . '<span>грн</span></p>
                                        <a href="javascript:void(0)" id="' . $attributes['id'] . '" class="product__item-btn" onclick="showDetails()">купити</a>
                                    </div>
                                </div>
                            </li>
                        ';
                    }
                }
                ?>
            </ul>
            <ul class="product__list" id="stickers">
                <?php
                foreach ($products as $productID => $attributes) {
                    if ($attributes['type'] == "sticker") {
                        echo '
                            <li class="product__item">
                                <div class="product__item-row">
                                    <img src="../test/' . $attributes['image'] . '" alt="Картинка товару" class="product__item-image">
                                </div>
                                <div class="product__item-row">
                                    <h2 class="product__item-name">' . $attributes['title'] . '</h2>
                                    <div class="product__item-row" style="display: flex; flex-direction: row; align-items: center">
                                        <p class="product__item-price">' . $attributes['price'] . '<span>грн</span></p>
                                        <a href="javascript:void(0)" id="' . $attributes['id'] . '" class="product__item-btn" onclick="showDetails()">купити</a>
                                    </div>
                                </div>
                            </li>
                        ';
                    }
                }
                ?>
            </ul>
            <ul class="product__list" id="books">
                <?php
                foreach ($products as $productID => $attributes) {
                    if ($attributes['type'] == "book") {
                        echo '
                            <li class="product__item">
                                <div class="product__item-row">
                                    <img src="../test/' . $attributes['image'] . '" alt="Картинка товару" class="product__item-image">
                                </div>
                                <div class="product__item-row">
                                    <h2 class="product__item-name">' . $attributes['title'] . '</h2>
                                    <div class="product__item-row" style="display: flex; flex-direction: row; align-items: center">
                                        <p class="product__item-price">' . $attributes['price'] . '<span>грн</span></p>
                                        <a href="javascript:void(0)" id="' . $attributes['id'] . '" class="product__item-btn" onclick="showDetails()">купити</a>
                                    </div>
                                </div>
                            </li>
                        ';
                    }
                }
                ?>
            </ul>
            <ul class="product__list" id="flags">
                <?php
                foreach ($products as $productID => $attributes) {
                    if ($attributes['type'] == "flag") {
                        echo '
                            <li class="product__item">
                                <div class="product__item-row">
                                    <img src="../test/' . $attributes['image'] . '" alt="Картинка товару" class="product__item-image">
                                </div>
                                <div class="product__item-row">
                                    <h2 class="product__item-name">' . $attributes['title'] . '</h2>
                                    <div class="product__item-row" style="display: flex; flex-direction: row; align-items: center">
                                        <p class="product__item-price">' . $attributes['price'] . '<span>грн</span></p>
                                        <a href="javascript:void(0)" id="' . $attributes['id'] . '" class="product__item-btn" onclick="showDetails()">купити</a>
                                    </div>
                                </div>
                            </li>
                        ';
                    }
                }
                ?>
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
    <script>
        document.querySelector('.stripe-button-el > span').style.fontSize = "0px";
        document.querySelector('.stripe-button-el').innerText = "купити";

        const buttons = document.getElementsByClassName("product__item-btn");
        const buttonPressed = e => {
            window.buttonID = e.target.id;
        }
        for (let button of buttons) {
            button.addEventListener("click", buttonPressed);
        }
        
        function showDetails() { 
            $('#product-desc'+buttonID).fadeIn("slow");
            document.getElementById('product-desc'+buttonID).style.display = "flex";
        }
        function closeDetails(){ 
            $('.product__desc-wrapper').fadeOut("fast");
        }

    </script>
</body>

</html>