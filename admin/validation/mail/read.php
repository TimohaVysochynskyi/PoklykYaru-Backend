<?php

// Підключення до бази даних
include '../connect.php';

// Отримання ID елемента для видалення
$id = $_POST['id'];

// Виконання запиту для видалення елемента з бази даних
$sql = "UPDATE `help-mail` SET `status` = 'read' WHERE `id` = '$id'";
if ($conn->query($sql) === TRUE) {
    echo "Повідомлення прочитано";
} else {
    echo "Помилка: " . $conn->error;
}
$conn->close();
