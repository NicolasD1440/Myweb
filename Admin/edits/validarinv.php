<body style="background: linear-gradient(to right, #18A6FD, #C61CBC)">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
//agregar empleado de administrador
error_reporting(0);
session_start();
$conexion = mysqli_connect("localhost","root","","jjd-food");

if (isset($_GET['button'])) {
 //insertar datos tabla admin
  $Nom = $_GET['nomplato'];
  $Ofer = $_GET['ofer'];
  $Env = $_GET['envi'];
  $Desc= $_GET['descri'];
  $Pres= $_GET['costo'];
  $Img = $_GET['imagen'];

  $query = "INSERT INTO `platos`(`Titulo`, `Oferta`, `Envio`, `descripcion`, `precio`, `imagen`) VALUES ('$Nom','$Ofer','$Env','$Desc','$Pres','$Img')";
  $resultado = mysqli_query($conexion,$query);
  if ($resultado) {
    ?>
      <script>
        Swal.fire({
          title: 'Plato Agregado',
          text: "Se registro con exito",
          icon: 'success',
          showCancelButton: false,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ok'
          }).then((result) => {
          if (result.isConfirmed) {
            window.location.href="../Inventario.php"
          }
          })
      </script>
    <?php
  }else{
    ?>
      <script>
        Swal.fire({
          title: 'Efe mi papai',
          text: "Agrege datos rey",
          icon: 'error',
          showCancelButton: false,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ok'
          }).then((result) => {
          if (result.isConfirmed) {
            window.location.href="../Inventario.php"
          }
          })
      </script>
    <?php
  }
}


?>
</body>
