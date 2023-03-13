<?php
// Підключення до бази даних
require '../connect.php';

// Отримання повідомлень з бази даних
$sql = "SELECT * FROM `messages`";
$result = $conn->query($sql);

// Виведення повідомлень
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<b>" . $row["username"] . ":</b> " . $row["message"] . "<br>";
}
} else {
echo "Поки що немає повідомлень.";
}

$conn->close();
?>