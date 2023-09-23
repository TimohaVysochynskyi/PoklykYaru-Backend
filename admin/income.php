<?php
    if(empty($_COOKIE['name']) || empty($_COOKIE['login']) || empty($_COOKIE['contact'])){
        header("Location: ../admin");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Адмінка | Надходження</title>

    <style>
        table {
            border-collapse: collapse;
            width: 90%;
            margin: 20px auto;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            border: 1px solid #72838A;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #fefefe;
        }
        tr:nth-child(even) {
            background-color: #efefef;
        }
    </style>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="header"><a href="./">Повернутися до головної</a></header>
    
    <main class="container">
        <ul id="purchases-box"></ul>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#purchases-box").load("./validation/income/get_purchases.php");
        });
    </script>

</body>

</html>