<body style="background: linear-gradient(to right, #18A6FD, #C61CBC)">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 
session_start();
$mensaje = $_POST["respuesta"];
$id_res = $_GET["id_res"];
$conexion = mysqli_connect("localhost","root","","jjd-food");

if (empty($_POST["res"])) {

$consulta = "INSERT INTO `respuesta`(`id_mensaje`, `Asunto`, `Mensaje`) VALUES ('$id_res','Respuesta','$mensaje')";
$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {
    
    $consulta = "UPDATE `mensajes` SET`estado`='1' WHERE id_mensaje=$id_res";
    $resultado = mysqli_query($conexion, $consulta);
    ?>
        <script>
          Swal.fire({
            title: 'Respuesta agregada',
            text: "Se agrego correctamente",
            icon: 'success',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ok'
            }).then((result) => {
            if (result.isConfirmed) {
              window.location.href="men_res.php"
            }
            })
        </script>
      <?php
}


}


?>
</body>