<?php
$usuario = $_POST['usuario'];
$contraseña = $_POST['password'];
session_start();
$_SESSION['usuario'] = $usuario;

$conexion = mysqli_connect("localhost","root","","jjd-food");
$consulta = "SELECT * FROM usuarios WHERE Nombre ='$usuario' and contraseña = '$contraseña'";
$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultado);

if ($filas) {
  header("location:../index.php");
}else {
  echo "nop se pudo xd";

}

mysqli_free_result($resultado);
mysqli_close($conexion);
 ?>
