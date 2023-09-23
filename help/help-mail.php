<?php

require '../php/connect.php';

// here we check if all fields are filled.
$required = array('name', 'email', 'message');
$error = false;
foreach ($required as $field) {
    if (empty($_REQUEST[$field])) {
        $error = true;
    }
}

//if something is not filled(empty) and error is true
if ($error) {
    echo 'Виникла якась помилка';
}
// if everything is filled then we execute the mail function
else {

    $name = htmlentities(strip_tags($_REQUEST['name']));
    $email = htmlentities(strip_tags($_REQUEST['email']));
    $message = htmlentities(strip_tags($_REQUEST['message']));

    $mysql->query("INSERT INTO `help-mail` (`name`, `email`, `message`, `status`) VALUES ('$name', '$email', '$message', 'unread')");

    $fullmessage = "Ім'я відправника: " . $name . "\n\n" . "Повідомлення: \n" . $message;
    // Set your email address where you want to receive emails.
    $to = 'pokluk.yary@gmail.com';
    $subject = 'Повідомлення зі сторінки допомоги';
    //$send_email = mail($to, $subject, $fullmessage, $email);

    $mysql->close();
}
