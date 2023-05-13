<?php
require '../php/blocks.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Поклик Яру | Допомога</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" type="image/x-icon" href="../images/header&footer/logo.ico">
</head>

<body>
    <!--HEADER-->
    <header class="header">
        <section class="header__info">
            <h1 class="header__info-title">Допомога</h1>
        </section>
    </header>
    <?php secondaryHeader() ?>

    <!--CONTAINER-->
    <main class="container">
        <div class="help-wrapper">
            <div class="help__col">
                <h2 class="help__title">Допомогти нам</h2>
                <a href="#" class="help__patreon-btn"><img src="../images/help/patreon.png">patreon</a>

                <h3 class="help__subtitle">Реквізити:</h3>
                <ul class="help__list">
                    <li class="help__list-item">4441 1144 5751 2372</li>
                    <li class="help__list-item">5168 7520 0426 0983</li>
                </ul>

                <div class="goal-help">
                    <h2 class="help__title">Цільова допомога</h2>

                    <div class="help__zbir">
                        <div class="help__zbir-col"><img src="../temp/phone.png" class="help__zbir-img" alt="На що збираємо"></div>
                        <div class="help__zbir-col">
                            <h3 class="help__zbir-title">Збір на мобілку</h3>
                            <div class="help__progress-wrapper">
                                <div class="help__progress-col" style="width: 68%;">68%</div>
                                <div class="help__progress-col" style="width: 32%;">32%</div>
                            </div>
                            <a href="#" class="help__zbir-btn">Допомогти</a>
                        </div>
                    </div>
                </div>

                <div class="want-help">
                    <h2 class="help__title">Бажаєте допомогти інакше?</h2>
                    <form class="want-help__form" method="post" action="">
                        <input type="text" name="name" class="want-help__form-input" placeholder="Ім'я" required>
                        <input type="email" name="email" class="want-help__form-input" placeholder="Електронна адреса" required>
                        <textarea type="text" name="message" class="want-help__form-input" placeholder="Чим ви можете допомогти?"></textarea>
                        <input class="want-help__from-btn" type="submit" value="надіслати"><span class="want-help__output_message"></span>
                    </form>
                </div>
            </div>
            <div class="help__col">
                <h2 class="help__title" style="margin-top: 20px;">Допомогти іншим</h2>
                <div class="help__zbir">
                    <div class="help__zbir-col"><img src="../temp/phone.png" class="help__zbir-img" alt="На що збираємо"></div>
                    <div class="help__zbir-col">
                        <h3 class="help__zbir-title">Збір на мобілку</h3>
                        <div class="help__progress-wrapper">
                            <div class="help__progress-col" style="width: 68%;">68%</div>
                            <div class="help__progress-col" style="width: 32%;">32%</div>
                        </div>
                        <a href="#" class="help__zbir-btn">Допомогти</a>
                    </div>
                </div>
                <div class="help__zbir">
                    <div class="help__zbir-col"><img src="../temp/phone.png" class="help__zbir-img" alt="На що збираємо"></div>
                    <div class="help__zbir-col">
                        <h3 class="help__zbir-title">Збір на мобілку</h3>
                        <div class="help__progress-wrapper">
                            <div class="help__progress-col" style="width: 68%;">68%</div>
                            <div class="help__progress-col" style="width: 32%;">32%</div>
                        </div>
                        <a href="#" class="help__zbir-btn">Допомогти</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!--FOOTER-->
    <?php secondaryFooter() ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.want-help__form').on('submit', function() {

                // Add text 'loading...' right after clicking on the submit button. 
                $('.want-help__output_message').text('Loading...');

                var form = $(this);
                $.ajax({
                    // if it can't find email.php just chahge the url path to the full path, including your domain and all folders.
                    url: "./help-mail.php",
                    method: form.attr('method'),
                    data: form.serialize(),
                    success: function(result) {

                        // THIS IS WHAT I HAVE ADDED TO REMOVE EXCESS SPACES
                        let d = result.split(" ");
                        let y = d.slice(-1)[0];
                        // THIS IS WHAT I HAVE ADDED TO REMOVE EXCESS SPACES

                        if (y == 'success') {
                            $('.want-help__output_message').text('Message Sent!');
                        } else if (y == 'miss') {
                            $('.want-help__output_message').text('Please fill in all the fields above.');
                        } else {
                            $('.want-help__output_message').text('Error Sending email!');
                        }
                    }
                });

                // Prevents default submission of the form after clicking on the submit button. 
                return false;
            });
        });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>