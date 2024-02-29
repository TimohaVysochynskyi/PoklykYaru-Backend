<?php
if (empty($_COOKIE['name']) || empty($_COOKIE['login']) || empty($_COOKIE['contact'])) {
	header("Location: ../admin");
}
?>


<!DOCTYPE html>
<html>

<head>
	<title>Адмінка | Користувачі</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="./style/index.css" />
	<link rel="stylesheet" type="text/css" href="./style/table.css" />

	<script src="./validation/users/script.js"></script>
</head>

<body>
	<header class="header"><a href="main">Повернутися до головної</a></header>

	<main class="container">
		<ul id="users-list"></ul>
	</main>
</body>

</html>