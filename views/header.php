<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilos.css">

    <title>Website</title>
    <style>
    </style>
  </head>
  <body>
    <div id="header" >
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand me-5 ms-5" href="?p=inicio"><img src="../img/logo-p.png" alt="" class="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse ps-5" id="navbarSupportedContent">
            <ul class="nav nav-fill nav-pills ms-auto me-5">
              <li class="nav-item">
                <a class="nav-link <?php echo $pagina == 'inicio' ? 'activ' : ''; ?>" aria-current="page" href="?p=inicio">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $pagina == 'sobrenosotros' ? 'activ' : ''; ?>" href="?p=sobrenosotros">Sobre Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $pagina == 'servicios' ? 'activ' : ''; ?>" href="?p=servicios">Servicios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $pagina == 'contacto' ? 'activ' : ''; ?>" href="?p=contacto">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $pagina == 'carrito' ? 'activ' : ''; ?>" href="?p=carrito" href=""><i class="bi bi-cart4 carrito"></i></a>
              </li>
            </ul>
            <!-- Vertically centered modal -->
            <br>
            <button type="button" class="btn btn-white me-5 is" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <i class="bi bi-person-circle"></i> Iniciar Sesión
            </button>
          </div>
        </div>
      </nav>
    </div>
    <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title font-weight-bold h3 text-center ms-5 mt-5" id="exampleModalLabel">Iniciar Sesión</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body mx-3">
                    <div class="input-group mb-3 form-floating">
                      <span class="input-group-text bg-v" id="icorreo"><i class="bi bi-envelope-fill"></i></span>
                      <input type="email" class="form-control" id="correo" placeholder="name@example.com" aria-label="correo" aria-describedby="icorreo">
                      <label class="ms-5" for="correo">Correo Electrónico</label>
                    </div>
                    <br>
                    <div class="input-group mb-3 form-floating">
                      <span class="input-group-text bg-v" id="ipassword"><i class="bi bi-lock-fill"></i></span>
                      <input type="password" class="form-control" id="password" placeholder="**********" aria-label="correo" aria-describedby="ipassword">
                      <label class="ms-5" for="password">Contraseña</label>
                    </div>
                  </div>
                  <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn bg-v mb-5">Iniciar Sesión</button>
                  </div>
                </div>
              </div>
            </div>