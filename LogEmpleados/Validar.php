<body style="background: linear-gradient(to right, #18A6FD, #C61CBC)">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
session_start();
error_reporting(0);
//Datos por url
$tabla = $_SESSION['Tabla'];
$User = $_SESSION['usuario'];
$Tipo_Contraseña = $_SESSION['Contraseña'];
//Datos del login
$usuario = $_POST["usuario"];
$_SESSION["usuarioemple"]=$usuario;
$contraseña = $_POST["contraseña"];

$conexion = mysqli_connect("localhost","root","","jjd-food");

$consulta = "SELECT * FROM $tabla WHERE $User  = '$usuario' and $Tipo_Contraseña = '$contraseña'";
$resultado = mysqli_query($conexion, $consulta);

$Nom_usuario = mysqli_fetch_array($resultado);

$filas = mysqli_num_rows($resultado);



if ($filas && $tabla =="administracion") {
  ?>
  <script>
    Swal.fire({
      title: 'Bienvenido',
      text: "<?php echo $Nom_usuario[1]." ".$Nom_usuario[2] ?>",
      icon: 'success',
      showCancelButton: false,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ok'
      }).then((result) => {
      if (result.isConfirmed) {
        window.location.href="../Admin/Admin.php"
      }
      })
  </script>
<?php
}
else if ($filas && $tabla =="recursos_humanos") {
  echo "rrhh";
}
else if ($filas && $tabla =="contabilidad") {
  echo "cont";
}
else{
  echo "Error ";

  echo $usuario;
  echo $contraseña;
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
</body>
