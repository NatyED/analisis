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

$(".btnLinkIniciarSesion").click(function (e) {
	e.preventDefault();
	$.ajax({
		type: "POST",
		url: "./",
		data: {
			action: "viewIniciarSesion",
		},
		dataType: "html",
		success: function (response) {
			$("#main_index").html(response);
			window.scrollTo(0, 0);
			$(".btnRegistrar").on("click", function () {
				$.ajax({
					type: "POST",
					url: "./",
					data: {action:"viewRegistro"},
					dataType: "html",
					success: function (response) {
						$("#main_index").html(response);
						$("#FormularioRegistro").on('submit', function (e) {
							e.preventDefault();				
							$.ajax({
								type: "POST",
								url: "./",
								data: {
									action: "RegistrarUsuario",
									datos: {
										identificacionRegistro: $("#identificacionRegistro").val(),
										nombreRegistro: $("#nombreRegistro").val(),
										apellidosRegistro: $("#apellidosRegistro").val(),
										correoRegistro: $("#correoRegistro").val(),
										telefonoRegistro: $("#telefonoRegistro").val(),
										nacionalidadRegistro: $("#nacionalidadRegistro").val(),
										generoRegistro: $("#generoRegistro").val(),
									},
								},
								dataType: "json",
								success: function (response) {
									if (response["registro"] === true) {
										$.ajax({
											type: "POST",
											url: "./",
											data: {action:'viewRecuperarContrasena'},
											dataType: "html",
											success: function (response) {
												$('#main_index').html(response);
												$("#FormularioRecuperarContrasena").on("submit", function (e) {
													e.preventDefault();
													if ($("#contrasenaNueva").val() == $("#verificarContrasenaNueva").val()) {
														$.ajax({
															type: "POST",
															url: "./",
															data: {
																action: "RecuperarContrasena",
																datos: {
																	perfilIdentificacion: $(
																		"#perfilIdentificacion"
																	).val(),
																	correoPerfil: $("#correoPerfil").val(),
																	telefonoPerfil:
																		$("#telefonoPerfil").val(),
																	contrasenaNueva: $("#contrasenaNueva").val()
																},
															},
															dataType: "json",
															success: function (response) {
																$("#toastErrorMsg").html(response["msg"]);
																$("#liveToast").toast("show");
																setTimeout(() => { location.reload();},3000)
															},
														});
													} else {
														$("#toastErrorMsg").html("Las contraseña no coincide, verifiquelas e intente nuevamente.");
														$("#liveToast").toast("show");
														
													}
												});
											}
										});
									} else if (response["registro"] === false) {
										$("#toastErrorMsg").html(response["msg"]);
										$("#liveToast").toast("show");
									}
								},
							});
						});
					}
				});
			});

			$(".btnInicioSesion").on("click", function (e) {
				e.preventDefault();
				$.ajax({
					type: "POST",
					url: "./",
					data: {
						action: "IniciarSesion",
						datos: {
							correoSesion: $("#correoSesion").val(),
							contrasenaSesion: $("#contrasenaSesion").val(),
						},
					},
					dataType: "json",
					success: function (response) {
						if (response["access"] == true) {
							location.reload();
						} else if (response["access"] == false) {
							if (response["contrasena"] == true) {
								$("#toastRecuperar").removeClass('d-none');
							} else if (response["contrasena"] == false) {
								$("#toastRecuperar").addClass("d-none");
							}
							$("#toastErrorMsg").html(response["msg"]);
							$("#liveToast").toast("show");
						}
					},
				});
			});
			$("#toastRecuperar").on('click', function (e) {
				e.preventDefault();
				$.ajax({
					type: "POST",
					url: "./",
					data: {action:'viewRecuperarContrasena'},
					dataType: "html",
					success: function (response) {
						$('#main_index').html(response);
						$('#FormularioRecuperarContrasena').on('submit', function (e) {
							e.preventDefault()
							if ($('#contrasenaNueva').val() == $('#verificarContrasenaNueva').val()) {
								$.ajax({
									type: "POST",
									url: "./",
									data: {
										action: 'RecuperarContrasena',
										datos: {
											perfilIdentificacion: $(
												"#perfilIdentificacion"
											).val(),
											correoPerfil: $("#correoPerfil").val(),
											telefonoPerfil: $("#telefonoPerfil").val(),
											contrasenaNueva: $("#contrasenaNueva").val()
										},
									},
									dataType: "json",
									success: function (response) {
										$("#toastErrorMsg").html(response["msg"]);
										$("#liveToast").toast("show");
										setTimeout(() => {
											location.reload();
										}, 3000)
									}
								});
							}
						});
					}
				});
			});
		},
	});
});

