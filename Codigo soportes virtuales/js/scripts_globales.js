/*Aqui inician los scripts del carrusel */
$('.carousel[data-type="multi"] .item').each(function() {
    var next = $(this).next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    for (var i = 0; i < 2; i++) {
        next = next.next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }

        next.children(':first-child').clone().appendTo($(this));
    }
});
/*Inicio Funcion para desplazarse con animacion con el atributo anclaje href*/
$(function() {

    $('a[href*=#]').click(function() {

        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
            location.hostname == this.hostname) {

            var $target = $(this.hash);

            $target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');

            if ($target.length) {

                var targetOffset = $target.offset().top;

                $('html,body').animate({ scrollTop: targetOffset }, 1000);

                return false;

            }

        }

    });

});
/*Fin funcion para desplazarse con animacion con el atributo anclaje href*/





/*Esto es para bloquear el click derecho del mouse*/
document.oncontextmenu = function() {
    return false
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


/*Esto es para que solo acepte los caracteres definidos */
function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz123456789_."; //estos son los caracteres que va a aceptar
    especiales = "8-37-39-46";

    tecla_especial = false
    for (var i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
    }
}

function cambiar_caracteres(elemento1, elemento2) {
    tecla = (document.all) ? elemento1.keyCode : elemento1.which;
    elemento2.value = elemento2.value.toUpperCase();
}


/*Esta funcion es para no dejar  enviar si no autoriza los terminos y condiciones*/



function agreesubmit(el) {
    checkobj = el
    if (document.all || document.getElementById) {
        for (i = 0; i < checkobj.form.length; i++) {
            var tempobj = checkobj.form.elements[i]
            if (tempobj.type.toLowerCase() == "submit")
                tempobj.disabled = !checkobj.checked
            document.getElementById('input_submit_solicitud').style.backgroundColor = '#6a789b';
        }
    }
}

function defaultagree(el) {
    if (!document.all && !document.getElementById) {
        if (window.checkobj && checkobj.checked)
            return true
        else {
            alert("Por favor, lea y acepta los términos ")
            return false
        }
    }
}