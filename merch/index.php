<?php
require '../php/blocks.php';
require '../php/connect.php';

$data = $mysql->query("SELECT DISTINCT `type` FROM `product`");
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
    <link rel="stylesheet" href="./style.css">
    <script src="https://cdn.jsdelivr.net/npm/lozad"></script>
</head>

<body>

    <!--Preloader-->
    <!--<div class="preloader" id="preloader">
        <img src="../images/header&footer/preloader.gif" class="preloader__gif">
    </div>-->
    <div class="desc-preloader-wrapper">
        <div class="desc-preloader"></div>
    </div>


    <header class="header">
        <section class="header__info">
            <h1 class="header__info-title">МЕРЧ</h1>
            <h2 class="header__info-event-title" id="eventListButton" onclick="showEventList()">Обрати відділ <img
                    src="../images/events/event-list-arrow.png" id="event__list-arrow"></h2>
            <ul class="event__list-mobile">
                <li><a href="#clothe" class="event__link-mobile">ОДЯГ</a></li>
                <li><a href="#box" class="event__link-mobile">БОКСИ</a></li>
                <li><a href="#flag" class="event__link-mobile">ПРАПОРИ</a></li>
                <li><a href="#chevron" class="event__link-mobile">ШЕВРОНИ</a></li>
                <li><a href="#book" class="event__link-mobile">КНИГИ</a></li>
            </ul>
        </section>
        <nav class="event__nav">
            <ul class="event__list">
                <li><a href="#clothe" class="event__link wow fadeInLeft">ОДЯГ</a></li>
                <li><a href="#box" class="event__link wow fadeInRight">БОКСИ</a></li>
                <li><a href="#flag" class="event__link wow fadeInLeft">ПРАПОРИ</a></li>
                <li><a href="#chevron" class="event__link wow fadeInRight">ШЕВРОНИ</a></li>
                <li><a href="#book" class="event__link wow fadeInRight">КНИГИ</a></li>
            </ul>
        </nav>
    </header>
    <?php secondaryHeader() ?>

    <main class="container">

        <div id="merch-onclick-window"></div>

        <div class="product__list-wrapper" id="merchCategories">

            <?php
            foreach ($data as $row) {
                $type = $row['type'];

                switch ($type) {
                    case "clothe":
                        $displayType = "одяг";
                        break;
                    case "box":
                        $displayType = "бокси";
                        break;
                    case "flag":
                        $displayType = "прапори";
                        break;
                    case "chevron":
                        $displayType = "шеврони";
                        break;
                    case "book":
                        $displayType = "книги";
                        break;
                    default:
                        $displayType = "інше";
                        break;
                }

                echo '
                        <div class="default-title__wrapper">
                            <h2 class="default-title" id="merch-page-title">' . $displayType . '</h2> <hr>
                        </div>
                    ';

                $result_products = $mysql->query("SELECT * FROM `product` WHERE `type` = '$type'");

                echo '<ul class="product__list" id="' . $type . '">';
                foreach ($result_products as $product) {
                    $id = $product['id'];
                    $name = $product['name'];
                    $price = $product['cost'];
                    $finalPrice = $price;
                    if ($price == 0) {
                        $finalPrice = "〜";
                    }
                    $type = $product['type'];

                    $image = $product['image'];
                    $image_arr = explode("|", $image);

                    echo '
                        <li class="product__item wow fadeInUp">
                            <div class="product__item-row">
                                <img src="../temp/' . $image_arr[0] . '" alt="Картинка товару" class="product__item-image">
                            </div>
                            <div class="product__item-row">
                                <h2 class="product__item-name">' . $name . '</h2>
                                <div class="product__item-row" style="display: flex; flex-direction: row; align-items: center">
                                <p class="product__item-price">' . $finalPrice . '<span>грн</span></p>
                                <a href="javascript:void(0)" id="' . $id . '" class="product__item-btn wow fadeInRight" 
                                        onclick="$(\'#merch-onclick-window\').load(\'./get_merch_details\', {
                                            Id:' . $id . ', 
                                            Price:' . $price . ',
                                            FinalPrice:\'' . $finalPrice . '\',
                                        });"
                                    >купити</a>
                                </div>
                            </div>
                    ';
                }
                echo '</ul>';
            }
            ?>

        </div>
    </main>

    <?php secondaryFooter() ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        new WOW().init();
        /*window.onload = setTimeout(function () {
            $("#preloader").slideUp("slow");
                document.querySelector('body').style.overflow = "scroll";
        }, 2500);*/
        $(document).ready(function () {
            $('.desc-preloader-wrapper').hide();
            $('.product__item-btn').click(function () {
                $('html').css('overflow-y', 'hidden');
                $('.desc-preloader-wrapper').show();
            });
        });
    </script>
    <script src="../js/script.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>