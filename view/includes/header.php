<div class="container mb-4">
  <div class="row">
    <div class="col">
      <div class="jumbotron mb-0 py-4 bg-dark text-light rounded-0 rounded-bottom">
        <h1 class="display-3">Preregistro ITMA II</h1>
        <p class="lead">Web Ejemplo de Formularios PHP-MYSQL-AJAX</p>
        <hr class="my-2 bg-light">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded-bottom">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link <?php if ($_GET['vista'] == 'home') {echo 'active';} ?>" href="home">Home</a>
            <a class="nav-item nav-link <?php if ($_GET['vista'] == 'login') {echo 'active';} ?>" href="login">Login</a>
            <a class="nav-item nav-link <?php if ($_GET['vista'] == 'registro') {echo 'active';} ?>" href="registro">Registro</a>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>