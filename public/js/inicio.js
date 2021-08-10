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
		data: {
			action: "viewPerfil"
		},
		dataType: "html",
		success: function (response) {
			$("#main_index").html(response);
			$(".btnEditarPerfil ").on("click", function () {
				$.ajax({
					type: "POST",
					url: "./",
					data: {
						action: "EditarUsuario",
						datos: {
							correoPerfil: $("#correoPerfil").val(),
							telefonoPerfil: $("#telefonoPerfil").val(),
							nacionalidadPerfil: $("#nacionalidadPerfil").val(),
							generoPerfil: $("#generoPerfil").val(),
						},
					},
					dataType: "json",
					success: function (response) {
						$("#toastErrorMsg").html(response["msg"]);
						$("#liveToast").toast("show");
						if (response["registro"] == true) {
							$('.btnEditarPerfil').prop('disabled', true);
							setTimeout(() => {
								location.reload();
							}, 3000);
						}
					},
				});
			});
		},
	});
});

$(".btnCerrarSesion").on("click", function (e) {
	e.preventDefault();
	$.ajax({
		type: "POST",
		url: "./",
		data: {
			action: "cerrarSesion"
		},
		dataType: "html",
		success: function (response) {
			console.log(response);
			window.scrollTo(0, 0);
			location.reload();
		},
	});
});

