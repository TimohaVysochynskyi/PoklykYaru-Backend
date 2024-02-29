<?php

require './validation/connect.php';

if (isset($_POST['auth-btn'])) {
    $login = htmlentities(strip_tags($_POST['login']));
    $password = htmlentities(strip_tags($_POST['password']));

    //$password = md5($password);

    $admin = $conn->query("SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$password'");
    $admin = $admin->fetch_assoc();

    setcookie('name', $admin['name'], time() + 3600 * 24 * 30, "./");
    setcookie('login', $admin['login'], time() + 3600 * 24 * 30, "./");
    setcookie('contact', $admin['contact'], time() + 3600 * 24 * 30, "./");

    header("Location: ./main");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Адмінка | Перевірка</title>
    <link rel="stylesheet" href="./style/index.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        h1 {
            text-align: center
        }

        form {
            display: flex;
            min-width: 20%;
            flex-direction: column;

        }

        input,
        button {
            margin: 5px 0;
            padding: 8px;
            font-size: 16px;
            border-radius: 4px;
            outline: none;
            border: 1px solid gray;
        }

        button {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h1>Для входу, введіть дані</h1>
    <br>
    <form action="#" method="post">
        <input type="text" name="login" placeholder="Логін" required>
        <input type="password" name="password" placeholder="Пароль" required>
        <button name="auth-btn" type="submit">Увійти</button>
    </form>
</body>

</html>