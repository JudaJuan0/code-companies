$(function() {

    // ================================================
    //  NAVBAR BEHAVIOR
    // ================================================
    $(window).on('scroll load', function() {
        if ($(window).scrollTop() > 5) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }

        if ($(window).scrollTop() > 500) {
            $('#whattsapp-top-btn').addClass('active');
            $('#scrollTop').addClass('active');
        } else {
            $('#whattsapp-top-btn').removeClass('active');
            $('#scrollTop').removeClass('active');
        }
    });



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
                    }, 1500);
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
    // Move to the top of the page
    // ================================================
    $('#scrollTop').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, 1000);
    });

    // ================================================
    // Preventing URL update on navigation link click
    // ================================================
    $('.link-scroll').on('click', function(e) {
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top
        }, 1000);
        e.preventDefault();
    });


    // ================================================
    // Scroll Spy
    // ================================================
    $('body').scrollspy({
        target: '#navbarSupportedContent',
        offset: 80
    });
});