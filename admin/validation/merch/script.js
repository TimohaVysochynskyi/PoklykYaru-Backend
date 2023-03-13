$(document).ready(function() {
	function load_merch() {
		$("#merch-content__list").load("./validation/merch/get_merch.php");
	}
	load_merch();
	$('#filter-merch-btn').click(function() {
		$('#filter-pop-up').slideDown(250);
	});
	$('#filter-pop-up__close').click(function() {
		$('#filter-pop-up').slideUp();
	});
	$('#create-new-merch-btn').click(function() {
		document.querySelector('#create-new-merch-wrapper').style.visibility = "unset";
	});
	$('#create-new-merch__close').click(function() {
		document.querySelector('#create-new-merch-wrapper').style.visibility = "hidden";
	});

	let name;
	$("#search-merch-input").keyup(function() {
		name = $("#search-merch-input").val();
		$.post("./validation/merch/search_merch.php", {
			suggestion: name
		}, function(data, status) {
			$("#merch-content__list").html(data);
		});

		if (name.length == 0) {
			load_merch();
		}
	});


	let type, cost;
	$("#filter-pop-up__btn").click(function() {
		type = $("#filter-pop-up__type").val();
		cost = $('#filter-pop-up__price').val();

		$.post("./validation/merch/filter_merch.php", {
			type: type,
			cost: cost
		}, function(data, status) {
			$("#merch-content__list").html(data);
		});

		if (cost.length == 0 && type !== 'no') {
			load_merch();
		}

	});

	if(name.length == 0 && cost.length == 0 && type == 'no'){
		setInterval(function() {
			load_merch();
		}, 2000);
	}
});