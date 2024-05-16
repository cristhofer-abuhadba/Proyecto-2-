<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="../../css/navbar_default.css">
  <script src="../../js/navbar_default.js"></script>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark" style="border: 1px solid black;">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo (basename($_SERVER['PHP_SELF']) == 'home.php') ? 'home.php' : '../../home.php' ?>">Knight's DragonFire</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="descarga.php">Descarga</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Wiki
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo (basename($_SERVER['PHP_SELF']) == 'home.php') ? 'Wiki/EntidadesHostiles/ehostiles.php' : '../EntidadesHostiles/ehostiles.php' ?>">Entidades Hostiles</a></li>
                <li><a class="dropdown-item" href="<?php echo (basename($_SERVER['PHP_SELF']) == 'home.php') ? 'Wiki/EntidadesNeutrales/eneutrales.php' : '../EntidadesNeutrales/eneutrales.php' ?>">Entidades Neutrales</a></li>
                <li><a class="dropdown-item" href="<?php echo (basename($_SERVER['PHP_SELF']) == 'home.php') ? 'Wiki/Jefes/jefes.php' : '../Jefes/jefes.php' ?>">Jefes</a></li>
                <li><a class="dropdown-item" href="<?php echo (basename($_SERVER['PHP_SELF']) == 'home.php') ? 'Wiki/Razas/razas.php' : '../Razas/razas.php' ?>">Razas</a></li>
                <li><a class="dropdown-item" href="<?php echo (basename($_SERVER['PHP_SELF']) == 'home.php') ? 'Wiki/Roles/roles.php' : '../Roles/roles.php' ?>">Roles</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="novedades" href="#">Novedades</a>
            </li>
          </ul>
          <a class="login" href="Login/Login.php">Login</a>
          <a class="register" href="Register/Register.php">Register</a>
        </div>
      </div>

    </nav>
  </header>
</body>

</html>