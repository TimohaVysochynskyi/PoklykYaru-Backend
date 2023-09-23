<?php
// Підключення до бази даних
require '../connect.php';

// Отримання повідомлень з бази даних
$sql = "SELECT * FROM `help-mail`";
$result = $conn->query($sql);


// Виведення повідомлень
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($row["status"] == 'unread') {
            echo "<li>
                <div>
                    <b>&nbsp" . $row["name"] . "</b><br>
                    <b>Пошта: </b>" . $row["email"] . "<br>
                    <b>Повідомлення: </b>" . $row["message"] . "
                </div>
                <div>
                    <button class=\"help-msg-btn-read\" id='" . $row['id'] . "' onclick=\"
                        let id = $(this).attr('id');
                        $.ajax({
                            url: './validation/mail/read.php',
                            type: 'POST',
                            data: {
                                id: id
                            },
                            success: function(data) {
                                $('#help-msg-box').load('./validation/mail/get_messages.php');
                            }
                        });
                    \"><img src='./validation/mail/eye.png' alt='read'></button>
                    
                    <button class=\"help-msg-btn-del\" id='" . $row['id'] . "' onclick=\"
                        let id = $(this).attr('id');
                        $.ajax({
                            url: './validation/mail/delete.php',
                            type: 'POST',
                            data: {
                                id: id
                            },
                            success: function(data) {
                                $('#help-msg-box').load('./validation/mail/get_messages.php');
                            }
                        });
                    \"><img src='./validation/mail/trash-can.png' alt='delete'></button>
                </div>
            </li>";
        }
    }
} else {
    echo "Поки що немає повідомлень.";
}

$conn->close();
