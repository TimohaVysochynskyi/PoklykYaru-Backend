<!DOCTYPE html>
<html>
<head>
	<title>Chat</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="./validation/chat/script.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header class="header"><a href="main">Повернутися до головної</a></header>
	
	<main class="container">
		<div class="chat-wrapper">
			<div id="chat-box"></div>
			<form id="chat-form">
				<input type="text" name="username" placeholder="Псевдо">
				<input type="text" name="message" placeholder="Повідомлення">
				<input type="submit" name="send" value="Надіслати">
			</form>
		</div>
	</main>

</body>
</html>