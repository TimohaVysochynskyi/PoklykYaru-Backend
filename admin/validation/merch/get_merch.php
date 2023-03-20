<?php
// Підключення до бази даних
require '../connect.php';

// Отримання повідомлень з бази даних
$sql = "SELECT * FROM `product`";
$result = $conn->query($sql);


// Виведення повідомлень
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "
            <li>
                <button class='merch-content__del-btn' id='".$row['id']."' onclick=\"
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
                \"><img src='./validation/mail/trash-can.png' alt='Delete'></button>
                <div>
                    <img src='../temp/".$row['image']."' alt='картинка мерчинки зроз'>
                </div>
                <div>
                    <form method='post' action='./validation/merch/edit_merch.php' enctype='multipart/form-data'>
                        <input type='text' name='e-name' value='".$row['name']."' placeholder=\"Ім'я\">
                        <input type='text' name='e-desc' value='".$row['description']."' placeholder='Опис'>
                        <input type='text' name='e-cost' value='".$row['cost']."' placeholder='Ціна'>
                        <input type='file' name='e-image' value='".$row['image']."'>
                        <input type='hidden' name='old-e-image' value='".$row['image']."'>
                        <input type='hidden' name='e-id' value='".$row['id']."'>
                        <button type='submit' class='merch-content__edit-btn'>Редагувати</button>
                    </form>
                </div>
            </li>
        ";
    }
} else {
    echo "Поки що немає мерчику :(";
}

$conn->close();