<?php
//agregar empleado de administrador
error_reporting(0);
session_start();
$conexion = mysqli_connect("localhost","root","","jjd-food");
if (isset($_GET['button'])) {

  $Nombread = $_GET['nombrea'];
  $Apellidoad = $_GET['apellidoa'];
  $Dependeciaad = $_GET['dependenciaa'];
  $Salarioad = $_GET['salarioa'];
  $Contraseñaad = $_GET['contraseñaa'];

  $query = "INSERT INTO `administracion`(`id`, `Nombre`, `Apellido`, `Dependencia`, `Salario`, `Contraseña`) VALUES ('','$Nombread','$Apellidoad','$Dependeciaad','$Salarioad','$Contraseñaad')";
  $resultado = mysqli_query($conexion,$query);

  header("location: ../EditEmple.php");
}if (isset($_GET['buttonr'])) {

  $Nombread = $_GET['nombrer'];
  $Apellidoad = $_GET['apellidor'];
  $Dependeciaad = $_GET['dependenciar'];
  $Salarioad = $_GET['salarior'];
  $Contraseñaad = $_GET['contraseñar'];

  $query = "INSERT INTO `recursos_humanos`(`id`, `Nombre`, `Apellido`, `Dependencia`, `Salario`, `Contraseña`) VALUES ('','$Nombread','$Apellidoad','$Dependeciaad','$Salarioad','$Contraseñaad')";
  $resultado = mysqli_query($conexion,$query);

  header("location: ../EditEmple.php");
}if (isset($_GET['buttonc'])) {

  $Nombread = $_GET['nombrec'];
  $Apellidoad = $_GET['apellidoc'];
  $Dependeciaad = $_GET['dependenciac'];
  $Salarioad = $_GET['salarioc'];
  $Contraseñaad = $_GET['contraseñac'];

  $query = "INSERT INTO `contabilidad`(`id`, `Nombre`, `Apellido`, `Dependencia`, `Salario`, `Contraseña`) VALUES ('','$Nombread','$Apellidoad','$Dependeciaad','$Salarioad','$Contraseñaad')";
  $resultado = mysqli_query($conexion,$query);

  header("location: ../EditEmple.php");
}

  $Idempleado = $_GET['idempleado'];
  $query = "DELETE FROM `administracion` WHERE id=$Idempleado";
  $resultado = mysqli_query($conexion,$query);
    header("location: ../EditEmple.php");


 ?>
