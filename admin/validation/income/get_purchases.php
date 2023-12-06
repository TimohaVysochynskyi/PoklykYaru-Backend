<?php
// Підключення до бази даних
require '../connect.php';

// Отримання повідомлень з бази даних
mysqli_set_charset($conn, "utf8mb4");
$sql = "SELECT * FROM `purchase` ORDER BY `date` DESC";
$result = $conn->query($sql);


// Виведення зщамовлень
if ($result->num_rows > 0) {
    echo "
        <table> <tr><th>Товар</th> <th>Ціна</th> <th>Розмір</th> <th>Замовник</th> <th>Телефон</th> <th>Область/місто</th> <th>Відділення НП</th> <th>Дата</th> <th></th></tr>";
            foreach ($result as $row) {
                echo "
                    <tr>
                        <td>".$row['product']."</td>
                        <td>".$row['price']."</td>
                        <td>".$row['size']."</td>
                        <td>".$row['name']."</td>
                        <td>".$row['phone']."</td>
                        <td>".$row['city']."</td>
                        <td>".$row['np']."</td>
                        <td>".$row['date']."</td>
                        <td>
                            <button class=\"help-msg-btn-del\" id='" . $row['id'] . "' onclick=\"
                                let id = $(this).attr('id');
                                $.ajax({
                                    url: './validation/income/delete_purchase.php',
                                    type: 'POST',
                                    data: {
                                        id: ".$row['id']."
                                    },
                                    success: function(data) {
                                        $('#purchases-box').load('./validation/income/get_purchases.php');
                                    }
                                });
                            \"><img src='./validation/mail/trash-can.png' alt='delete'></button>
                        </td>
                    </tr>
                ";
            }
            
    echo "</table>";
} else {
    echo "Поки що немає замовлень.";
}

$conn->close();
