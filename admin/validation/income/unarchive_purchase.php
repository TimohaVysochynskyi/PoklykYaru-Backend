<?php

// Підключення до бази даних
include '../connect.php';

// Отримання ID елемента для видалення
$id = $_POST['id'];

// Виконання запиту для видалення елемента з бази даних
$sql = "UPDATE `purchase` SET `status` = 1 WHERE `id` = '$id'";
if ($conn->query($sql) === TRUE) {
    echo "Замовлення розархівовано";
} else {
    echo "Помилка: " . $conn->error;
}
$conn->close();

?>