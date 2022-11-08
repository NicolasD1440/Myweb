<?php
error_reporting(0);
session_start();
$conexion = mysqli_connect("localhost","root","","jjd-food");

$Idped = $_GET['idped'];
$query = "DELETE FROM `pedido` WHERE id=$Idped";
$resultado = mysqli_query($conexion,$query);
  header("location: ../EditUser.php"); ?>
