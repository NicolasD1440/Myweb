<?php
session_start();
error_reporting(0);
$tabla = $_SESSION['Usuario'];
$Tipo_Contraseña = $_SESSION['Contraseña'];

$usuario = $_POST["Nombre"];
$contraseña = $_POST["contraseña"];
$conexion = mysqli_connect("localhost","root","","jjd-food");

$consulta = "SELECT * FROM $tabla WHERE $Tipo_Correo = '$usuario' and $Tipo_Contraseña = '$contraseña'";
$resultado = mysqli_query($conexion, $consulta);

$Nom_usuario = mysqli_fetch_array($resultado);

$filas = mysqli_num_rows($resultado);

$_SESSION['miSesion']= array();
$_SESSION['miSesion'][0] = $Nom_usuario[0];
$_SESSION['miSesion'][1] = $Nom_usuario[1];
$_SESSION['miSesion'][2] = $Nom_usuario[2];
$_SESSION['miSesion'][3] = $Nom_usuario[3];
$_SESSION['miSesion'][5] = $Nom_usuario[5];
echo "$tabla";
/*
if ($filas && $tabla =="administracion") {
  echo "string";
}
else if ($filas && $tabla =="recursos_humanos") {
  echo "string";
}
else if ($filas && $tabla =="contabilidad") {
  echo "string";
}
else{
  ?>
  <body>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script src="Alertas/Log_Error.js"></script>
  </body>

   <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);*/
?>
