<?php
session_start();
//actualizar datos
$nombre = $_GET['nombre_al'];
$apellido = $_GET['apellido_al'];
$IdRH = $_SESSION["id_user"];
if (isset($_GET["button1"])) {

  $conexion = mysqli_connect("localhost","root","","jjd-food");
  $consulta = "UPDATE `recursos_humanos` SET `Nombre`='$nombre',`Apellido`='$apellido' WHERE id='$IdRH' ";
  $resultado = mysqli_query($conexion, $consulta);
  if ($resultado) {
    header("location: editar_datos.php");
    mysqli_free_result($resultado);
  }else{
    echo "No se pudo";
  }

}


//Actualizar contraseña



if (isset($_GET["button2"])) {
$passRH = $_GET['pass_new'];
$conexion = mysqli_connect("localhost","root","","jjd-food");
$consulta = "UPDATE `recursos_humanos` SET `Contraseña` = '$passRH' WHERE id='$IdRH'";
$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {
  header("location: editar_datos.php");
  mysqli_free_result($resultado);
}else{
  echo "No se pudo";
}


}
