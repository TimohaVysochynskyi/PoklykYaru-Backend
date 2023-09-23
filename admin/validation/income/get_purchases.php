<?php
// Підключення до бази даних
require '../connect.php';

// Отримання повідомлень з бази даних
mysqli_set_charset($conn, "utf8mb4");
$sql = "SELECT * FROM `purchase`";
$result = $conn->query($sql);


// Виведення зщамовлень
if ($result->num_rows > 0) {
    echo "
        <table> <tr> <th>№</th> <th>Товар</th> <th>Ціна</th> <th>Розмір</th> <th>Замовник</th> <th>Телефон</th> <th>Область/місто</th> <th>Відділення НП</th> <th>Дата</th> <th></th></tr>";
            foreach ($result as $row) {
                var_dump($row);
                echo "
                    <tr>
                        <td>".$row['id']."</td>
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
                                        id: id
                                    },
                                    success: function(data) {
                                        $('#help-msg-box').load('./validation/income/get_purchases.php');
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
