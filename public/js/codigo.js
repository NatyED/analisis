$(".btn_ver_habitaciones").click(function (e) { 
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "./controllers/c_views.php",
        data: {"action":"view_habitaciones"},
        dataType: "html",
        success: function (response) {
            $("#main_index").html(response)
            window.scrollTo(0,0)
        }
    });
    
});

$(".btn_ver_inicio").click(function (e) { 
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "./controllers/c_views.php",
        data: {"action":"view_inicio"},
        dataType: "html",
        success: function (response) {
            $("#main_index").html(response)
            window.scrollTo(0,0)
        }
    });
    
});

$(".btn_ver_info").click(function (e) { 
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "./controllers/c_views.php",
        data: {"action":"view_info"},
        dataType: "html",
        success: function (response) {
            $("#main_index").html(response)
            window.scrollTo(0,0)
        }
    });
});

$(".btn-link-perfil").click(function (e) { 
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "./controllers/c_views.php",
        data: {"action":"view_perfil"},
        dataType: "html",
        success: function (response) {
            $("#main_index").html(response)
            window.scrollTo(0,0)
        }
    });
});