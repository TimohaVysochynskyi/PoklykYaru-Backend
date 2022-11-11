<?php
require "../php/connect.php";

$data = $mysql->query("SELECT * FROM `product`");
$productsCount = $data->num_rows;
$fName = $_POST['f-name'];
$fText = $_POST['f-text'];
$fEmail = $_POST['f-email'];

if (mb_strlen($fEmail) <= 0) {
	$fEmail = 'no adress';
}

$fText = $fText . "<br>";

$pId = $_COOKIE['feedback-started'];
$pData = $mysql->query("SELECT `name` FROM `product` WHERE `id` = '$pId'");
foreach ($pData as $pName) {
	$pName = $pName['name'];
}
if ($_COOKIE['feedback-started'] != '') {
	if (isset($_POST['confirm-feedback'])) {
		$mysql->query("INSERT INTO `product-feedback` (`pname`, `fname`, `text`, `email`) 
        	VALUES ('$pName', '$fName', '$fText', '$fEmail')");

		unset($_COOKIE['feedback-started']);
		setcookie('feedback-started', '', time() - 3600 * 24 * 7, '/');
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Мерч</title>
	<link rel="stylesheet" href="../css/panel.css">
	<link rel="stylesheet" href="../css/merch.css">
	<link rel="stylesheet" href="../css/style.css">
	<style>
		.container {
			flex-direction: row;
			flex-wrap: wrap;
		}
	</style>
</head>

<body>
	<div class="container">
		<? if ($_COOKIE['feedback-started'] != '') : ?>
			<div class="product-coop-window" style="display: flex; position: fixed; z-index: 2">
				<form action="#" method="post" class="product-coop-form">
					<h2 class="product-coop-title">Напишіть нам відгук про цей продукт))</h1>
						<input type="text" class="form-control" name="f-name" placeholder="Ваше ім'я">
						<textarea name="f-text" class="form-control" placeholder="Ваш цінний відгук"></textarea>
						<input type="email" class="form-control" name="f-email" placeholder="Електронна адреса (необов'язково)">
						<button type="submit" class="form-button" name="confirm-feedback">Надіслати/Відмінити</button>
				</form>
			</div>
		<? endif; ?>
		<?php
		if ($productsCount > 0) {
			foreach ($data as $product) {
				$id = $product['id'];
				$name = $product['name'];
				$description = $product['description'];
				$cost = $product['cost'];
				$hearts = $product['heart'];
				echo '<div class="product">';

				echo '<form action="" method="post" style="width: 50%; position: relative; left: 55%">';
				echo '<button type="submit" name="add-feedback-' . $id . '" class="add-heart-btn"><img src="../images/merch/feedback-for-devs.png" class="product-el-heart"></button>';
				echo '</form>';
				if (isset($_POST['add-feedback-' . $id])) {
					setcookie('feedback-started', $id, time() + 3600 * 24 * 7, "/");
					header("Location: ./merch.php");
				}

				echo '<p class="product-el">' . $name . '</p>';
				echo '<p class="product-el">' . $description . '</p>';
				echo '<p class="product-el">' . $cost . ' гривнів</p>';
				echo '<button type="button" class="product-buy-btn">купити</button>';

				if ($_COOKIE['heart-on-id-' . $id] == '') {
					echo '<form action="" method="post" style="display: flex; width: 50%; position: relative; left: 50%">';
					echo '<p style="font-size: 22px;">' . $hearts . '</p>';
					echo '<button type="submit" name="add-heart' . $id . '" class="add-heart-btn"><img src="../images/merch/heart-unchecked.png" class="product-el-heart"></button>';
					echo '</form>';
					if (isset($_POST['add-heart' . $id])) {
						$hearts++;
						$mysql->query("UPDATE `product` SET `heart` = '$hearts' WHERE `id` = '$id'");
						setcookie('heart-on-id-' . $id, True, time() + 3600 * 24 * 365, "/");
					}
				} else {
					echo '<form style="display: flex; width: 50%; position: relative; left: 50%">';
					echo '<p style="font-size: 22px;">' . $hearts . '</p>';
					echo '<button class="add-heart-btn"><img src="../images/merch/heart-checked.png" class="product-el-heart"></button>';
					echo '</form>';
				}
				echo '</div>';
			}
		} else {
			echo '<h1>Ше нічо тут немає</h1>';
		}
		$mysql->close();
		?>
	</div>
</body>

</html>