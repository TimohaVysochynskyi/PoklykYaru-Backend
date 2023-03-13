$(document).ready(function(){
	// Вивантаження повідомлень при завантаженні сторінки
	load_messages();
	
	// Відправка повідомлень
	$("#chat-form").submit(function(event){
		event.preventDefault();
		var username = $("input[name='username']").val();
		var message = $("input[name='message']").val();
		$.ajax({
			type: "POST",
			url: "./validation/chat/send_message.php",
			data: {username: username, message: message},
			success: function(){
				load_messages();
				$("input[name='message']").val("");
			}
		});
	});
	
	// Оновлення повідомлень кожні 3 секунди
	setInterval(function(){
		load_messages();
	}, 3000);
});

function load_messages(){
	$.ajax({
		type: "GET",
		url: "./validation/chat/get_messages.php",
		success: function(data){
			$("#chat-box").html(data);
			$("#chat-box").scrollTop($("#chat-box")[0].scrollHeight);
		}
	});
}
