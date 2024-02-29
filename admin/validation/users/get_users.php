<?php
// Підключення до бази даних
require '../connect.php';

$result = $conn->query("SELECT * FROM `admin`");

// Виведення користувачів
$number = 0;
if ($result->num_rows > 0) {
    echo "
        <table> <tr><th>№</th> <th>Ім'я</th> <th>Логін</th> <th>Електронна адреса</th> <th>Телеграм</th></tr>";
    foreach ($result as $row) {
        $number++;
        echo "
            <tr>
                <td>" . $number . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['login'] . "</td>
                <td><a href='mailto:" . $row['email'] . "' target='blank'>" . $row['email'] . "</a></td>
                <td>
                    <a href='https://t.me/" . $row['contact'] . "' target='blank'>" . $row['contact'] . "</a>
                </td>
            </tr>
        ";
    }

    echo "</table>";
} else {
    echo "<p align='center'>Немає користувачів у базі даних</p>";
}

$conn->close();
