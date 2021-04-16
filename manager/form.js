$(document).ready(() => {

    let nombre;

    $('#btn-enviar').click(() => {
        $.ajax({
            type: 'POST',
            data: {
                nombre: $('#nombre').val(),
                password: $('#password').val(),
            },
            url: 'control/ctrl_form.php',

            success: resultado => console.log(resultado)
        });
    });
});