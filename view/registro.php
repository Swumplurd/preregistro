<div class="container">
  <div class="row">
    <div class="col">
      <form action="" id="formulario-registro-a">
        <fieldset>
          <legend>Informacion Personal</legend>
          <div class="form-group">
            <label for="registro-nombre">Nombre</label>
            <input required oncopy="return false" oncontextmenu="return false" onkeydown="return noCtrl(event)" onkeypress="return onlyLeters(event)" type="text" style="text-transform:uppercase" name="registro-nombre" id="registro-nombre" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Ingresa tu(s) nombre(s)</small>
          </div>
          <div class="form-group row">
            <div class="col">
              <label for="registro-paterno">Apellido Paterno</label>
              <input required oncopy="return false" oncontextmenu="return false" onkeydown="return noCtrl(event)" onkeypress="return onlyLeters(event)" type="text" style="text-transform:uppercase" name="registro-paterno" id="registro-paterno" class="form-control" placeholder="" aria-describedby="helpId">
              <small id="helpId" class="text-muted">Ingresa tu apellido paterno</small>
            </div>
            <div class="col">
              <label for="registro-materno">Apellido Materno</label>
              <input required oncopy="return false" oncontextmenu="return false" onkeydown="return noCtrl(event)" onkeypress="return onlyLeters(event)" type="text" style="text-transform:uppercase" name="registro-materno" id="registro-materno" class="form-control" placeholder="" aria-describedby="helpId">
              <small id="helpId" class="text-muted">Ingresa tu apellido materno</small>
            </div>
          </div>
          <div class="form-group row">
            <div class="col">
              <label for="registro-nacimiento">Fecha de Nacimiento</label>
              <input required oncopy="return false" oncontextmenu="return false" onkeydown="return noCtrl(event)" type="date" name="registro-nacimiento" id="registro-nacimiento" class="form-control" placeholder="" aria-describedby="helpId">
              <small id="helpId" class="text-muted">Ingresa tu fecha de nacimiento</small>
            </div>
            <div class="col">
              <label for="registro-telefono">Telefono de Contacto</label>
              <input required oncopy="return false" oncontextmenu="return false" onkeydown="return noCtrl(event)" onkeypress="return onlyNumbers(event)" type="tel" name="registro-telefono" id="registro-telefono" class="form-control" placeholder="" aria-describedby="helpId">
              <small id="helpId" class="text-muted">Preferentemente celular</small>
            </div>
          </div>
          <div class="form-group">
            <label for="">Carrera</label>
            <select class="form-control" name="registro-carrera" id="registro-carrera">
              <option value="">Selecciona</option>
              <option value="GEST">Ingenieria Gestion Empresarial</option>
              <option value="INDS">Ingenieria Industrial</option>
              <option value="SIST">Ingenieria en Sistemas Computacionales</option>
            </select>
          </div>
        </fieldset>
      </form>
    </div>
    <hr>
    <div class="col">
      <form action="" id="formulario-registro-b">
        <fieldset>
          <legend>Datos para Iniciar Sesion</legend>
          <div class="form-group">
            <label for="registro-email">Email</label>
            <input required oncopy="return false" oncontextmenu="return false" onkeydown="return noCtrl(event)" onkeypress="return onlyEmail(event)" type="email" name="registro-email" id="registro-email" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Ingresa un correo valido</small>
          </div>
          <div class="form-group row">
            <div class="col">
              <label for="registro-password">Password</label>
              <input required oncopy="return false" oncontextmenu="return false" onkeydown="return noCtrl(event)" type="password" name="registro-password" id="registro-password" class="form-control" placeholder="" aria-describedby="helpId">
              <small id="helpId" class="text-muted">Ingresa una contraseña</small>
            </div>
            <div class="col">
              <label for="registro-password-confirmacion">Confirmar Password</label>
              <input required oncopy="return false" oncontextmenu="return false" onkeydown="return noCtrl(event)" type="password" name="registro-password-confirmacion" id="registro-password-confirmacion" class="form-control" placeholder="" aria-describedby="helpId">
              <small id="helpId" class="text-muted">Confirma tu contraseña</small>
            </div>
          </div>
          <div class="form-group row my-5">
            <div class="col-8 offset-2">
              <span id="btn-registro-usuario" class="btn btn-outline-success btn-block">Registrate</span>
              <a href="login" class="btn btn-outline-dark btn-block">Cancelar</a>
            </div>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>

<script>
  function onlyLeters(event) {
    let key = event.keyCode || event.which;
    let tecla = String.fromCharCode(key).toLowerCase();
    let letras = "abcdefghijklmnopqrstuvwxyzñáéíóú ";
    if (letras.indexOf(tecla) == -1) {
      return false;
    } else {
      return true;
    }
  }

  function onlyNumbers(event) {
    let key = event.keyCode || event.which;
    let tecla = String.fromCharCode(key).toLowerCase();
    let numeros = "0123456789";
    console.log(numeros.indexOf(tecla));
    if (numeros.indexOf(tecla) == -1) {
      return false;
    } else {
      return true;
    }
  }

  function onlyEmail(event) {
    let key = event.keyCode || event.which;
    let tecla = String.fromCharCode(key).toLowerCase();
    let chars = "0123456789.abcdefghijklmnopqrstuvwxyz@_-";
    if (chars.indexOf(tecla) == -1) {
      return false;
    } else {
      return true;
    }
  }

  function noCtrl(event) {
    if (event.ctrlKey && (event.keyCode === 67 || event.keyCode === 86 || event.keyCode === 85 || event.keyCode === 117)) {
      return false;
    } else {
      return true;
    }
  }
</script>

<script src="manager/registro.js"></script>