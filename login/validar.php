<body style="background: linear-gradient(to right, #18A6FD, #C61CBC)">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
error_reporting(0);
//Funcion para logearse

$usuario = $_POST['usuario'];
$contraseña = $_POST['password'];

session_start();
$_SESSION['usuario'] = $usuario;
$conexion = mysqli_connect("localhost","root","","jjd-food");


if (!empty($_POST["inicio"])) {

  $consulta = "SELECT * FROM usuarios WHERE Nombre ='$usuario' and contraseña = '$contraseña'";
  $resultado = mysqli_query($conexion, $consulta);
  $Datos = mysqli_fetch_array($resultado);
  $filas = mysqli_num_rows($resultado);

  $_SESSION['Usuario']= $usuario;
  $_SESSION['Password']= $contraseña;

  if ($filas) {
    ?>
    <script>
      Swal.fire({
        title: 'Bienvenido',
        text: "<?php echo $Datos[2]." ".$Datos[3] ?>",
        icon: 'success',
        showCancelButton: false,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ok'
        }).then((result) => {
        if (result.isConfirmed) {
          window.location.href="../usuario/dashboard.php"
        }
        })
    </script>
  <?php
  }else {
    ?>

    <script>
      Swal.fire({
      title: 'Error al ingresar los datos',
      text: "Porfavor intente nuevamente",
      icon: 'error',
      showCancelButton: false,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ok'
      }).then((result) => {
      if (result.isConfirmed) {
        window.location.href="Login.php"
      }
      })
    </script>
<?php
  }
}




//Funcion para registrarse

$Nombre_usuario = $_POST["Nom_user"];
$nombre = $_POST["Nom"];
$apellido = $_POST["Ape"];
$edad = $_POST["Edad"];
$correo = $_POST["email"];
$telefono = $_POST["Telefono"];
$contraseña2 = $_POST["password2"];

    if (!empty($_POST["registro"])) {
    $conexion = mysqli_connect("localhost","root","","jjd-food");
    $query ="INSERT INTO `usuarios`(`Nombre`, `nombre_usu`, `apellido_usu`, `edad`, `correo`,`Telefono`, `contraseña`) VALUES ('$Nombre_usuario','$nombre','$apellido','$edad','$correo','$telefono','$contraseña2')";
    $result = mysqli_query($conexion, $query);
    if ($result) {
      ?>
        <script>
          Swal.fire({
            title: 'Felicidades',
            text: "Se registro con exito",
            icon: 'success',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ok'
            }).then((result) => {
            if (result.isConfirmed) {
              window.location.href="../index.php"
            }
            })
        </script>
      <?php
    }else{
      echo"NO se insertaron los datos";
    }
  }






 ?>
</body>
