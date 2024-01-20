<?php

require '../connect.php';

$name = $_POST['e-name'];
$description = $_POST['e-desc'];
$price = strip_tags($_POST['e-cost']);
$size = strip_tags($_POST['e-size']);
$id = strip_tags($_POST['e-id']);

$conn->query("UPDATE `product` 
    SET `name` = '$name', `description` = '$description', `cost` = '$price', `size` = '$size' WHERE `id` = '$id'");
