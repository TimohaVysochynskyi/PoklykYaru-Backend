<?php

// Підключення до бази даних
include '../connect.php';

// Отримання ID елемента для видалення
$id = $_POST['id'];

// Виконання запиту для видалення елемента з бази даних
$sql = "DELETE FROM `product` WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    echo "Мерчинку видалено";
} else {
    echo "Помилка: " . $conn->error;
}
$conn->close();
