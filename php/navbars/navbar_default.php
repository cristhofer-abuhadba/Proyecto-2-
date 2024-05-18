<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark" style="border: 1px solid black;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#" onclick="home('<?php echo basename($_SERVER['PHP_SELF']); ?>')">Knight's DragonFire</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link disabled-link" id="descarga" href="descarga.php">Descarga</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Wiki
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#" onclick="hostiles('<?php echo basename($_SERVER['PHP_SELF']); ?>')">Entidades Hostiles</a></li>
                <li><a class="dropdown-item" href="#" onclick="neutrales('<?php echo basename($_SERVER['PHP_SELF']); ?>')">Entidades Neutrales</a></li>
                <li><a class="dropdown-item" href="#" onclick="jefes('<?php echo basename($_SERVER['PHP_SELF']); ?>')">Jefes</a></li>
                <li><a class="dropdown-item" href="#" onclick="objetos('<?php echo basename($_SERVER['PHP_SELF']); ?>')">Objetos</a></li>
                <li><a class="dropdown-item" href="#" onclick="razas('<?php echo basename($_SERVER['PHP_SELF']); ?>')">Razas</a></li>
                <li><a class="dropdown-item" href="#" onclick="roles('<?php echo basename($_SERVER['PHP_SELF']); ?>')">Roles</a></li>
                <li><a class="dropdown-item" href="#" onclick="truco('<?php echo basename($_SERVER['PHP_SELF']); ?>')">Terrenos</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="novedades" href="#" onclick="novedades('<?php echo basename($_SERVER['PHP_SELF']); ?>')">Novedades</a>
            </li>
          </ul>
          <a class="login" href="#" onclick="login('<?php echo basename($_SERVER['PHP_SELF']); ?>')">Login</a>
          <a class="register" href="#" onclick="register('<?php echo basename($_SERVER['PHP_SELF']); ?>')">Register</a>
        </div>
      </div>

    </nav>
  </header>
</body>

</html>