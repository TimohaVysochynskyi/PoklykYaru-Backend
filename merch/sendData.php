<?php
require "../php/connect.php";

$product = strip_tags($_POST['product']);
$price = strip_tags($_POST['price']);
$size = strip_tags($_POST['size']);
$name = strip_tags($_POST['name']);
$phone = strip_tags($_POST['phone']);
$city = strip_tags($_POST['city']);
$np = strip_tags($_POST['np']);
$date = date("Y.m.d"); 

$mysql->query("INSERT INTO `purchase` (`product`, `price`, `size`, `name`, `phone`, `city`, `np`, `date`) 
    VALUES ('$product', '$price', '$size', '$name', '$phone', '$city', '$np', '$date')");

header("Location: ./thanks.html");