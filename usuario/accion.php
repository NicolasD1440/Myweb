<?php
  session_start();
  $nombre = $_GET['nombre_al'];
  $apellido = $_GET['apellido_al'];
  $correo = $_GET['Correo'];

  if (isset($_GET["button"])) {
    $nombre_usuario =  $_SESSION['Usuario'];
    $conexion = mysqli_connect("localhost","root","","jjd-food");
    $consulta = "UPDATE `usuarios` SET `nombre_usu`='$nombre',`apellido_usu`='$apellido',`correo`='$correo' WHERE Nombre = '$nombre_usuario'";
    $resultado = mysqli_query($conexion, $consulta);
    if ($resultado) {
      header("location: editar_datos.php");
      mysqli_free_result($resultado);
    }else{
      echo "No se pudo";
    }
  }
 
 
//Actualizar contraseña

$passN = $_GET['pass_new'];

if (isset($_GET["button2"])) {
 $nombre_usuario =  $_SESSION['Usuario'];
$conexion = mysqli_connect("localhost","root","","jjd-food");
$consulta = "UPDATE `usuarios` SET `contraseña` = '$passN' WHERE Nombre = '$nombre_usuario'";
$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {
    header("location: editar_datos.php");
    mysqli_free_result($resultado);
  }else{
    echo "No se pudo";
  }

}
