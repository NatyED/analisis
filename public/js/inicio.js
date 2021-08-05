//Botones Navbar
$(".btnVerHabitaciones").click(function (e) {
	e.preventDefault();
	$.ajax({
		type: "POST",
		url: "./",
		data: {
			action: "viewHabitaciones",
		},
		dataType: "html",
		success: function (response) {
			$("#main_index").html(response);
			window.scrollTo(0, 0);
		},
	});
});

$(".btnVerInicio").click(function (e) {
	e.preventDefault();
	$.ajax({
		type: "POST",
		url: "./",
		data: {
			action: "viewInicio",
		},
		dataType: "html",
		success: function (response) {
			$("#main_index").html(response);
			window.scrollTo(0, 0);
		},
	});
});

$(".btnVerInfo").click(function (e) {
	e.preventDefault();
	$.ajax({
		type: "POST",
		url: "./",
		data: {
			action: "viewInfo",
		},
		dataType: "html",
		success: function (response) {
			$("#main_index").html(response);
			window.scrollTo(0, 0);
		},
	});
});
$(".btnVerPerfil").on("click", function (e) {
	e.preventDefault();
	$.ajax({
		type: "POST",
		url: "./",
		data: {action:"viewPerfil"},
		dataType: "html",
		success: function (response) {
			$('#main_index').html(response);
		}
	});
});