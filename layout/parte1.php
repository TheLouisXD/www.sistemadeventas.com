<!-- Este archivo incluye la base la interfaz del sistema de ventas, el hacerlo de forma separada nos permite reutilizar codigo y asi ahorrar lineas de codigo -->


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema de ventas</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo $URL?>/public/templates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $URL?>/public/templates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
  <!-- Sweet Alert 2-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body class="hold-transition sidebar-mini">

<!-- Mensaje de ingreso exitoso -->
<script>
    Swal.fire({
      position: "top-end",
      icon: "success",
      title: "Bienvenido al sistema <?php echo $nombre_sesion ?>",
      showConfirmButton: false,
      timer: 1500
    });
</script>


<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- Ponemos el nombre del bazar -->
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">los monitos de la nona</a>
      </li>

      <!-- Creamos un boton que llama al archivo que cierra la sesion -->
      <a href="<?php echo $URL;?>/app/controllers/login/cerrar_sesion.php" class="btn btn-danger">Cerrar sesion</a>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <!-- Boton para poner la pagina en pantalla completa :0 -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo $URL ?>" class="brand-link">
      <img src="<?php echo $URL?>/imagenes/Logo.png" alt="Bazar Logo" class="brand-image elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Los monitos de la nona</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <!-- Usamos el session_nombre para poner el nombre del usuario en el navbar -->
        <div class="info">
          <a href="#" class="d-block"><?php echo $nombre_sesion;?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <!-- le sacamos el menu-open para que no este siempre abierto -->
          <li class="nav-item">
            <a href="#" class="nav-link active">

              <!-- Modificamos el boton -->
              <i class="nav-icon fas fa-users"></i>
              <p>
                Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <!-- Quitamos el active para que no se resalte el boton -->
                <a href="<?php echo $URL;?>/usuarios" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/usuarios/create.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crear usuarios</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Añadimos el boton de cerrar sesion en la barra lateral -->
          <li class="nav-item">
            <a href="<?php echo $URL;?>/app/controllers/login/cerrar_sesion.php" class="nav-link" style="background-color: #ff4040">
              <i class="nav-icon fas fa-door-closed"></i>
              <p>
                Cerrar sesion
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>