<?php
    require "../php/connect.php";
    $id = $_POST['Id'];
    $price = $_POST['Price'];
    
    $product = $mysql->query("SELECT * FROM `product` WHERE `id` = '$id' AND `cost` = '$price'");
    $product = $product->fetch_assoc();

    $name = $product['name'];
    $description = $product['description'];
    $size = $product['size'];
    $size_arr = explode (", ", $size); 
    $image = $product['image'];

    echo '
        <div class="product__desc-wrapper" id="product-desc' . $id . '">
            <div class="product__desc">
            <a href="javascript:void(0)" class="product__desc-back" onclick="document.getElementById(\'product-desc' . $id . '\').style.display = \'none\'"><img src="../images/events/event-list-arrow.png" alt="Назад"></a>
            <div class="product__desc-row">
                <div class="product__desc-col">
                    <img src="../temp/' . $image. '" alt="Картинка товару" id="parallax" class="product__desc-img">
                </div>
                <div class="product__desc-col">
                    <h2 class="product__desc-desc">' . $description . '</h2>
                </div>
            </div>
            <div class="product__desc-row" style="margin-top: 10px;">
                <h2 class="product__desc-name">' . $name . '</h2>
                <p class="product__item-price" style="font-size: 62px; color: #2a373d;">' . $price . '<span style="color: #2a373d;">грн</span></p>
            </div>
            <form action="./payform" method="post" class="product__desc-form">
                    <input type="hidden" name="id" readonly value="' . $id . '" required>
                    <input type="hidden" name="name" readonly value="' . $name . '" required>';
                    if(count($size_arr) <= 1){
                        echo '<input type="hidden" name="size" readonly value="Стандарт">';
                    } else {
                        for($i = 0; $i < count($size_arr); $i++ ){
                            if(!empty($size_arr[$i])){
                                echo '<input type="radio" id="size" name="size" class="product__desc-size" value="' . $size_arr[$i] . '" required><span class="product__desc-size-span">' . $size_arr[$i] . '</span>';
                            }
                        }
                    }
                    echo '<input type="hidden" name="price" readonly value="' . $price . '" required>
                    <button type="submit" class="product__desc-btn" onclick="handlePost()">оплатити</button>
            </form>
        </div>
        <script>
            $(\'#product-desc' . $id . '\').fadeIn();
            document.getElementById(\'product-desc' . $id . '\').style.display = \'flex\';
        </script>
    ';
?>