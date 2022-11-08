<?php
@session_start();
session_destroy();
unset($_SESSION['id_user']);
unset($_SESSION['usuario']);
$tabla = $_SESSION['Tabla'];
if ($tabla =="administracion") {
  header("location: ../Ingreso.php?Tabla=administracion&usuario=Nombre&Contraseña=contraseña");
}
else if ($tabla =="recursos_humanos") {
  header("location: ../Ingreso.php?Tabla=recursos_humanos&usuario=Nombre&Contraseña=contraseña");
}
else if ($tabla =="contabilidad") {
  header("location: ../Ingreso.php?Tabla=contabilidad&usuario=Nombre&Contraseña=contraseña");
}
else{
  echo "Error ";
}
