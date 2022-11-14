<body style="background: linear-gradient(to right, #18A6FD, #C61CBC)">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
session_start();
$conexion = mysqli_connect("localhost","root","","jjd-food");
$IdUser = $_GET["iduser"];
$Idmensaje = generar_id();
$opc = $_POST['opciones'];
$mensaje = $_POST['mensaje'];
$fecha = fecha();
if (isset($_POST['enviar'])) {
   $consulta = "INSERT INTO `mensajes`(`id`, `id_mensaje`, `Asunto`, `mensaje`,`fecha`, `estado`) VALUES ('$IdUser', '$Idmensaje' ,'$opc','$mensaje','$fecha', '0')";
   $resultado = mysqli_query($conexion, $consulta);
   if ($resultado) {
    ?>
    <script>
      Swal.fire({
        title: 'Mensaje enviado',
        text: "Su mensaje se envio de forma correcta",
        icon: 'success',
        showCancelButton: false,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ok'
        }).then((result) => {
        if (result.isConfirmed) {
          window.location.href="comentarios.php"
        }
        })
    </script>
  <?php
   }
   //echo $Idmensaje;
}

function generar_id(){
    $aleat = rand(0,100000); //rand(mínimo y el máximo);
    return $aleat.substr(6, 6);
   }

   function fecha(){
    setlocale(LC_ALL, 'es_ES');
    date_default_timezone_set( 'America/Bogota' );
    $day = date("l");
    $plus = date("d");
    $time = date("h:i A");
    switch ($day) {
        case "Sunday":
            return "domingo ".$plus ." ".$time;
        break;
        case "Monday":
            return "lunes ".$plus." ".$time;
        break;
        case "Tuesday":
            return "martes ".$plus." ".$time;
        break;
        case "Wednesday":
            return "miércoles ".$plus." ".$time;
        break;
        case "Thursday":
            return "jueves ".$plus." ".$time;
        break;
        case "Friday":
            return "viernes ".$plus." ".$time;
        break;
        case "Saturday":
            return "sábado ".$plus." ".$time;
        break;
    }
}
?>
</body>