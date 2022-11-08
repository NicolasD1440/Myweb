<?php
error_reporting(0);
session_start();
$conexion = mysqli_connect("localhost","root","","jjd-food");

$Iduser = $_GET['iduser'];
$query = "DELETE FROM `usuarios` WHERE id=$Iduser";
$resultado = mysqli_query($conexion,$query);
  header("location: ../EditUser.php"); ?>
