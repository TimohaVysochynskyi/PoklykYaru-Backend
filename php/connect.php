<?php

$mysql = new mysqli('localhost', 'root', 'root', 'poklykyaru');
//$mysql = new mysqli('sql304.byethost22.com', 'b22_32947244', 'xfd89zmn', 'b22_32947244_poklykyaru');

require_once "../assets/stripe-php-master/init.php";

$data = $mysql->query("SELECT * FROM `product`");
$products = array();

foreach ($data as $product) {
    //Push data
    array_push(
        $products,
        array(
            "id" => $product['id'],
            "title" => $product['name'],
            "description" => $product['description'],
            "image" => $product['image'],
            "price" => $product['cost'],
            "hearts" => $product['heart'],
            "type" => $product['type']
        )
    );
}

$stripeDetails = array(
    "secretKey" => "sk_test_51M0i6fA98pVLsS87VeLApCzrQwuPYAoRmRPpO1TYUBiPxBylbRgIEuxCwkeYDOAQWRc9l8Mjh2KeqVGHuBJyPLm700OXQ6u4Dh",
    "publishableKey" => "pk_test_51M0i6fA98pVLsS87iVeAGG8lnuxyix9XkTwwlcqpf84xVshI2EyyPUOrI757wHuDRM5B0n5lQHVlLdIJ0jeKIYLa00n271IKur"
);

// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey($stripeDetails['secretKey']);
