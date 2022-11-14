<?php
session_start();
$id_user = $_SESSION["id_user"];
$total =  $_SESSION["precio"];
$dia = dia_semana();
$Det_fecha = fecha_detalle();

if (isset($_GET["domicilio"])) {
    $direccion = $_GET['direccion'];
    $conexion = mysqli_connect("localhost","root","","jjd-food");
    $consulta = "INSERT INTO `pedido`(`id`, `Precio`, `Fecha`, `tipo`, `direccion`) VALUES ('$id_user','$total','$dia','domicilio','$direccion','$Det_fecha')";
    $resultado = mysqli_query($conexion, $consulta);
    if ($resultado) {
      unset($_SESSION['precio']);
      unset($_SESSION['carrito']);
      header("location: ../index.php");
      mysqli_free_result($resultado);
      
    }else{
      echo "No se pudo";
    }
}

if (isset($_GET["plazoleta"]) && isset($_SESSION['carrito'])) {
    $conexion = mysqli_connect("localhost","root","","jjd-food");
    $consulta = "INSERT INTO `pedido`(`id`, `Precio`, `Fecha`, `tipo`, `direccion`,`det_fecha`) VALUES ('$id_user','$total','$dia','Plazoleta','Centro comercial')";
    $resultado = mysqli_query($conexion, $consulta);
    if ($resultado) {
      unset($_SESSION['precio']);
      unset($_SESSION['carrito']);
      header("location: ../index.php");
      mysqli_free_result($resultado);
     
    }else{
      echo "No se pudo";
    }
}else {
    header("location: ../index.php");
}


function dia_semana(){
    setlocale(LC_ALL, 'es_ES');
            date_default_timezone_set( 'America/Bogota' );
            $day = date("l");
            switch ($day) {
                case "Sunday":
                    return "domingo";
                break;
                case "Monday":
                    return "lunes";
                break;
                case "Tuesday":
                    return "martes";
                break;
                case "Wednesday":
                    return "miércoles";
                break;
                case "Thursday":
                    return "jueves";
                break;
                case "Friday":
                    return "viernes";
                break;
                case "Saturday":
                    return "sábado";
                break;
            }
            return "lunes";
   }

   function fecha_detalle(){
    setlocale(LC_ALL, 'es_ES');
    date_default_timezone_set( 'America/Bogota' );
    $time = date("Y-n-j");
    return $time;
}