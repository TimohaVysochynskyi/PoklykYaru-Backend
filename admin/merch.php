<?php

if(empty($_COOKIE['name']) || empty($_COOKIE['login']) || empty($_COOKIE['contact'])){
    header("Location: ../admin");
}

// Підключення до бази даних
require './validation/connect.php';


if (isset($_POST['create-new-merch__submit-btn'])) {
	$aName = $_POST['create-new-merch__name'];
	$aDescription = $_POST['create-new-merch__desc'];
	$aCost = $_POST['create-new-merch__price'];
	$aSize = $_POST['create-new-merch__size'];
	$aType = $_POST['create-new-merch__type'];
	
	$aFilename = $_FILES['create-new-merch__image']["name"];
	$aTempname = $_FILES['create-new-merch__image']["tmp_name"];
	$folder = "../temp/" . $aFilename;
	
    $conn->query("INSERT INTO `product` (`name`, `description`, `cost`, `size`, `image`, `type`) 
    VALUES ('$aName', '$aDescription', '$aCost', '$aSize', '$aFilename', '$aType')");
    if (move_uploaded_file($aTempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
    header("Location: ./merch.php");
}
?>


<!DOCTYPE html>
<html>

<head>
	<title>Адмінка | Мерч</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="style.css" />

	<script src="./validation/merch/script.js"></script>

</head>

<body>
	<header class="header"><a href="main">Повернутися до головної</a></header>

	<main class="container" style="height: auto; justify-content: flex-start;">
		<div class="merch-wrapper">
			<div class="search-bar">
				<input type="text" id="search-merch-input" placeholder="Пошук мерчу туть :)" />
				<button id="filter-merch-btn"><img src="./images/filter.png" alt="filter"></button>
			</div>
			<div id="filter-pop-up">
				<button id="filter-pop-up__close">+</button>
				<ul class="filter-pop-up__list">
					<li class="filter-pop-up__item">
						Розділ
						<select id="filter-pop-up__type">
							<option value="no">Все</option>
							<option value="new">Новинка</option>
							<option value="cloth">Одяг</option>
							<option value="chevron">Шеврони</option>
							<option value="book">Книги</option>
							<option value="flag">Прапори</option>
						</select>
					</li>
					<li class="filter-pop-up__item">Ціна (грн) <input type="number" id="filter-pop-up__price" placeholder="Точне число"></li>
					<li class="filter-pop-up__item"><button id="filter-pop-up__btn">Гоу</button></li>
				</ul>
			</div>
			<div class="merch-content">
				<ul id="merch-content__list"></ul>
			</div>
		</div>

		<div id="create-new-merch-wrapper">
			<div class="create-new-merch">
				<button id="create-new-merch__close">+</button>
				<h2 style="margin: 10px 0px;">Створення нової мерчинки xD</h2>
				<form action="#" method="post" id="create-new-merch__form" enctype="multipart/form-data">
					<input type="text" name="create-new-merch__name" placeholder="Назва">
					<textarea name="create-new-merch__desc" placeholder="Опис зроз"></textarea>
					<input type="number" name="create-new-merch__price" placeholder="Ціна">
					<input type="text" name="create-new-merch__size" placeholder="Розмір">
					<label for="create-new-merch__type" style="float: left;">Тип: </label>
					<select name="create-new-merch__type">
						<option value="clothe">Одяг</option>
						<option value="box">Бокси</option>
						<option value="flag">Прапори</option>
						<option value="chevron">Шеврони</option>
						<option value="book">Книги</option>
					</select>
					<input type="file" name="create-new-merch__image" placeholder="Картинка">
					<button type="submit" name="create-new-merch__submit-btn">Створити</button>
				</form>
			</div>
		</div>

		<button id="create-new-merch-btn"><span style="position: relative; top: -3.5px;">+</span></button>
	</main>
</body>

</html>