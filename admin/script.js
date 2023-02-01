function addProduct() {
	$('#add-product').fadeIn(500);
	document.getElementById('add-product').style.display = "flex";
}
function closePopUp() {
	$('#add-product').fadeOut("fast");
	$('#delete-product').fadeOut("fast");
	document.getElementById('product-coop-cross').style.transform = "rotateZ(180deg)";
}

let messageBoard = document.getElementById("message-board");
messageBoard.scrollTop = messageBoard.scrollHeight;