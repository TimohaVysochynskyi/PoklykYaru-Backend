<?php
require '../php/blocks.php';
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Поклик Яру | Про нас</title>
	<link rel="icon" type="image/x-icon" href="../images/header&footer/logo.ico">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/secondary.css">
	<style type="text/css">
		body {
			background: rgb(136, 153, 159);
			background: radial-gradient(circle, rgba(136, 153, 159, 0.85) 0%, rgba(120, 137, 144, 0.9) 38%, rgba(130, 147, 153, 1) 68%, rgba(125, 142, 149, 1) 78%, rgba(114, 131, 138, 1) 100%);
		}
	</style>
</head>

<body>
	<!-- Navigation -->
	<?php secondaryHeader() ?>

	<!-- Container -->
	<main class="container">
		<div class="aboutus-wraper">
			<a class="aboutus__item wow fadeInLeft" href="./team.php">
				<h2 class="aboutus__item-title">наша команда</h2>
			</a>
			<a class="aboutus__item wow fadeInRight" href="./history.php">
				<h2 class="aboutus__item-title" style="color: #293C43;">історія</h2>
			</a>
			<a class="aboutus__item wow fadeInLeft" href="./feedback.php">
				<h2 class="aboutus__item-title">відгуки та змі</h2>
			</a>
		</div>
	</main>

	<!-- Footer -->
	<?php secondaryFooter() ?>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="../js/script.js"></script>
</body>

</html>