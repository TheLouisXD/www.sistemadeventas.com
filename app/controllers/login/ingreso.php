<?php

    include("../../config.php");

    $nombre = $_POST['nombre'];
    $password_user = $_POST['password_user'];

    $contador = 0;
    $sql = "SELECT * FROM tb_usuarios WHERE `nombres` = '$nombre' AND `password_user` = '$password_user'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach( $usuarios as $usuario ){
        $contador = $contador + 1;
        $nombre_tabla = $usuario['nombre'];
        $nombres = $usuario['nombres'];
    }

    if($contador == 0){
        echo "Datos incorrectos, vuelva a intentarlo";
    }else{
        echo "Datos correctos";
        session_start();
        $_SESSION["session_nombre"] = $nombre;
        header('Location: '.$URL.'/index.php');
    }
?>