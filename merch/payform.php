<?php

require "../php/connect.php";

$id = strip_tags($_POST['id']);
$name = strip_tags($_POST['name']);
$size = strip_tags($_POST['size']);
$amount = strip_tags($_POST['price']);

$data = $mysql->query("SELECT * FROM `product` WHERE `id` = '$id' AND `name` = '$name' AND `cost` = '$amount'");

$productData = $data->fetch_assoc();

$databaseID = $productData['id'];
$databaseName = $productData['name'];
$databaseAmount = $productData['cost'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оплата</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../images/header&footer/logo.ico">
    <link rel="stylesheet" href="./payform.css">
</head>

<body>

    <?php if ($databaseID == $id && $databaseAmount == $amount) : ?>

    <div class="pay-wrapper">
        <form action="./sendData.php" method="post" class="tel-form">
            <h2 class="pay-title" id="pay-title">Введіть дані відправки</h2>
            <input type="text" name="name" class="form-control" placeholder="Ім'я та прізвище" required>
            <input type="number" name="phone" class="form-control" placeholder="Телефон" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
            <input type="text" name="city" class="form-control" placeholder="Область/місто" required>
            <input type="text" name="np" class="form-control" placeholder="Відділення Нової пошти" required>
            <input type="hidden" name="product" value="<?php echo $name; ?>" readonly>
            <input type="hidden" name="price" value="<?php echo $amount; ?>" readonly>
            <input type="hidden" name="size" value="<?php echo $size; ?>" readonly>
            <button type="submit" class="form-control" name="tel-btn">Надіслати</button>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="./payform.js"></script>
    <?php else: ?>
    <h1>Щось пішло не так(</h1>

    <!--<head>
        <meta http-equiv="refresh" content="1;URL=./error.html" />
    </head>-->
    <?php endif; ?>

</body>

</html>