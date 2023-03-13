<?php
$conn = new mysqli('localhost', 'root', '', 'poklykyaru');
//$conn = new mysqli('localhost', 'poklukya', 'b1e5gN8gE2', 'poklukya_poklykyaru');

if ($conn->connect_error) {
    die("Помилка з'єднання з базою даних: "/* . $conn->connect_error*/);
}
