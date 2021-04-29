$(document).ready(() => {

    function valida_telefono() {
        telefono = $('#registro-telefono').val();
        telefono = parseInt(telefono);
        if (telefono < 0) {
            swal('Alerta en el telefono', 'No existen numeros de telefono NEGATIVOS', 'warning');
            return false;
        } else {
            telefono = telefono.toString();
            if (telefono.length < 10) {
                swal('Alerta en el telefono', 'No debes de tener mas de 10 digitos\nRecuerda que en la zona metropolitana los inician con 55 o 56\nEjemplo: 5554189163', 'warning');
                return false;
            } else if (telefono.length > 10) {
                swal('Alerta en el telefono', 'No debes de tener menos de 10 digitos\nRecuerda que en la zona metropolitana los inician con 55 o 56\nEjemplo: 5554189163', 'warning');
                return false;
            } else {
                registro_telefono = $('#registro-telefono').val();
                /* valida_seleccion_carrera(); */
            }
        }
    }

    function valida_fecha_nacimiento() {
        if ($('#registro-nacimiento').val() != "") {
            fecha_ingresada = $('#registro-nacimiento').val().split("-");
            edad = 2021 - fecha_ingresada[0];
            if (edad < 16) {
                swal('Alerta en fecha de nacimiento', 'La fecha no es valida: Eres muy joven', 'warning');
                return false;
            } else if (edad > 99) {
                swal('Alerta en fecha de nacimiento', 'La fecha no es valida: Eres muy viejo', 'warning');
                return false;
            } else {
                registro_fecha_nacimiento = $('#registro-nacimiento').val();
                valida_telefono();
            }
        }
    }

    function valida_construccion_alfabetica() {
        cadena = $('#registro-nombre').val();
        console.log(cadena);
        regexp1 = /[^A-Za-z +]/gi;
        regexp2 = /[^A-Z]\s/gi;
        resultado1 = cadena.match(regexp1);
        resultado2 = cadena.match(regexp2);
        console.log(resultado1);
        console.log(resultado2);
        if (resultado1 != null || resultado2 != null) {
            if (resultado1 == null) {
                resultado1 = "";
            }
            if (resultado2 == null) {
                resultado2 = "";
            }
            swal('Alerta en el Nombre...', 'Los siguientes caracteres no son validos:\n\n' + resultado1 + resultado2, 'warning');
            return false;
        } else {
            registro_nombre = $('#registro-nombre').val();
            registro_nombre = registro_nombre.trim();
            registro_nombre = registro_nombre.toUpperCase;
            cadena = $('#registro-paterno').val();
            resultado1 = cadena.match(regexp1);
            resultado2 = cadena.match(regexp2);
            if (resultado1 != null || resultado2 != null) {
                if (resultado1 == null) {
                    resultado1 = "";
                }
                if (resultado2 == null) {
                    resultado2 = "";
                }
                swal('Alerta en el Apellido Paterno...', 'Los siguientes caracteres no son validos:\n\n' + resultado1 + resultado2, 'warning');
                return false;
            } else {
                registro_paterno = $('#registro-paterno').val();
                registro_paterno = registro_paterno.trim();
                registro_paterno = registro_paterno.toUpperCase;
                cadena = $('#registro-materno').val();
                resultado1 = cadena.match(regexp1);
                resultado2 = cadena.match(regexp2);
                if (resultado1 != null || resultado2 != null) {
                    if (resultado1 == null) {
                        resultado1 = "";
                    }
                    if (resultado2 == null) {
                        resultado2 = "";
                    }
                    swal('Alerta en el Apellido Materno...', 'Los siguientes caracteres no son validos:\n\n' + resultado1 + resultado2, 'warning');
                    return false;
                } else {
                    registro_materno = $('#registro-materno').val();
                    registro_materno = registro_materno.trim();
                    registro_materno = registro_materno.toUpperCase;
                    cadena = $('#registro-materno').val();
                    resultado1 = cadena.match(regexp1);
                    resultado2 = cadena.match(regexp2);
                    valida_fecha_nacimiento();
                }
            }
        }
    }

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
            valida_construccion_alfabetica();
        }
    }

    $('#btn-registro-usuario').click(() => {
        valida_vacios();
    });
});