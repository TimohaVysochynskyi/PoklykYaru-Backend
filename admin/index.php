<?php
if(empty($_COOKIE['auth'])){
    if(isset($_POST['auth-btn'])){
        $pin = htmlentities($_POST['pin']);
        if(mb_strlen($pin) <= 0){
            echo "Нізя залишати поле пустим, броу";
        } else {
            $pin = md5($pin);
            if($pin == md5("1111")){
                setcookie("auth", md5("success"), time()+3600*24*30, "../admin");
                header("Location: ./main");
            }
        }
    }
} else{
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
    <link rel="stylesheet" href="./style.css">
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        h1{
            text-align: center
        }

        form{
            display: flex;
            flex-direction: column;

        }
        input,button{
            margin: 5px 0;
            padding: 8px;
            font-size: 16px;
            border-radius: 4px;
            outline: none;
            border: 1px solid gray;
        }
        button{
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Перед підключенням до адмінки треба ввести Pin код</h1>
    <form action="#" method="post">
        <input type="number" name="pin" placeholder="Pin">
        <button name="auth-btn" type="submit">Гоу</button>
    </form>
</body>
</html>