$(".btnVerHabitaciones").click(function (e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "./controllers/cViews.php",
        data: {
            "action": "viewHabitaciones"
        },
        dataType: "html",
        success: function (response) {
            $("#main_index").html(response)
            window.scrollTo(0, 0)
        }
    });

});

$(".btnVerInicio").click(function (e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "./controllers/cViews.php",
        data: {
            "action": "viewInicio"
        },
        dataType: "html",
        success: function (response) {
            $("#main_index").html(response)
            window.scrollTo(0, 0)
        }
    });

});

$(".btnVerInfo").click(function (e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "./controllers/cViews.php",
        data: {
            "action": "viewInfo"
        },
        dataType: "html",
        success: function (response) {
            $("#main_index").html(response)
            window.scrollTo(0, 0)
        }
    });
});

$(".btnLinkPerfil").click(function (e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "./controllers/cViews.php",
        data: {
            "action": "viewPerfil"
        },
        dataType: "html",
        success: function (response) {
            $("#main_index").html(response)
            window.scrollTo(0, 0)

            $(".btnInicioSesion").click(function (e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "./controllers/cViews.php",
                    data: {
                        "action": "viewInicioSesion"
                    },
                    dataType: "html",
                    success: function (response) {
                        $("#main_index").html(response)
                        window.scrollTo(0, 0)
                    }
                });
            });

            $(".btnRegistrar").click(function (e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "./controllers/cViews.php",
                    data: {
                        "action": "viewRegistro"
                    },
                    dataType: "html",
                    success: function (response) {
                        $("#main_index").html(response)
                        window.scrollTo(0, 0)
                        $(".btnCrearUsuario").click(function (e) {
                            e.preventDefault();
                            $.ajax({
                                type: "POST",
                                url: "./controllers/cViews.php",
                                data: {
                                    "action": "viewInicioSesion"
                                },
                                dataType: "html",
                                success: function (response) {
                                    $("#main_index").html(response)
                                    window.scrollTo(0, 0)
                                }
                            });
                        });
                    }
                });
            });
        }
    });
});


