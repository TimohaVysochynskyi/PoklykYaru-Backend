<?php
require "../php/connect.php";

$data = $mysql->query("SELECT * FROM `product`");
$productsCount = $data->num_rows;
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Мерч</title>
	<link rel="stylesheet" href="../css/merch.css">
	<link rel="stylesheet" href="../css/style.css">
</head>

<body>
	<div class="container">
		<?php
		if ($productsCount > 0) {
			foreach ($data as $product) {
				$id = $product['id'];
				$name = $product['name'];
				$description = $product['description'];
				$cost = $product['cost'];
				echo '<div class="product">';
				echo '<p class="product-el">' . $name . '</p>';
				echo '<p class="product-el">' . $description . '</p>';
				echo '<p class="product-el">' . $cost . ' гривнів</p>';
				echo '<button type="button" class="product-buy-btn">купити</button>';
				echo '<img src="../images/merch/heart-unchecked.png" class="product-el-heart">';
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