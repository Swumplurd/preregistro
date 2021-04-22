<?php
  require_once 'app/config.php';
?>

<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php
    require_once 'app/dependencias.php';
  ?>
  <title><?=NOMBRE_SERVIDOR; if (isset($_GET['vista'])){echo ' | ' . $_GET['vista'];}?></title>
</head>
<body>

<?php
  require_once 'view/includes/header.php'
?>

<?php
  if (isset($_GET['vista'])) {
    switch ($_GET['vista']) {
      case 'login':
        include_once 'view/login.php';
        break;
      case 'registro':
        include_once 'view/registro.php';
        break;
      case 'home':
        include_once 'view/home.php';
        break;
      default:
        include_once 'view/error404.php';
        break;
    }
  } else {
    header('location: home');
  }
?>

<?php
  require_once 'view/includes/footer.php'
?>

</div>
</body>
</html>