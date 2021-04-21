$(document).ready(() => {
    function valida_vacios() {
        if ($('#registro-nombre').val() == "") {
            swal('Upps', 'Ingresa tu Nombre por favor', 'warning');
            return false;
        } else if ($('#registro-paterno').val() == "") {
            swal('Upps', 'Ingresa tu Apellido Paterno por favor', 'warning');
            return false;
        } else if ($('#registro-materno').val() == "") {
            swal('Upps', 'Ingresa tu Apellido Materno por favor', 'warning');
            return false;
        } else if ($('#registro-nacimiento').val() == "") {
            swal('Upps', 'Ingresa tu Fecha de Nacimiento por favor', 'warning');
            return false;
        } else if ($('#registro-telefono').val() == "") {
            swal('Upps', 'Ingresa tu Telefono por favor', 'warning');
            return false;
        } else if ($('#registro-carrera').val() == "") {
            swal('Upps', 'Selecciona tu Carrera, por favor', 'warning');
            return false;
        } else if ($('#registro-email').val() == "") {
            swal('Upps', 'Ingresa tu Email por favor', 'warning');
            return false;
        } else if ($('#registro-password').val() == "") {
            swal('Upps', 'Ingresa tu Password por favor', 'warning');
            return false;
        } else if ($('#registro-password-confirmacion').val() == "") {
            swal('Upps', 'Confirma tu Password por favor', 'warning');
            return false;
        } else {
            swal('Cool', 'Terminaste el formulario de registro', 'success');
        }
    }

    $('#btn-registro-usuario').click(() => {
        valida_vacios();
    });
});