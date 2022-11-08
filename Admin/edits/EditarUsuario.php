<?php
$conexion = mysqli_connect("localhost","root","","jjd-food");
$ID = $_POST['id'];
$Nombre = $_POST['nombre'];
$Apellido = $_POST['apellido'];
$Correo = $_POST['correo'];
$Tel = $_POST['telefono'];
$Contra = $_POST['contraseña'];

$query = "UPDATE `usuarios` SET `nombre_usu`='$Nombre',`apellido_usu`='$Apellido',`correo`='$Correo',`Telefono`='$Tel',`contraseña`='$Contra' WHERE id = $ID";
$resultado = mysqli_query($conexion,$query);
header("Location:../EditUser.php");
 ?>
