/*Esta funcion es para que en los campos de login solo acepte letras y numeros, ningun caracter especial*/
$('.input_login').on('input', function(e) {
    if (!/^[ a-z0-9_-]*$/i.test(this.value)) {
        this.value = this.value.replace(/[^ a-z0-9_-]+/ig, "");
    }
});
/*Esta funcion es para cambiar a mayusculas los valores que tiene el usuario y contraseña*/
$(document).ready(function() {
    $("#input_user").change(function() {
        $('#input_user').val($('#input_user').val().toUpperCase());
    });
});