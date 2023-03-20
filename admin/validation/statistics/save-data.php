<?php

$conn = new mysqli('localhost', 'root', '', 'poklykyaru');



// перевіряємо з'єднання з базою даних
if (!$conn) {
    die("Помилка з'єднання з базою даних: " . mysqli_connect_error());
}

// отримуємо дані з AJAX-запиту
$timeSpent = $_POST['time_spent'];

// додаємо дані про час перебування до бази даних
$sql = "INSERT INTO statistics (time_spent) VALUES ('$timeSpent')";

if (mysqli_query($conn, $sql)) {
    echo "Дані успішно збережені до бази даних!";
} else {
    echo "Помилка збереження даних до бази даних: " . mysqli_error($conn);
}

// закриваємо з'єднання з базою даних
mysqli_close($conn);
?>
