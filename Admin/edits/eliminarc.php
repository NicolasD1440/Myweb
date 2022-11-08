<?php
error_reporting(0);
session_start();
$conexion = mysqli_connect("localhost","root","","jjd-food");

$Idempleadoc = $_GET['idempleadoc'];
$query = "DELETE FROM `contabilidad` WHERE id=$Idempleadoc";
$resultado = mysqli_query($conexion,$query);
    header("location: ../EditEmple.php") ?>
