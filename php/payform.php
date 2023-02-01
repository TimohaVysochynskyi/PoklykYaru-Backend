<?php

require_once "../vendor/autoload.php";
require "./connect.php";

$stripe = new \Stripe\StripeClient("sk_test_51M0i6fA98pVLsS87VeLApCzrQwuPYAoRmRPpO1TYUBiPxBylbRgIEuxCwkeYDOAQWRc9l8Mjh2KeqVGHuBJyPLm700OXQ6u4Dh");

$id = strip_tags($_POST['id']);
$name = strip_tags($_POST['name']);
$amount = strip_tags($_POST['price']);

$data = $mysql->query("SELECT * FROM `product` WHERE `id` = '$id' AND `name` = '$name' AND `cost` = '$amount'");

$productData = $data->fetch_assoc();

$databaseID = $productData['id'];
$databaseName = $productData['name'];
$databaseAmount = $productData['cost'];

if ($databaseID == $id && $databaseAmount == $amount) {
    $payment_intent = $stripe->paymentIntents->create([
        'payment_method_types' => ['card'],

        // convert double to integer for stripe payment intent, multiply by 100 is required for stripe
        'amount' => round($amount) * 100,
        'currency' => 'uah',
        'description' => $name
    ]);
} else {
    echo 'Невідома помилка';
}

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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../images/header&footer/logo.ico">
    <link rel="stylesheet" href="../css/payform.css">
</head>

<body>

    <?php if ($databaseID == $id && $databaseAmount == $amount) : ?>

        <!--Preloader-->
        <div class="preloader" id="preloader">
            <!--<div class="preloader-eraser"></div>-->
            <img src="../images/header&footer/preloader.gif" class="preloader__gif">
        </div>


        <section class="pay-page">
            <input type="hidden" id="stripe-public-key" value="pk_test_51M0i6fA98pVLsS87iVeAGG8lnuxyix9XkTwwlcqpf84xVshI2EyyPUOrI757wHuDRM5B0n5lQHVlLdIJ0jeKIYLa00n271IKur" />
            <input type="hidden" id="stripe-payment-intent" value="<?php echo $payment_intent->client_secret; ?>" />

            <!-- credit card UI will be rendered here -->
            <div class="pay-wrapper">
                <div class="pay-menu">
                    <h2 class="pay-title" id="pay-title">Заповніть ці поля!</h2>
                    <div class="stripe-elements-wrapper">
                        <div id="stripe-card-element"></div>
                        <input type="text" id="user-name" name="phone" placeholder="Номер телефону" />
                        <input type="email" id="user-email" name="email" placeholder="Електронна пошта" />
                    </div>
                    <button type="button" id="pay-money" name="pay-money" class="pay-button" onclick="payViaStripe();">Оплатити</button>
                </div>
            </div>

            <!-- billing details is required for some countries -->
            <input type="hidden" id="user-mobile-number" value="123456789" />
        </section>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://js.stripe.com/v3/"></script>
        <script src="../js/payform.js"></script>
    <? else : ?>
        <h1>Щось пішло не так(</h1>

        <head>
            <meta http-equiv="refresh" content="1;URL=./error.html" />
        </head>
    <? endif; ?>

</body>

</html>