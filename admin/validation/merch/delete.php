<?php

// Підключення до бази даних
include '../connect.php';

// Отримання ID елемента для видалення
$id = $_POST['id'];

// Отримання масиву картинок
$data = $conn->query("SELECT `image` FROM `product` WHERE `id` = '$id'");
$imageData = $data->fetch_assoc();
$imageData = $imageData['image'];
$imageArr = explode("|", $imageData);

$folder = "../../../temp/";

foreach ($imageArr as $image) {
    unlink($folder . $image);
}

// Виконання запиту для видалення елемента з бази даних
$sql = "DELETE FROM `product` WHERE `id` = '$id'";
if ($conn->query($sql) === TRUE) {
    echo "Мерчинку видалено";
} else {
    echo "Помилка: " . $conn->error;
}
$conn->close();
