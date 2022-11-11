<?php
session_start();
require "../php/connect.php";

$attemptCount = 3;
$pin = $_POST['pin'];
if (isset($_POST['pin-submit'])) {
	if ($pin == "1111") {
		$_SESSION['pin-confirmed'] = True;
	}
}

$aName = $_POST['a-name'];
$aDescription = $_POST['a-description'];
$aCost = $_POST['a-cost'];

$dName = $_POST['d-name'];
$dCode = $_POST['d-code'];

$eName = $_POST['e-name'];
$eDescription = $_POST['e-description'];
$eCost = $_POST['e-cost'];
$id = $_COOKIE['editing-started'];

if (isset($_POST['add-product'])) {
	$mysql->query("INSERT INTO `product` (`name`, `description`, `cost`, `heart`) 
        	VALUES ('$aName', '$aDescription', '$aCost', 0)");
}
if (isset($_POST['delete-product'])) {
	$mysql->query("DELETE FROM `product` WHERE `name` = '$dName' AND `id` = '$dCode'");
}
if (isset($_POST['confirm-edit-product'])) {
	$mysql->query("UPDATE `product` 
		SET `name` = '$eName', `description` = '$eDescription', `cost` = '$eCost'
			WHERE `id` = '$id'");
	unset($_COOKIE['editing-started']);
	setcookie('editing-started', '', time() - 3600 * 24 * 7, '/');
}

$data = $mysql->query("SELECT * FROM `product`");
$productsCount = $data->num_rows;
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Адмін панель | Поклик Яру</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/panel.css">
	<link rel="stylesheet" href="../css/merch.css">
	<style>
		.container {
			height: auto;
		}
	</style>
</head>

<body>
	<main class="container">
		<?php if (empty($_SESSION['pin-confirmed'])) : ?>
			<form action="#" method="post" class="pin-form">
				<input type="password" class="form-control" name="pin" placeholder="Без пін коду не пущу!">
				<button type="submit" class="form-button" name="pin-submit">Летс гоу</button>
			</form>
		<? endif ?>
		<? if ($_SESSION['pin-confirmed'] == True) : ?>
			<!-- All content -->
			<? if ($_COOKIE['editing-started'] != '') : ?>
				<div class="product-coop-window" style="display: flex; position: fixed;">
					<form action="#" method="post" class="product-coop-form">
						<h2 class="product-coop-title">Редагування мерчу</h1>
							<input type="text" class="form-control" name="e-name" placeholder="Нова назва">
							<textarea name="e-description" class="form-control" placeholder="Новий опис"></textarea>
							<input type="number" class="form-control" name="e-cost" placeholder="Нові монейс (грн)">
							<button type="submit" class="form-button" name="confirm-edit-product">Підтвердити/Відмінити</button>
					</form>
				</div>
			<? endif; ?>
			<div class="product-coop-window" id='add-product'>
				<form action="#" method="post" class="product-coop-form">
					<a href="#" class="product-coop-cross" onclick=closePopUp() id='product-coop-cross'>+</a>
					<h2 class="product-coop-title">Додавання нового мерчу</h1>
						<input type="text" class="form-control" name="a-name" placeholder="Назва нової бази">
						<textarea name="a-description" class="form-control" placeholder="Опис цієї найкрутішої в світі мерчинки"></textarea>
						<input type="number" class="form-control" name="a-cost" placeholder="Скіки монейс (грн)">
						<button type="submit" class="form-button" name="add-product">Додати</button>
				</form>
			</div>

			<div class="product-coop-window" id='delete-product'>
				<form action="#" method="post" class="product-coop-form">
					<a href="#" class="product-coop-cross" onclick=closePopUp() id='product-coop-cross'>+</a>
					<h2 class="product-coop-title">Видалення мерчу</h2>
					<input type="text" class="form-control" name="d-name" placeholder="Назва товару">
					<input type="number" class="form-control" name="d-code" placeholder="Ідентифікаційний код">
					<button type="submit" class="form-button" name="delete-product">Видалити</button>
				</form>
			</div>

			<div class="product-coop-wrapper">
				<a href="#" class="product-option" onclick="addProduct()">
					<h1>+</h1>
				</a>
				<a href="#" class="product-option" onclick="deleteProduct()">
					<h1>-</h1>
				</a>
			</div>
			<hr style="width: 100vw; border: 1.5px solid #2a373d; background-color: #2a373d;">
			<div class="product-list-wrapper" style="margin: 30px;">
				<?php
				if ($productsCount > 0) {
					foreach ($data as $product) {
						$id = $product['id'];
						$name = $product['name'];
						$description = $product['description'];
						$cost = $product['cost'];
						echo '<form action="#" method="post">';
						echo '<div class="product">';
						echo '<p class="product-el">' . $name . '</p>';
						echo '<p class="product-el">' . $description . '</p>';
						echo '<p class="product-el">' . $cost . ' гривнів</p>';
						echo '<p class="product-el">ID: ' . $id . '</p>';
						echo '<button class="product-buy-btn" name="edit-btn-' . $id . '">редагувати</button>';
						echo '</div>';
						echo '</form>';
						if (isset($_POST['edit-btn-' . $id])) {
							setcookie('editing-started', $id, time() + 3600 * 24 * 7, "/");
							header("Location: ./panel.php");
						}
					}
				} else {
					echo '<h1>Ше нема продуктів. ДОДАЙ ПРЯМО ЗАРАЗ, АУ!!!!!!</h1>';
				}
				?>
			</div>
			<hr style="width: 100vw; border: 1.5px solid #2a373d; background-color: #2a373d;">
			<div class="product-list-wrapper" style="margin: 30px;">
				<?php
				$data = $mysql->query("SELECT * FROM `product-feedback`");
				$feedbackCount = $data->num_rows;
				if ($feedbackCount > 0) {
					foreach ($data as $feedback) {
						$id = $feedback['id'];
						$pName = $feedback['pname'];
						$fName = $feedback['fname'];
						$text = $feedback['text'];
						$email = $feedback['email'];
						echo '<form action="#" method="post">';
						echo '<div class="product">';
						echo '<p class="product-el">Товар: ' . $pname . '</p>';
						echo '<p class="product-el">Ім\'я автора: ' . $fName . '</p>';
						echo '<p class="product-el">Відгук: ' . $text . '</p>';
						echo '<p class="product-el">Мило: ' . $email . '</p>';
						echo '<button class="product-buy-btn" name="delete-feedback-btn-' . $id . '">Видалити цю фігню</button>';
						echo '</div>';
						echo '</form>';
						if (isset($_POST['delete-feedback-btn-' . $id])) {
							$mysql->query("DELETE FROM `product-feedback` WHERE `id` = '$id'");
							header("Location: ./panel.php");
						}
					}
				} else {
					echo '<h1>Ше нема порад :((((((( Я сумний, зате хост веселий, шо лишні 10кб його не нагружають</h1>';
				}
				$mysql->close();
				?>
			</div>
		<? endif; ?>
	</main>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="../js/script.js"></script>
</body>

</html>