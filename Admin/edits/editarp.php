<?php
session_start();
// Cambios datos tabla admin
$conexion = mysqli_connect("localhost","root","","jjd-food");
$Idad = $_SESSION['id_user'];
$Nombre_all = $_GET['nombre_al'];
$Apellido_all = $_GET['apellido_al'];
$Contra = $_GET['pass_new'];
 if (isset($_GET['button1'])) {

 $query = "UPDATE `administracion` SET `Nombre`='$Nombre_all',`Apellido`='$Apellido_all' WHERE id = '$Idad'";
 $resultado = mysqli_query($conexion,$query);
 if ($resultado) {
   header("Location:../EditarPerfil.php");
   mysqli_free_result($resultado);
 }
} if (isset($_GET['button2'])) {
   $query = "UPDATE `administracion` SET `Contraseña`='$Contra' WHERE id = '$Idad'";
   $resultado = mysqli_query($conexion,$query);
   if ($resultado) {
     header("Location:../EditarPerfil.php");
     mysqli_free_result($resultado);
   }
 }
 ?>
