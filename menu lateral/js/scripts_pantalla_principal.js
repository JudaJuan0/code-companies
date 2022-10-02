/*Esta funcion es para mostrar el menu segun el ancho del dispositivo*/
$(document).ready(function() {
    $('#sidebarCollapse').on('click', function() {
        $('#sidebar').toggleClass('active');
    });
    if (screen.width < 769) {
        $('#button_hidden').show();
        $('#button_active_slide').hide();
        $('#button_hidden').on('click', function() {
            $('#sidebar').toggleClass('active');
        });
        $('#contenido').on('click', function() {
            $('#sidebar').removeClass('active');
        });
    }
    if (screen.width > 769) {
        $('#button_hidden').hide();
        $('#contenido').on('click', function() {
            $('#sidebar').addClass('active');
        });
    }
});
/*Esta funcion es para saber la hora a la que se consulta la pantalla principal de mejor vendedor*/
Reloj();

function Reloj() {
    var tiempo = new Date();
    var hora = tiempo.getHours();
    var minuto = tiempo.getMinutes();
    var segundo = tiempo.getSeconds();
    document.getElementById('hora').innerHTML = hora;
    document.getElementById('minuto').innerHTML = minuto;
    str_hora = new String(hora);
    if (str_hora.length == 1) {
        document.getElementById('hora').innerHTML = '0' + hora;
    }
    str_minuto = new String(minuto);
    if (str_minuto.length == 1) {
        document.getElementById('minuto').innerHTML = '0' + minuto;
    }
}

function cambiar_cont(ruta) {
    $.ajax({
        url: ruta + '.html',
        success: function(data) {
            $('#contenido').html(data);
        }
    });
}