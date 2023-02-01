<?php
require '../php/connect.php';
$data = $mysql->query("SELECT * FROM `product`");

$aName = $_POST['a-name'];
$aDescription = $_POST['a-description'];
$aCost = $_POST['a-cost'];
$aType = $_POST['a-type'];


/*$eName = $_POST['e-name'];
$eDescription = $_POST['e-description'];
$eCost = $_POST['e-cost'];
$id = $_COOKIE['editing-started'];*/

$aFilename = $_FILES['a-image']["name"];
$aTempname = $_FILES['a-image']["tmp_name"];
$folder = "../temp/" . $aFilename;

if (isset($_POST['add-product'])) {
    $mysql->query("INSERT INTO `product` (`name`, `description`, `cost`, `heart`, `image`, `type`) 
    VALUES ('$aName', '$aDescription', '$aCost', 0, '$aFilename', '$aType')");
    if (move_uploaded_file($aTempname, $folder)) {
        //echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        //echo "<h3>  Failed to upload image!</h3>";
    }
    header("Location: ./merch.php");
}

/*if (isset($_POST['confirm-edit-product'])) {
    $mysql->query("UPDATE `product` 
		SET `name` = '$eName', `description` = '$eDescription', `cost` = '$eCost' WHERE `id` = '$id'");
    unset($_COOKIE['editing-started']);
    setcookie('editing-started', '', time() - 3600 * 24 * 7, '/');
}*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Адмін панель | Мерч</title>
    <link rel="stylesheet" href="./admin.css">
</head>

<body>
    <div class="product-coop-window" id='add-product'>
        <form action="#" method="post" class="product-coop-form" enctype="multipart/form-data">
            <a href="#" class="product-coop-cross" onclick=closePopUp() id='product-coop-cross'>+</a>
            <h2 class="product-coop-title">Додавання нового мерчу</h1>
                <input type="text" class="form-control" name="a-name" placeholder="Назва нової бази">
                <textarea name="a-description" class="form-control" placeholder="Опис цієї найкрутішої в світі мерчинки"></textarea>
                <input type="number" class="form-control" name="a-cost" placeholder="Скіки монейс (грн)">
                <label for="a-type" class="product-coop__type" style="float: left;">Тип товару: </label>
                <select name="a-type" class="product-coop__type product-type">
                    <option value="new">Новинка</option>
                    <option value="clothe">Одяг</option>
                    <option value="sticker">Стікери</option>
                    <option value="book">Книги</option>
                    <option value="flag">прапор</option>
                </select>
                <input type="file" class="form-control" name="a-image" placeholder="Картинка">
                <button type="submit" class="form-button" name="add-product">Додати</button>
        </form>
    </div>

    <header class="header">
        <nav class="header__nav">
            <ul class="header__list">
                <li class="header__item"><a href="./main.php" class="header__link"><img src="../images/events/event-list-arrow.png" alt="Головна"></a></li>
                <li class="header__item"><a href="#" class="header__link">Мерч</a></li>
                <li class="header__item"><a href="#" class="header__link">Платежі</a></li>
                <li class="header__item"><a href="#" class="header__link">Реєстрація</a></li>
                <li class="header__item"><a href="./statistics.html" class="header__link">Статистика</a></li>
                <li class="header__item"><a href="#" class="header__link">База даних</a></li>
                <li class="header__item"><a href="#" class="header__link">Повідомити про проблему</a></li>
            </ul>
        </nav>
    </header>

    <main class="container">
        <div class="product-wrapper">
            <?php
            foreach ($data as $product) {
                $id = $product['id'];
                $name = $product['name'];
                $description = $product['description'];
                $price = $product['cost'];
                $image = $product['image'];
                $type = $product['type'];
                echo '
                    <div class="product">
                        <form action="#" method="post">
                            <button type="submit" class="delete-btn" name="delete-product' . $id . '"><img src="./images/disposal.png"></button>
                        </form>
                        <div class="product__col" style="padding: 20px">
                            <img src="../temp/' . $image . '" class="product__img">
                        </div>
                        <div class="product__col" style="padding: 20px">
                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="text" name="e-name" class="form-control merch-input" value="' . $name . '" placeholder="Назва">
                                <textarea name="e-description" class="form-control merch-input" placeholder="Опис">' . $description . '</textarea>
                                <input type="file" class="form-control merch-input" name="e-image" value="'.$image.'">
                                <div class="product__row">
                                    <input type="number" name="e-cost" class="form-control merch-input" value="' . $price . '" placeholder="Ціна">
                                    <button type="submit" class="product__btn" name="edit-product' . $id . '">Редагувати</button>
                                </div>
                            </form>
                        </div>
                    </div>
                ';
                if (isset($_POST['delete-product' . $id])) {
                    $mysql->query("DELETE FROM `product` WHERE `id` = '$id' AND `cost` = '$price'");
                    if (file_exists("../temp/" . $image)) {
                        unlink("../temp/" . $image);
                    }
                    header("Location: ./merch.php");
                }

                if (isset($_POST['edit-product' . $id])) {
                    $eName = strip_tags($_POST['e-name']);
                    $eDescription = strip_tags($_POST['e-description']);
                    $ePrice = strip_tags($_POST['e-cost']);

                    if (file_exists("../temp/" . $image)) {
                        unlink("../temp/" . $image);
                    }

                    $eFilename = $_FILES['e-image']["name"];
                    $eTempname = $_FILES['e-image']["tmp_name"];
                    $folder = "../temp/" . $eFilename;

                    $mysql->query("UPDATE `product` SET `name` = '$eName', `description` = '$eDescription', `cost` = '$ePrice', `heart` = 0, `image` = '$eFilename' WHERE `id` = '$id' AND `cost` = '$price'");

                    move_uploaded_file($eTempname, $folder);

                    header("Location: ./merch.php");
                }
            }
            ?>
        </div>
    </main>

    <a href="#" class="add-btn" onclick="addProduct()"><img src="../images/cross.png" alt="Додати"></a>

    <!--<footer class="footer">
        <p>Адмін панель була зроблена Замом, Доном і Яриком</p>
    </footer>-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./script.js"></script>
</body>

</html>