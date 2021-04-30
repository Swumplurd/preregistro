$(document).ready(() => {

    class Validar {
        constructor(nombre = $('#registro-nombre').val().toUpperCase(), ap_paterno = $('#registro-paterno').val().toUpperCase(), ap_materno = $('#registro-materno').val().toUpperCase(), fecha_nacimiento = $('#registro-nacimiento').val().split("-"), tel = $('#registro-telefono').val(), carrera = $('#registro-carrera').val(), email = $('#registro-email').val(), password = $('#registro-password').val(), re_password = $('#registro-password-confirmacion').val()) {
            this.nombre = nombre,
            this.ap_paterno = ap_paterno,
            this.ap_materno = ap_materno,
            this.fecha_nacimiento = fecha_nacimiento,
            this.tel = tel,
            this.carrera = carrera,
            this.email = email,
            this.password = password,
            this.re_password = re_password
        }
        
        vacios() {
             if (this.nombre == '' || this.ap_paterno == '' || this.ap_materno == '' || this.fecha_nacimiento == '' || this.tel == '' || this.carrera == '' || this.email == '' || this.password == '' || this.re_password == '') {
                 swal(":(", "Llena todos los campos", "error");
             }
        }

        telefono() {
            if (this.tel.length < 10 || this.tel.length > 10) {
                swal(":(", "Tu telefono debe tener 10 digitos", "error");
            }
        }

        fecha() {
            let fecha_actual = new Date();
            let edad = fecha_actual.getFullYear() - this.fecha_nacimiento[0];
            if ((fecha_actual.getMonth() < (this.fecha_nacimiento[1] - 1)) || (fecha_actual.getDate() < this.fecha_nacimiento[2] && fecha_actual.getMonth() == (this.fecha_nacimiento[1] - 1))) {
                --edad;
            }
            if (edad < 16) {
                swal("xD", "Estas muy bebé", "warning");
                return false;
            } else if (edad > 99) {
                swal(":O", "Estas muy... viejito", "warning");
                return false;
            }
        }
    }
    
    $('#btn-registro-usuario').click(() => {
        let validar = new Validar();
        validar.vacios();
        validar.telefono();
        validar.fecha();
    });
});