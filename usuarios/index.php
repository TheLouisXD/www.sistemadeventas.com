<!-- Este modulo sirve para mostrar la pagina del listado de usuarios -->

<?php

  include("../app/config.php");
  // Reducimos codigo e importamos la verificacion
  include("../layout/sesion.php");

  include("../app/controllers/usuarios/listado_de_usuarios.php");

  include("../layout/parte1.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <!-- Borramos el contenido de ejemplo y aumentamos a 12 columnas -->
          <div class="col-sm-12">
            <h1 class="m-0">Listado de usuarios</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    

    <!-- Main content -->
    <!-- Borramos el contenido de ejemplo -->
    <div class="content">
      <div class="container-fluid">
        <!-- Aqui creamos una tarjeta para listado de usuarios -->
        <div class="row">
            <div class="col-md-8">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Usuarios</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <!-- Insertamos una tabla en la tarjeta -->
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                            </tr>
                            <!-- Agregamos el codigo correspondiente para mostrar la informacion obtenida en el controlador de listado de usuarios -->
                            <tbody>
                                <?php 
                                    //incluimos el controlador pero en la parte de arriba para evitar errores
                                    // include("../app/controllers/usuarios/listado_de_usuarios.php");

                                    foreach($datos_usuarios as $usuario_dato){?>
                                    <!-- concatenamos html para llenar la tabla con la informacion de la base de datos que necesitamos -->
                                    <tr>
                                        <td><?php echo $usuario_dato['id_usuario'];?></td>
                                        <td><?php echo $usuario_dato['nombres'];?></td>
                                        <td><?php echo $usuario_dato['email'];?></td>
                                    </tr>
                                    <!-- Cuando ya terminamos de insertar la informacion, volvemos a abrir el codigo php para asi poder hacer que el codigo funcione :D -->
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <?php include("../layout/parte2.php"); ?>