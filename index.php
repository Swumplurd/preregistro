<?php
  require_once 'app/config.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php
    require_once 'app/dependencias.php';
  ?>
  <title>Home</title>
</head>

<body>
  <?php
  if (isset($_GET['vista'])) {
    switch ($_GET['vista']) {
      case 'registro':
        include_once 'view/form.php';
        break;
      default:
        include_once 'view/error404.php';
        break;
    }
  } else {
    include_once 'view/home.php';
  }
  ?>
</div>
</body>

</html>