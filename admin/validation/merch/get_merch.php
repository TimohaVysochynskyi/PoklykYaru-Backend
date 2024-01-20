<?php
// Підключення до бази даних
require '../connect.php';

// Отримання повідомлень з бази даних
$sql = "SELECT * FROM `product`";
$result = $conn->query($sql);


// Виведення повідомлень
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $imageData = $row['image'];
        $imageArr = explode('|', $imageData);
        echo "
            <li>
                <button class='merch-content__del-btn' id='" . $row['id'] . "' onclick=\"
                    let id = $(this).attr('id');
                    $.ajax({
                        url: './validation/merch/delete.php',
                        type: 'POST',
                        data: {
                            id: id
                        },
                        success: function(data) {
                            $('#merch-content__list').load('./validation/merch/get_merch.php');
                        }
                    });
                \"><img src='./images/delete.png' alt='Delete'></button>
                <div>
                    <img src='../temp/" . $imageArr[0] . "' alt='merch image'>
                </div>
                <div>
                    <form method='post' action='' enctype='multipart/form-data'>
                        <input type='text' name='e-name' value='" . $row['name'] . "' placeholder=\"Ім'я\">
                        <textarea name='e-desc' placeholder='Опис'>" . $row['description'] . "</textarea>
                        <input type='text' name='e-cost' value='" . $row['cost'] . "' placeholder='Ціна'>
                        <input type='text' name='e-size' value='" . $row['size'] . "' placeholder='Розміри'>
                        <input type='hidden' name='e-id' value='" . $row['id'] . "'>
                        <button type='submit' name='edit-new-merch__submit-btn' class='merch-content__edit-btn'>Редагувати</button>
                    </form>
                </div>
            </li>
        ";
    }
} else {
    echo "Поки що немає мерчику :(";
}

$conn->close();
?>