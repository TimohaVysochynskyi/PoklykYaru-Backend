<?php
if (empty($_COOKIE['name']) || empty($_COOKIE['login']) || empty($_COOKIE['contact'])) {
    header("Location: ../admin");
}

require "./validation/connect.php";

$data = $conn->query("SELECT * FROM `purchase`");

$active = $conn->query("SELECT COUNT(*) as `data` FROM `purchase` WHERE `status` = 1");
$active = $active->fetch_assoc();

$archived = $conn->query("SELECT COUNT(*) as `data` FROM `purchase` WHERE `status` = 0");
$archived = $archived->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Адмінка | Надходження</title>

    <link rel="stylesheet" href="./style/index.css">
    <link rel="stylesheet" href="./style/table.css">
    <style>
        .navigation {
            margin-top: 100px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0px 10%;
            font-size: 17px;
            padding: 15px 0;
            border-top: 1.5px solid #72838A;
            border-bottom: 1.5px solid #72838A;
        }

        .navigation-active {
            background-color: #72838A;
            color: #fefefe;
            border-radius: 2px;
        }

        .navigation__link {
            text-decoration: none;
            padding: 8px 14px;
            transition: .3s;
        }

        .container {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <header class="header"><a href="main">Повернутися до головної</a></header>
    <nav class="navigation" id="navigation"></nav>
    <main class="container" style="justify-content: start;">
        <ul id="purchases-box"></ul>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            $("#purchases-box").load("./validation/income/get_purchases.php?show=1");
            $("#navigation").load("./validation/income/navigation.php?show=1");
        });
    </script>

</body>

</html>