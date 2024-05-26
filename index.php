<!-- Pagina principal o dashboard del sistema de ventas, creado utilizando el framework adminLTE, en este archivo se implementa la vista principal, junto con el uso de frameworks como sweetalert2 y uso de php para validar sesiones -->


<!-- Codigo PHP para validar que el usuario haya iniciado sesion, de lo contrario, debera llevarlo a la pantalla de login. -->
<?php

  include("app/config.php");

  session_start();
  if (isset($_SESSION["session_nombre"])){
    //echo "Bienvenido ".$_SESSION["session_nombre"];
    $nombre_sesion = $_SESSION["session_nombre"];
    $sql = "SELECT * FROM tb_usuarios WHERE `nombres` = '$nombre_sesion'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach( $usuarios as $usuario ){
        $email_tabla = $usuario['email'];
    }

  }else{
    echo "no existe sesion";
    header("Location: ".$URL."/login");
  }

?>


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
  <link rel="stylesheet" href="public/templates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/templates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
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
      <img src="imagenes/Logo.png" alt="Bazar Logo" class="brand-image elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Los monitos de la nona</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="public/templates/AdminLTE-3.2.0/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <!-- Borramos el contenido de ejemplo y aumentamos a 12 columnas -->
          <div class="col-sm-12">
            <h1 class="m-0">Bienvenido <?php echo $nombre_sesion?></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    

    <!-- Main content -->
    <!-- Borramos el contenido de ejemplo -->
    <div class="content">
      <div class="container-fluid">
        
        nada que ver aqui 👀

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Agregamos informacion del usuario como su nombre y su correo -->
    <div class="p-3">
      <h5>Datos del usuario</h5>
      <p>Nombre: <br> <?php echo $nombre_sesion?></p>
      <p>Correo: <?php echo $email_tabla?></p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Copyright del sistema (Cambiar despues) -->
    <strong>Copyright &copy; 2024 <a href="https://github.com/TheLouisXD">TheLouisXD</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="public/templates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="public/templates/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="public/templates/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>
</html>
