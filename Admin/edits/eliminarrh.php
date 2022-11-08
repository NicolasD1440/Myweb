<?php
error_reporting(0);
session_start();
$conexion = mysqli_connect("localhost","root","","jjd-food");

$Idempleador = $_GET['idempleador'];
$query = "DELETE FROM `recursos_humanos` WHERE id=$Idempleador";
$resultado = mysqli_query($conexion,$query);
  header("location: ../EditEmple.php"); ?>
