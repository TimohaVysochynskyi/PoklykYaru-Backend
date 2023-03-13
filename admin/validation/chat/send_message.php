<?php
// Підключення до бази даних

include '../connect.php';


// Отримання даних з форми
$username = $_POST["username"];
$message = $_POST["message"];

// Вставка даних до бази даних
$sql = "INSERT INTO messages (username, message) VALUES ('$username', '$message')";
if ($conn->query($sql) === FALSE) {
	echo "Помилка: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
