<?php
error_reporting(0);
session_start();

$Nombreplato = $_GET['nombreplato'];

$conexion = mysqli_connect("localhost","root","","jjd-food");
$query = "DELETE FROM `platos` WHERE Titulo='$Nombreplato'";
$resultado = mysqli_query($conexion,$query);
  header("location: ../Inventario.php");

 ?>
