$(document).ready(function() {
    $('#need').click(function() {
        $.ajax({
            type: "POST",
            url: 'credit.html',
            data: {},
            success: function(datos) {
                $('.change-content').html(datos);
            }
        });
    });
    $('#conductores').click(function() {
        $.ajax({
            type: "POST",
            url: 'index.html',
            data: {},
            success: function(datos) {
                $('.change-content').html(datos);
            }
        });
    });


    // Envio de formularios


    $("#correos").submit(function(event) {
        $.ajax({
            type: "POST",
            url: 'envio-correos/enviar-conductores.php',
            data: $("#correos").serialize(),
            beforeSend: function() { $('.loading').show(); },
            success: function(datos) {


                if (datos == '1') {
                    $('.send-success').show();
                    setTimeout(function() {
                        $('.send-success').hide();
                    }, 2000);
                } else {
                    $('.resp-correos').html(datos);
                }

            },

            complete: function() { $('.loading').hide(); }
        });
        event.preventDefault();
    });




    $("#correos-crediprosperar").submit(function(event) {
        $.ajax({
            type: "POST",
            url: 'envio-correos/enviar-crediprosperar.php',
            data: $("#correos-crediprosperar").serialize(),
            beforeSend: function() { $('.loading').show(); },
            success: function(datos) {


                if (datos == '1') {
                    $('.send-success').show();
                    setTimeout(function() {
                        $('.send-success').hide();
                    }, 1500);
                } else {
                    $('.resp-correos').html(datos);
                }

            },

            complete: function() { $('.loading').hide(); }
        });
        event.preventDefault();
    });


    // ================================================
    //  NAVBAR BEHAVIOR
    // ================================================


    $(document).scroll(function() {
        var y = $(this).scrollTop();
        if (y > 100) {
            $('.btns-scroll').show();
        } else {

            $('.btns-scroll').hide();
        }
    });


});