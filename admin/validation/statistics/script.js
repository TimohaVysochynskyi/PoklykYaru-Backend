$(document).ready(function() {
	var startTime = Math.floor(Date.now() / 1000); // отримуємо час в секундах

	setInterval(function() {
		var currentTime = Math.floor(Date.now() / 1000); // отримуємо поточний час в секундах
		var timeSpent = currentTime - startTime; // рахуємо час перебування на сторінці
		$("#time-spent").text(timeSpent); // виводимо час на сторінці

		// відправляємо дані про час перебування на сторінці до сервера
		$.ajax({
			url: "./validation/statistics/save-data.php",
			type: "POST",
			data: {
				time_spent: timeSpent
			},
			success: function(data) {
				console.log("Дані успішно відправлені до сервера!");
			}
		});
	}, 1000); // оновлюємо дані кожну секунду
});
