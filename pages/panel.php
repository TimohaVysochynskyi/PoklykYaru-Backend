<?php
	session_start();
	require "../php/connect.php";

	$attemptCount = 3;
	$pin = $_POST['pin'];
	if(isset($_POST['pin-submit'])){
		if($pin == "1111"){
			$_SESSION['pin-confirmed'] = True;
		}
	}

	$aName = $_POST['a-name'];
	$aDescription = $_POST['a-description'];
	$aCost = $_POST['a-cost'];

	$dName = $_POST['d-name'];
	$dCode = $_POST['d-code'];

	if(isset($_POST['add-product'])){
		$mysql->query("INSERT INTO `product` (`name`, `description`, `cost`) 
        	VALUES ('$aName', '$aDescription', '$aCost')");
	}
	
	if(isset($_POST['delete-product'])){
		$mysql->query("DELETE FROM `product` WHERE `name` = '$dName' AND `id` = '$dCode'");
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
</head>
<body>
	<main class="container">
		<?php if(empty($_SESSION['pin-confirmed'])): ?>
			<form action="#" method="post" class="pin-form">
				<input type="password" class="form-control" name="pin" placeholder="Без пін коду не пущу!">
				<button type="submit" class="form-button" name="pin-submit">Летс гоу</button>
			</form>
		<? endif ?>
		<? if($_SESSION['pin-confirmed'] == True): ?>
			<!-- All content -->
			<div class="product-coop-window" id="edit-product">
				<form action="#" method="post" class="product-coop-form">
					<a href="#" class="product-coop-cross" onclick=closePopUp() id="product-coop-cross">+</a>
					<h2 class="product-coop-title">Редагування мерчу</h1>
					<input type="text" class="form-control" name="e-name" placeholder="Нова назва">
					<textarea name="e-description" class="form-control" placeholder="Новий опис"></textarea>
					<input type="number" class="form-control" name="e-cost" placeholder="Нові монейс (грн)">
					<button type="submit" class="form-button" name="confirm-edit-product">Підтвердити</button>
				</form>
			</div>

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
				<a href="#" class="product-option" onclick="addProduct()"><h1>+</h1></a>
				<a href="#" class="product-option" onclick="deleteProduct()"><h1>-</h1></a>
			</div>
			
			<div class="product-list-wrapper">
				<?php 
					if($productsCount > 0){
						foreach ($data as $product) {
							$id = $product['id'];
            		        $name = $product['name'];
            		        $description = $product['description'];
            		        $cost = $product['cost'];
							echo '<div class="product">';
								echo '<p class="product-el">'.$name.'</p>';
								echo '<p class="product-el">'.$description.'</p>';
								echo '<p class="product-el">'.$cost.'</p>';
								echo '<a href="#" class="product-buy-btn" onclick="editProduct()">редагувати</a>';
							echo '</div>';
						}
					}else{
						echo '<h1>Ше нічо тут немає</h1>';
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