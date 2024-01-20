<?php
require "../php/connect.php";
$id = $_POST['Id'];
$price = $_POST['Price'];
$finalPrice = $_POST['FinalPrice'];

$product = $mysql->query("SELECT * FROM `product` WHERE `id` = '$id' AND `cost` = '$price'");
$product = $product->fetch_assoc();

$name = $product['name'];
$description = $product['description'];

$size = $product['size'];
$size_arr = explode(", ", $size);

$image = $product['image'];
$image_arr = explode("|", $image);

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="stylesheet" href="./merch_details.css">
<style>
    :root {
        --swiper-theme-color: #cdcdcd;
    }

    .product__desc-swiper {
        height: 100%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 20px;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 20px;
    }
</style>

<div class="product__desc-wrapper" id="product-desc<?php echo $id ?>">
    <div class="product__desc">
        <a href="javascript:void(0)" class="product__desc-back"
            onclick="document.getElementById('product-desc<?php echo $id ?>').style.display = 'none'"><img
                src="../images/events/event-list-arrow.png" alt="Назад"></a>
        <div class="product__desc-row product__desc-slider-and-text">
            <div class="product__desc-col">
                <div class="swiper product__desc-swiper product__desc-swiper<?php echo $id ?>">
                    <div class="swiper-wrapper">
                        <?php
                        for ($i = 0; $i < count($image_arr); $i++) {
                            if (!empty($image_arr[$i])) {
                                echo '
                                    <div class="swiper-slide">
                                        <img src="../temp/' . $image_arr[$i] . '" alt="Картинка товару" id="parallax" class="product__desc-img">
                                    </div>
                                ';
                            }
                        }
                        ?>
                    </div>
                    <div class="swiper-button-next product__desc-swiper-button-next<?php echo $id ?>"></div>
                    <div class="swiper-button-prev product__desc-swiper-button-prev<?php echo $id ?>"></div>
                    <div class="swiper-pagination product__desc-swiper-pagination<?php echo $id ?>"></div>
                    <script>
                        var imageSwiper<?php echo $id ?> = new Swiper(".product__desc-swiper<?php echo $id ?>", {
                            spaceBetween: 30,
                            centeredSlides: true,
                            autoplay: {
                                delay: 10000,
                                disableOnInteraction: false,
                            },
                            pagination: {
                                el: ".product__desc-swiper-pagination<?php echo $id ?>",
                                clickable: true,
                            },
                            navigation: {
                                nextEl: ".product__desc-swiper-button-next<?php echo $id ?>",
                                prevEl: ".product__desc-swiper-button-prev<?php echo $id ?>",
                            },
                        });

                    </script>
                </div>

            </div>
            <div class="product__desc-col">
                <h2 class="product__desc-desc">
                    <?php echo $description ?>
                </h2>
            </div>
        </div>
        <div class="product__desc-row product__desc-title-and-price" style="margin-top: 10px;">
            <h2 class="product__desc-name">
                <?php echo $name ?>
            </h2>
            <p class="product__item-price" style="font-size: 62px; color: #2a373d;">
                <?php echo $finalPrice ?><span style="color: #2a373d;">грн</span>
            </p>
        </div>
        <form action="./payform" method="post" class="product__desc-form">
            <input type="hidden" name="id" readonly value="<?php echo $id ?>" required>
            <input type="hidden" name="name" readonly value="<?php echo $name ?>" required>
            <?php
            if (count($size_arr) <= 1) {
                echo '<input type="hidden" name="size" readonly value="Стандарт">';
            } else {
                for ($i = 0; $i < count($size_arr); $i++) {
                    if (!empty($size_arr[$i])) {
                        echo '<input type="radio" id="size" name="size" class="product__desc-size" value="' . $size_arr[$i] . '" required><span class="product__desc-size-span">' . $size_arr[$i] . '</span>';
                    }
                }
            }
            ?>
            <input type="hidden" name="price" readonly value="<?php echo $price ?>" required>
            <button type="submit" class="product__desc-btn" onclick="handlePost()">оплатити</button>
        </form>
    </div>

    <script>
        $(document).ready(function () {
            $('#product-desc<?php echo $id ?>').fadeIn();
            $('#product-desc<?php echo $id ?>').css('display', 'flex');
            $('.product__desc-back').click(function () {
                $('html').css('overflow-y', 'visible');
            });
            setTimeout(function () {
                $(".desc-preloader-wrapper").hide();
            }, 100);
        });
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script defer src="./imageSwiper.js"></script>