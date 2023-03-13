<?php

// Підключення до бази даних
require '../connect.php';

// Отримання повідомлень з бази даних
$sql = "SELECT * FROM `product`";
$result = $conn->query($sql);

$type = $_POST['type'];
$cost = $_POST['cost'];


if ($result->num_rows > 0) {
    if($type == 'no' && !empty($cost)){ 
        foreach ($result as $row) {
            if ($row['cost'] == $cost) {
                echo "
                    <li>
                        <button class='merch-content__del-btn' id='" . $row['id'] . "' onclick=\"
                            let id = $(this).attr('id');
                            console.log(id);
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
                            <img src='../temp/" . $row['image'] . "' alt='картинка мерчинки зроз'>
                        </div>
                        <div>
                            <h3>" . $row['name'] . "</h3>
                            <h4>" . $row['description'] . "</h4>
                            <p>" . $row['cost'] . "<span>грн</span></p>
                            <button class='merch-content__edit-btn'>Редагувати</button>
                        </div>
                    </li>
                ";
            }
        }
    } elseif ($type !== 'no' && empty($cost)) {
        foreach ($result as $row) {
            if ($row['type'] == $type) {
                echo "
                    <li>
                        <button class='merch-content__del-btn' id='" . $row['id'] . "' onclick=\"
                            let id = $(this).attr('id');
                            console.log(id);
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
                            <img src='../temp/" . $row['image'] . "' alt='картинка мерчинки зроз'>
                        </div>
                        <div>
                            <h3>" . $row['name'] . "</h3>
                            <h4>" . $row['description'] . "</h4>
                            <p>" . $row['cost'] . "<span>грн</span></p>
                            <button class='merch-content__edit-btn'>Редагувати</button>
                        </div>
                    </li>
                ";
            }
        }
    } elseif ($type !== 'no' && !empty($cost)) {
        foreach ($result as $row) {
            if ($row['type'] == $type && $row['cost'] == $cost) {
                echo "
                    <li>
                        <button class='merch-content__del-btn' id='" . $row['id'] . "' onclick=\"
                            let id = $(this).attr('id');
                            console.log(id);
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
                            <img src='../temp/" . $row['image'] . "' alt='картинка мерчинки зроз'>
                        </div>
                        <div>
                            <h3>" . $row['name'] . "</h3>
                            <h4>" . $row['description'] . "</h4>
                            <p>" . $row['cost'] . "<span>грн</span></p>
                            <button class='merch-content__edit-btn'>Редагувати</button>
                        </div>
                    </li>
                ";
            }
        }
    } else {
        foreach ($result as $row) {
            echo "
                <li>
                    <button class='merch-content__del-btn' id='" . $row['id'] . "' onclick=\"
                        let id = $(this).attr('id');
                        console.log(id);
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
                        <img src='../temp/" . $row['image'] . "' alt='картинка мерчинки зроз'>
                    </div>
                    <div>
                        <h3>" . $row['name'] . "</h3>
                        <h4>" . $row['description'] . "</h4>
                        <p>" . $row['cost'] . "<span>грн</span></p>
                        <button class='merch-content__edit-btn'>Редагувати</button>
                    </div>
                </li>
            ";
        }
    }
} else {
    echo 'Результатів не знайдено :(';
}