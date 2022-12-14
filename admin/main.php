<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Адмін панель | Головна</title>
    <link rel="stylesheet" href="./admin.css">
</head>
<body>
    <header class="header">
        <nav class="header__nav">
            <ul class="header__list">
                <li class="header__item"><a href="#" class="header__link"><img src="../images/events/event-list-arrow.png" alt="Головна"></a></li>
                <li class="header__item"><a href="./merch.html" class="header__link">Мерч</a></li>
                <li class="header__item"><a href="#" class="header__link">Платежі</a></li>
                <li class="header__item"><a href="#" class="header__link">Реєстрація</a></li>
                <li class="header__item"><a href="./statistics.html" class="header__link">Статистика</a></li>
                <li class="header__item"><a href="#" class="header__link">База даних</a></li>
                <li class="header__item"><a href="#" class="header__link">Повідомити про проблему</a></li>
            </ul>
        </nav>
    </header>

    <main class="container">
        <div class="board-wrapper">
            <h1 class="board__title">Дошка повідомлень</h1>
            <div class="board">
                <div class="board__message">
                    <h3 class="board__name">Зам</h3>
                    <span class="board__date">26.11.2022 -- 00:03</span>
                    <p class="board_text">
                        Лагідне повідомлення від Зама <br> Я ТОБІ ВЖЕ 2 ТИЖДЕНЬ БЛІНА КАЖУ, ШО ТАМ ВИЛАЗИТЬ ТЕКСТ!!!!!!
                    </p>
                </div>
            </div>
            <form class="board__form" method="post" action="#">
                <input type="text" name="name" class="board__form-name" placeholder="Псевдо">
                <textarea name="text" class="board__form-text" placeholder="Повідомлення"></textarea>
                <button type="submit" name="board__form-btn" class="board__form-btn">Лест гоууу</button>
            </form>
        </div>
    </main>

    <footer class="footer">
        <p>Адмін панель була зроблена Замом, Доном і Яриком</p>
    </footer>
</body>
</html>