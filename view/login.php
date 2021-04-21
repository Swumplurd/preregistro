<div class="container">
  <div class="row">
    <div class="col-4 offset-4">
      <form>
        <div class="form-group">
          <label for="nombre">Usuario</label>
          <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="">
          <small id="helpId" class="text-muted">Ingresa tu usuario</small>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="">
          <small id="helpId" class="text-muted">Ingresa tu contraseña</small>
        </div>
        <span id="btn-enviar" class="btn btn-outline-primary btn-block">Login</button>
      </form>
    </div>

  </div>
</div>
<script src="<?=SERVIDOR?>manager/login.js"></script>