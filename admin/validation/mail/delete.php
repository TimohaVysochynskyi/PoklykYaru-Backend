<?php

// Підключення до бази даних
include '../connect.php';

// Отримання ID елемента для видалення
$id = $_POST['id'];

// Виконання запиту для видалення елемента з бази даних
$sql = "DELETE FROM `help-mail` WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    echo "Повідомлення видалено";
} else {
    echo "Помилка: " . $conn->error;
}
$conn->close();