$(".btnVentanaModificar").on("click", function (e) {
	e.preventDefault();
	$.ajax({
		type: "POST",
		url: "./",
		data: {
			action: "VerReservacion",
			datos: {
				idReservacion: $(this).attr("idReservacion"),
			},
		},
		dataType: "json",
		success: function (response) {
			if (response["reservacion"] == true) {
				$.ajax({
					type: "POST",
					url: "./",
					data: {
						action: "viewModificarReservacion"
					},
					dataType: "html",
					success: function (response) {
						$("#contenedorModal").html(response);
						$("#fechaEntrada").attr('min', moment().format('YYYY-MM-DD'));
						$("#fechaSalida").attr('min', moment($("#fechaEntrada").val()).add(1, 'days').format('YYYY-MM-DD'));
						
						$("#modalModificar").modal("show");
						$('.form-control, .form-select').on('change', function () {
							$('.btnModificarReservacion').prop('disabled', false);
							$("#fechaSalida").attr('min', moment($("#fechaEntrada").val()).add(1, 'days').format('YYYY-MM-DD'));
						});

						$(".btnModificarReservacion").on("click", function () {
							$.ajax({
								type: "POST",
								url: "./",
								data: {
									action: "ModificarReservacion",
									datos: {
										fechaEntrada: $("#fechaEntrada").val(),
										fechaSalida: $("#fechaSalida").val(),
										idHabitacion: $("#idHabitacion").val()
									}
								},
								dataType: "json",
								success: function (response) {
									
									$("#toastErrorMsg").html(response["msg"]);
									$("#liveToast").toast("show");
									if (response["reservacion"] == true) {
										$('.btnModificarReservacion').prop('disabled', true);
										setTimeout(() => {
											location.reload();
										}, 3000);
									}
								},
							});
						});
						$("#tipoHabitacion")
							.on("change", function () {
								fechaEntradaValida = moment($("#fechaEntrada").val(), "YYYY-MM-DD", true).isValid();
								$("#fechaSalida").prop("disabled", !fechaEntradaValida);
								fechaSalidaValida = moment($("#fechaSalida").val(), "YYYY-MM-DD", true).isValid();
								$("#tipoHabitacion").prop("disabled", !fechaSalidaValida);

								if (fechaEntradaValida === true && fechaSalidaValida === true && $("#tipoHabitacion").val() != '0') {
									$.ajax({
										type: "POST",
										url: "./",
										data: {
											action: 'BuscarHabitaciones',
											datos: {
												idTipoHabitacion: $("#tipoHabitacion").val(),
												fechaEntrada: $("#fechaEntrada").val(),
												fechaSalida: $("#fechaSalida").val()
											}
										},
										dataType: "html",
										success: function (response) {
											$('#divNumeroHabitacion ').html(response);
											$("#idHabitacion").on('change', function () {
												if ($("#idHabitacion").val() != '0') {
													$('.btnCrearReservacion').prop("disabled", false);
												} else {
													$('.btnCrearReservacion').prop("disabled", true);
												}
											});

										}
									});
								}
							});
					},
				});
			} else if (response["reservacion"] == false) {
				$("#toastErrorMsg").html(response["msg"]);
				$("#liveToast").toast("show");
			}
		},
	});
});
$(".btnVentanaEliminar").on("click", function (e) {
	e.preventDefault();
	$.ajax({
		type: "POST",
		url: "./",
		data: {
			action: "VerReservacion",
			datos: {
				idReservacion: $(this).attr("idreservacion"),
			},
		},
		dataType: "json",
		success: function (response) {
			if (response["reservacion"] == true) {
				$.ajax({
					type: "POST",
					url: "./",
					data: {
						action: "viewEliminarReservacion"
					},
					dataType: "html",
					success: function (response) {
						$("#contenedorModal").html(response);
						$("#modalEliminar").modal("show");
						$(".btnEliminarReservacion").on("click", function () {
							$.ajax({
								type: "POST",
								url: "./",
								data: {
									action: "EliminarReservacion"
								},
								dataType: "json",
								success: function (response) {
									$("#toastErrorMsg").html(response["msg"]);
									$("#liveToast").toast("show");
									if (response["reservacion"] == true) {
										$('.btnEliminarReservacion').prop('disabled', true);
										setTimeout(() => {
											location.reload();
										}, 3000);
									}
								},
							});
						});
					},
				});
			} else if (response["reservacion"] == false) {
				$("#toastErrorMsg").html(response["msg"]);
				$("#liveToast").toast("show");
			}
		},
	});
});
$(".btnVentanaCrearReservacion ").on("click", function () {
	$.ajax({
		type: "POST",
		url: "./",
		data: {
			action: 'viewCrearReservacion'
		},
		dataType: "html",
		success: function (response) {
			$('#main_index').html(response);

			var fechaEntradaValida;
			var fechaSalidaValida;
			$("#fechaEntrada").attr('min', moment().format('YYYY-MM-DD'));
			$(".btnCrearReservacion").on("click", function () {
				$.ajax({
					type: "POST",
					url: "./",
					data: {
						action: 'CrearReservacion',
						datos: {
							idHabitacion: $("#idHabitacion").val(),
							fechaEntrada: $("#fechaEntrada").val(),
							fechaSalida: $("#fechaSalida").val()
						},
					},
					dataType: "json",
					success: function (response) {
						$("#toastErrorMsg").html(response["msg"]);
						$("#liveToast").toast("show");
						if (response['reservacion'] === true) {
							$('.btnCrearReservacion').prop("disabled", true);
							setTimeout(() => {
								location.reload();
							}, 2000);
						}
					}
				});
			});
			$("#fechaEntrada, #fechaSalida, #tipoHabitacion")
				.on("change", function () {
					fechaEntradaValida = moment($("#fechaEntrada").val(), "YYYY-MM-DD", true).isValid();
					$("#fechaSalida").prop("disabled", !fechaEntradaValida);
					if (fechaEntradaValida === true) {
						$("#fechaSalida").attr('min', moment($("#fechaEntrada").val()).add(1, 'days').format('YYYY-MM-DD'));
					}
						
					fechaSalidaValida = moment($("#fechaSalida").val(), "YYYY-MM-DD", true).isValid();
					$("#tipoHabitacion").prop("disabled", !fechaSalidaValida);

					if (fechaEntradaValida === true && fechaSalidaValida === true && $("#tipoHabitacion").val() != '0') {
						$.ajax({
							type: "POST",
							url: "./",
							data: {
								action: 'BuscarHabitaciones',
								datos: {
									idTipoHabitacion: $("#tipoHabitacion").val(),
									fechaEntrada: $("#fechaEntrada").val(),
									fechaSalida: $("#fechaSalida").val()
								}
							},
							dataType: "html",
							success: function (response) {
								console.log(response);
								$('#divNumeroHabitacion ').html(response);
								$("#idHabitacion").on('change', function () {
									if ($("#idHabitacion").val() != '0') {
										$('.btnCrearReservacion').prop("disabled", false);
									} else {
										$('.btnCrearReservacion').prop("disabled", true);
									}
								});

							}
						});
					}
				});

		}
	});
});