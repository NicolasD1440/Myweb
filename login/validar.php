<?php
//Funcion para logearse

$usuario = $_POST['usuario'];
$contraseña = $_POST['password'];
session_start();
$_SESSION['usuario'] = $usuario;
$conexion = mysqli_connect("localhost","root","","jjd-food");


if (!empty($_POST["inicio"])) {

  $consulta = "SELECT * FROM usuarios WHERE Nombre ='$usuario' and contraseña = '$contraseña'";
  $resultado = mysqli_query($conexion, $consulta);

  $filas = mysqli_num_rows($resultado);

  $_SESSION['Usuario']= $usuario;
  $_SESSION['Password']= $contraseña;

  if ($filas) {
    header("location:../usuario/dashboard.php");

  }else {
    echo "nop se pudo xd";

  }
}




//Funcion para registrarse

$Nombre_usuario = $_POST["Nom_user"];
$nombre = $_POST["Nom"];
$apellido = $_POST["Ape"];
$edad = $_POST["Edad"];
$correo = $_POST["email"];
$telefono = $_POST["Telefono"];
$contraseña2 = $_POST["password2"];

    if (!empty($_POST["registro"])) {
    $conexion = mysqli_connect("localhost","root","","jjd-food");
    $query ="INSERT INTO `usuarios`(`Nombre`, `nombre_usu`, `apellido_usu`, `edad`, `correo`,`Telefono`, `contraseña`) VALUES ('$Nombre_usuario','$nombre','$apellido','$edad','$correo','$telefono','$contraseña2')";
    $result = mysqli_query($conexion, $query);
    if ($result) {
      echo"se insertaron los datos";
      header("location:../index.php");
    }else{
      echo"NO se insertaron los datos";
    }
    }






 ?>
