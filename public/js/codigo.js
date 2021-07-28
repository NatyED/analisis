

$(".btnVerHabitaciones").click(function (e) {
  e.preventDefault();
  $.ajax({
    type: "POST",
    url: "./controllers/cViews.php",
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
    url: "./controllers/cViews.php",
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
    url: "./controllers/cViews.php",
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

$(".btnLinkPerfil").click(function (e) {
  e.preventDefault();
  $.ajax({
    type: "POST",
    url: "./controllers/cViews.php",
    data: {
      action: "viewPerfil",
    },
    dataType: "html",
    success: function (response) {
      $("#main_index").html(response);
      window.scrollTo(0, 0);

      $(".btnInicioSesion").click(function (e) {
        e.preventDefault();
        $.ajax({
          type: "POST",
          url: "./controllers/cViews.php",
          data: {
            action: "viewInicioSesion",
          },
          dataType: "html",
          success: function (response) {
            $("#main_index").html(response);
            window.scrollTo(0, 0);
            $(".btnVentanaModificar").click(function(e){
                e.preventDefault();
                var idReservacion =$(this).attr("idReservacion");
                $.ajax({
                    type: "POST",
                    url: "./controllers/cViews.php",
                    data: {action: "viewVentanaModificar", idReservacion: idReservacion},
                    dataType: "html",
                    success: function (response) {
                        $("#contenedorModal").html(response);
                        $("#modalModificar").modal("show");
                    }
                });
            });
            $(".btnVentanaEliminar").click(function(e){
                e.preventDefault();
                var idReservacion =$(this).attr("idReservacion");
                $.ajax({
                    type: "POST",
                    url: "./controllers/cViews.php",
                    data: {action: "viewVentanaEliminar", idReservacion: idReservacion},
                    dataType: "html",
                    success: function (response) {
                        $("#contenedorModal").html(response);
                        $("#modalEliminar").modal("show");
                    }
                });
            });
            $(".btnVerPerfil").click(function (e) {
              e.preventDefault();
              $.ajax({
                type: "POST",
                url: "./controllers/cViews.php",
                data: {
                  action: "viewVerPerfil",
                },
                dataType: "html",
                success: function (response) {
                  $("#main_index").html(response);
                  window.scrollTo(0, 0);

                  $(".btnEditarPerfil").click(function (e) {
                    e.preventDefault();
                    $.ajax({
                      type: "POST",
                      url: "./controllers/cViews.php",
                      data: {
                        action: "viewEditarPerfil",
                      },
                      dataType: "html",
                      success: function (response) {
                        $("#main_index").html(response);
                        window.scrollTo(0, 0);
                      },
                    });
                  });
                  $(".btnReservaciones").click(function (e) {
                    e.preventDefault();
                    $.ajax({
                      type: "POST",
                      url: "./controllers/cViews.php",
                      data: {
                        action: "viewVerReservaciones",
                      },
                      dataType: "html",
                      success: function (response) {
                        $("#main_index").html(response);
                        window.scrollTo(0, 0);
                      },
                    });
                  });
                },
              });
            });
            $(".btnVentanaCrearReservacion").click(function (e) {
              e.preventDefault();
              $.ajax({
                type: "POST",
                url: "./controllers/cViews.php",
                data: {
                  action: "viewReserva",
                },
                dataType: "html",
                success: function (response) {
                  $("#main_index").html(response);
                  window.scrollTo(0, 0);
                  $(".btnCrearReservacion").click(function (e) {
                    e.preventDefault();
                    $.ajax({
                      type: "POST",
                      url: "./controllers/cViews.php",
                      data: {
                        action: "viewCrearReserva",
                      },
                      dataType: "html",
                      success: function (response) {
                        $("#main_index").html(response);
                        window.scrollTo(0, 0);
                      },
                    });
                  });
                },
              });
            });
          },
        });
      });

      $(".btnRegistrar").click(function (e) {
        e.preventDefault();
        $.ajax({
          type: "POST",
          url: "./controllers/cViews.php",
          data: {
            action: "viewRegistro",
          },
          dataType: "html",
          success: function (response) {
            $("#main_index").html(response);
            window.scrollTo(0, 0);
            $(".btnCrearUsuario").click(function (e) {
              e.preventDefault();
              $.ajax({
                type: "POST",
                url: "./controllers/cViews.php",
                data: {
                  action: "viewInicioSesion",
                },
                dataType: "html",
                success: function (response) {
                  $("#main_index").html(response);
                  window.scrollTo(0, 0);
                },
              });
            });
          },
        });
      });
    },
  });
});
