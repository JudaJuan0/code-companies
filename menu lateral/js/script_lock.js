//  Esta funcion se va a disparar cuando cargue la pagina en un navegador que no se Chrome
$(function() {
    if (/chrom(e|ium)/.test(navigator.userAgent.toLowerCase())) {} else {
        alert('Para mejor rendimiento de la pagina por favor carguela en el navegador de Google chrome')
    }
});
/*Esto es para bloquear el click derecho del mouse*/
document.oncontextmenu = function() {
    return false
}
if (screen.width > 769) {
    $('#button_hidden').hide();
    $('#contenido').on('click', function() {
        $('#sidebar').addClass('active');
    });
}

function right(e) {
    if (navigator.appName == 'Netscape' && e.which == 3) {
        return false;
    } else if (navigator.appName == 'Microsoft Internet Explorer' && event.button == 2) {
        //- Aunque realmente se lo merezca...
        return false;
    }
    return true;
}
document.onmousedown = right;
/*Esto es para bloquear la tecla f12,
la combinacion de teclas ctrl+shift+i
y la combinacion de teclas ctrl+mayus+u*/
$(document).keydown(function(event) {
    if (event.keyCode == 123) {
        return false;
    } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {
        return false; //Prevent from ctrl+shift+i
    } else if (event.ctrlKey && event.keyCode == 85) {
        return false; //Prevent from ctrl+mayus+u
    }
});