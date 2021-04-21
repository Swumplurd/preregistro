<div class="container">
  <div class="row">
    <div class="col">
      <form action="" id="formulario-registro-a">
        <div class="form-group">
          <label for="registro-nombre">Nombre</label>
          <input type="text" name="registro-nombre" id="registro-nombre" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="registro-paterno">Apellido Paterno</label>
          <input type="text" name="registro-paterno" id="registro-paterno" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="registro-materno">Apellido Materno</label>
          <input type="text" name="registro-materno" id="registro-materno" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="registro-nacimiento">Fecha de Nacimiento</label>
          <input type="date" name="registro-nacimiento" id="registro-nacimiento" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="registro-telefono">Telefono de Contacto</label>
          <input type="tel" name="registro-telefono" id="registro-telefono" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Help text</small>
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
      </form>
    </div>
    <hr>
    <div class="col">
      <form action="" id="formulario-registro-b">
        <div class="form-group">
          <label for="registro-mail">Email</label>
          <input type="email" name="registro-mail" id="registro-mail" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="registro-password">Password</label>
          <input type="password" name="registro-password" id="registro-password" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="registro-password-confirmacion">Confirmar Password</label>
          <input type="password" name="registro-password-confirmacion" id="registro-password-confirmacion" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Help text</small>
        </div>
        <div class="form-group">
          <span id="btn-registro-usuario" class="btn btn-outline-success btn-block">Registrate</span>
        </div>
        <div class="form-group">
          <a href="login" class="btn btn-outline-dark btn-block">Cancelar</a>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="manager/registro.js"></script>