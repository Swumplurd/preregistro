$(document).ready(() => {

    function valida_vacios() {
        if ($('#registro-nombre').val() == "") {
            swal('Upps', 'Ingresa tu nombre plox', 'warning');
            return false;
        }
    }
    $('#btn-registro-usuario').click(() => {
        valida_vacios();
    });
});