<?php
require "../php/connect.php";

$botToken = '6655658454:AAG7a55D35t07Wm0JVYO3GrUj4q1wEEefyo';

$product = strip_tags($_POST['product']);
$price = strip_tags($_POST['price']);
$size = strip_tags($_POST['size']);
$name = strip_tags($_POST['name']);
$phone = strip_tags($_POST['phone']);
$city = strip_tags($_POST['city']);
$np = strip_tags($_POST['np']);

$mysql->query("INSERT INTO `purchase` (`product`, `price`, `size`, `name`, `phone`, `city`, `np`, `date`) 
    VALUES ('$product', '$price', '$size', '$name', '$phone', '$city', '$np', NOW())");

$notificationContent = 'НОВЕ ЗАМОВЛЕННЯ! ' . $product . '; Ім\'я: ' . $name . '; Ціна: ' . $price . '; Розмір: ' . $size . '; Телефон: ' . $phone . '; НП: ' . $np;

$notification = [
    'chat_id' => '@purchasesmerch',
    'text' => $notificationContent,
    'parse_mode' => 'HTML'
];

file_get_contents("https://api.telegram.org/bot$botToken/sendMessage?" . http_build_query($notification));


header("Location: ./thanks.html");