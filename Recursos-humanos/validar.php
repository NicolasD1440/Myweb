<?php 
session_start();
$mensaje = $_POST["respuesta"];
$id_res = $_GET["id_res"];
$conexion = mysqli_connect("localhost","root","","jjd-food");

if (empty($_POST["res"])) {

$consulta = "INSERT INTO `respuesta`(`id-mensaje`, `Asunto`, `Mensaje`) VALUES ('$id_res','Respuesta','$mensaje')";
$resultado = mysqli_query($conexion, $consulta);


}

if (empty($_POST["res"])) {
    $consulta = "UPDATE `mensajes` SET`estado`='1' WHERE id_mensaje=$id_res";
    $resultado = mysqli_query($conexion, $consulta);
}

?>