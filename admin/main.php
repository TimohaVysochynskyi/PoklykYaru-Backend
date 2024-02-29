<?php
if (empty($_COOKIE['name']) || empty($_COOKIE['login']) || empty($_COOKIE['contact'])) {
    header("Location: ../admin");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Адмінка</title>

    <link rel="stylesheet" href="./style/index.css">
</head>

<body>
    <header class="header"><a href="/">Повернутися до сайту</a></header>

    <button class="notification-btn" id="show-help-msg"><img src="./images/notification-bell.png"
            alt="Повідомлення"></button>
    <div id="help-msg-window">
        <div class="help-msg">
            <button id="help-msg__close">+</button>
            <h3>Повідомлення зі сторінки допомоги</h3>
            <ul id="help-msg-box"></ul>
        </div>
    </div>

    <main class="container">
        <div class="category-wrapper">
            <a href="merch" class="category"><img src="./images/t-shirt.png"><span>Мерч</span></a>
            <a href="#" class="category"><img src="./images/copywriting.png"><span>Редагування</span></a>
            <a href="#" class="category"><img src="./images/line-chart.png"><span>Статистика</span></a>
            <a href="users" class="category"><img src="./images/user.png"><span>Користувачі</span></a>
            <a href="income" class="category"><img src="./images/dollar-sign.png"><span>Надходження</span></a>
        </div>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            $("#show-help-msg").click(function () {
                document.querySelector("#help-msg-window").style.visibility = "unset";
                $("#help-msg-box").load("./validation/mail/get_messages.php");
            });
            $("#help-msg__close").click(function () {
                var id = $(this).attr('id');
                console.log(id);
                document.querySelector("#help-msg-window").style.visibility = "hidden";
            });
        });
    </script>

</body>

</html>