<?php
// Підключення до бази даних
require '../connect.php';

$show = $_GET['show'];

// Отримання повідомлень з бази даних
mysqli_set_charset($conn, "utf8mb4");

$sql = "SELECT * FROM `purchase` WHERE `status` = '$show' ORDER BY `date` DESC";

if ($show == 2) {
    $sql = "SELECT * FROM `purchase` ORDER BY `date` DESC";
}
$result = $conn->query($sql);

// Виведення зщамовлень
if ($result->num_rows > 0) {
    echo "
        <table> <tr><th>Товар</th> <th>Ціна</th> <th>Розмір</th> <th>Замовник</th> <th>Телефон</th> <th>Область/місто</th> <th>Відділення НП</th> <th>Дата</th> <th>Дія</th></tr>";
    foreach ($result as $row) {
        $archiveStatus = $row['status'];
        if ($archiveStatus) {
            $archiveAction = "archive";
        } else {
            $archiveAction = "unarchive";
        }
        $dateString = $row['date'];
        $date = strtotime($dateString);
        $finalDate = date('d/m/Y h:i', $date);
        echo "
            <tr>
                <td>" . $row['product'] . "</td>
                <td>" . $row['price'] . "</td>
                <td>" . $row['size'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['phone'] . "</td>
                <td>" . $row['city'] . "</td>
                <td>" . $row['np'] . "</td>
                <td>" . $finalDate . "</td>
                <td>
                    <button class=\"help-msg-btn-del\" id='" . $row['id'] . "' onclick=\"
                        let id = $(this).attr('id');
                        $.ajax({
                            url: './validation/income/" . $archiveAction . "_purchase.php',
                            type: 'POST',
                            data: {
                                id: " . $row['id'] . "
                            },
                            success: function(data) {
                                $('#purchases-box').load('./validation/income/get_purchases.php?show=" . $show . "');
                                $('#navigation').load('./validation/income/navigation.php?show=" . $show . "');
                            }
                        });
                    \"><img src='./images/" . $archiveAction . ".png' alt='archive'></button>
                    <button class=\"help-msg-btn-del\" id='" . $row['id'] . "' onclick=\"
                        let id = $(this).attr('id');
                        $.ajax({
                            url: './validation/income/delete_purchase.php',
                            type: 'POST',
                            data: {
                                id: " . $row['id'] . "
                            },
                            success: function(data) {
                                $('#purchases-box').load('./validation/income/get_purchases.php?show=" . $show . "');
                                $('#navigation').load('./validation/income/navigation.php?show=" . $show . "');
                            }
                        });
                    \"><img src='./images/delete.png' alt='delete'></button>
                </td>
            </tr>
        ";
    }

    echo "</table>";
} else {
    echo "<p align='center'>Поки що немає замовлень.</p>";
}

$conn->close();
