<?php
require '../php/blocks.php';
require '../php/connect.php';

$data = $mysql->query("SELECT * FROM `product`");
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
</head>

<body>
    <header class="header">
        <section class="header__info">
            <h1 class="header__info-title">МЕРЧ</h1>
            <h2 class="header__info-event-title" id="eventListButton" onclick="showEventList()">Обрати захід <img src="../images/events/event-list-arrow.png" id="event__list-arrow"></h2>
            <ul class="event__list-mobile">
                <li><a href="#clothes" class="event__link-mobile">ОДЯГ</a></li>
                <li><a href="#boxes" class="event__link-mobile">БОКСИ</a></li>
                <li><a href="#flags" class="event__link-mobile">ПРАПОРИ</a></li>
                <li><a href="#chevrons" class="event__link-mobile">ШЕВРОНИ</a></li>
                <li><a href="#books" class="event__link-mobile">КНИГИ</a></li>
            </ul>
        </section>
        <nav class="event__nav">
            <ul class="event__list">
                <li><a href="#clothes" class="event__link wow fadeInLeft">ОДЯГ</a></li>
                <li><a href="#boxes" class="event__link wow fadeInRight">БОКСИ</a></li>
                <li><a href="#flags" class="event__link wow fadeInLeft">ПРАПОРИ</a></li>
                <li><a href="#chevrons" class="event__link wow fadeInRight">ШЕВРОНИ</a></li>
                <li><a href="#books" class="event__link wow fadeInRight">КНИГИ</a></li>
            </ul>
        </nav>
    </header>
    <?php secondaryHeader() ?>

    <main class="container">

        <?php foreach ($data as $product) {
            $id = $product['id'];
            $name = $product['name'];
            $description = $product['description'];
            $price = $product['cost'];
            $image = $product['image'];
            echo '
            <div class="product__desc-wrapper" id="product-desc' . $id . '">
                <div class="product__desc">
                <a href="javascript:void(0)" class="product__desc-back" onclick="document.getElementById(\'product-desc' . $id . '\').style.display = \'none\'"><img src="../images/events/event-list-arrow.png" alt="Назад"></a>
                    <div class="product__desc-row">
                        <div class="product__desc-col">
                            <img src="../temp/' . $image . '" alt="Картинка товару" id="parallax" class="product__desc-img">
                        </div>
                        <div class="product__desc-col">
                            <h2 class="product__desc-desc">' . $description . '</h2>
                            <!-- Зробити можливість вибору розміру -->
                        </div>
                    </div>
                    <div class="product__desc-row">
                        <h2 class="product__desc-name">' . $name . '</h2>
                        <p class="product__item-price" style="font-size: 36px; color: #2a373d;">' . $price . '<span style="color: #2a373d;">грн</span></p>
                        <form action="./payform.php" method="post">
                            <input type="hidden" name="id" readonly value="' . $id . '">
                            <input type="hidden" name="name" readonly value="' . $name . '">
                            <input type="hidden" name="price" readonly value="' . $price . '">
                            <button type="submit" class="product__desc-btn">оплатити</button>
                        </form>
                    </div>
                </div>
            </div>';
        }
        ?>

        <div class="product__list-wrapper" id="merchCategories">
            <div class="default-title__wrapper" style="position: relative; bottom: 55px; margin-top: -5px">
                <h2 class="default-title" id="merch-page-title">одяг</h2>
                <hr>
            </div>
            <ul class="product__list" id="clothes">
                <?php
                foreach ($data as $product) {
                    $id = $product['id'];
                    $name = $product['name'];
                    $price = $product['cost'];
                    $image = $product['image'];
                    $type = $product['type'];
                    if ($type == "clothe") {
                        echo '
                            <li class="product__item">
                                <div class="product__item-row">
                                    <img src="../temp/' . $image . '" alt="Картинка товару" class="product__item-image">
                                </div>
                                <div class="product__item-row">
                                    <h2 class="product__item-name">' . $name . '</h2>
                                    <div class="product__item-row" style="display: flex; flex-direction: row; align-items: center">
                                        <p class="product__item-price">' . $price . '<span>грн</span></p>
                                        <a href="javascript:void(0)" id="' . $id . '" class="product__item-btn" onclick="$(\'#product-desc' . $id . '\').fadeIn(); document.getElementById(\'product-desc' . $id . '\').style.display = \'flex\'">купити</a>
                                    </div>
                                </div>
                            </li>
                        ';
                    }
                }
                ?>
            </ul>

            <div class="default-title__wrapper" style="position: relative; bottom: 55px; margin: 0">
                <h2 class="default-title" id="merch-page-title">бокси</h2>
                <hr>
            </div>
            <ul class="product__list" id="boxes">
                <?php
                foreach ($data as $product) {
                    $id = $product['id'];
                    $name = $product['name'];
                    $price = $product['cost'];
                    $image = $product['image'];
                    $type = $product['type'];
                    if ($type == "box") {
                        echo '
                            <li class="product__item">
                                <div class="product__item-row">
                                    <img src="../temp/' . $image . '" alt="Картинка товару" class="product__item-image">
                                </div>
                                <div class="product__item-row">
                                    <h2 class="product__item-name">' . $name . '</h2>
                                    <div class="product__item-row" style="display: flex; flex-direction: row; align-items: center">
                                        <p class="product__item-price">' . $price . '<span>грн</span></p>
                                        <a href="javascript:void(0)" id="' . $id . '" class="product__item-btn" onclick="$(\'#product-desc' . $id . '\').fadeIn(); document.getElementById(\'product-desc' . $id . '\').style.display = \'flex\'">купити</a>
                                    </div>
                                </div>
                            </li>
                        ';
                    }
                }
                ?>
            </ul>
            <div class="default-title__wrapper" style="position: relative; bottom: 55px; margin: 0">
                <h2 class="default-title" id="merch-page-title">прапори</h2>
                <hr>
            </div>
            <ul class="product__list" id="flags">
                <?php
                foreach ($data as $product) {
                    $id = $product['id'];
                    $name = $product['name'];
                    $price = $product['cost'];
                    $image = $product['image'];
                    $type = $product['type'];
                    if ($type == "flag") {
                        echo '
                            <li class="product__item">
                                <div class="product__item-row">
                                    <img src="../temp/' . $image . '" alt="Картинка товару" class="product__item-image">
                                </div>
                                <div class="product__item-row">
                                    <h2 class="product__item-name">' . $name . '</h2>
                                    <div class="product__item-row" style="display: flex; flex-direction: row; align-items: center">
                                        <p class="product__item-price">' . $price . '<span>грн</span></p>
                                        <a href="javascript:void(0)" id="' . $id . '" class="product__item-btn" onclick="$(\'#product-desc' . $id . '\').fadeIn(); document.getElementById(\'product-desc' . $id . '\').style.display = \'flex\'">купити</a>
                                    </div>
                                </div>
                            </li>
                        ';
                    }
                }
                ?>
            </ul>
            <div class="default-title__wrapper" style="position: relative; bottom: 55px; margin: 0">
                <h2 class="default-title" id="merch-page-title">шеврони</h2>
                <hr>
            </div>
            <ul class="product__list" id="chevrons">
                <?php
                foreach ($data as $product) {
                    $id = $product['id'];
                    $name = $product['name'];
                    $price = $product['cost'];
                    $image = $product['image'];
                    $type = $product['type'];
                    if ($type == "chevron") {
                        echo '
                            <li class="product__item">
                                <div class="product__item-row">
                                    <img src="../temp/' . $image . '" alt="Картинка товару" class="product__item-image">
                                </div>
                                <div class="product__item-row">
                                    <h2 class="product__item-name">' . $name . '</h2>
                                    <div class="product__item-row" style="display: flex; flex-direction: row; align-items: center">
                                        <p class="product__item-price">' . $price . '<span>грн</span></p>
                                        <a href="javascript:void(0)" id="' . $id . '" class="product__item-btn" onclick="$(\'#product-desc' . $id . '\').fadeIn(); document.getElementById(\'product-desc' . $id . '\').style.display = \'flex\'">купити</a>
                                    </div>
                                </div>
                            </li>
                        ';
                    }
                }
                ?>
            </ul>
            <div class="default-title__wrapper" style="position: relative; bottom: 55px; margin: 0">
                <h2 class="default-title" id="merch-page-title">книги</h2>
                <hr>
            </div>
            <ul class="product__list" id="books">
                <?php
                foreach ($data as $product) {
                    $id = $product['id'];
                    $name = $product['name'];
                    $price = $product['cost'];
                    $image = $product['image'];
                    $type = $product['type'];
                    if ($type == "book") {
                        echo '
                            <li class="product__item">
                                <div class="product__item-row">
                                    <img src="../temp/' . $image . '" alt="Картинка товару" class="product__item-image">
                                </div>
                                <div class="product__item-row">
                                    <h2 class="product__item-name">' . $name . '</h2>
                                    <div class="product__item-row" style="display: flex; flex-direction: row; align-items: center">
                                        <p class="product__item-price">' . $price . '<span>грн</span></p>
                                        <a href="javascript:void(0)" id="' . $id . '" class="product__item-btn" onclick="$(\'#product-desc' . $id . '\').fadeIn(); document.getElementById(\'product-desc' . $id . '\').style.display = \'flex\'">купити</a>
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
    <script>

    </script>
</body>

</html>