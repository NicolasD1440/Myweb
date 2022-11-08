<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/FormularioEditUsuario.css">
    <meta charset="utf-8">
    <title>Modificar datos de Usuario</title>
  </head>
  <body>

<?php
$conexion = mysqli_connect("localhost","root","","jjd-food");
$Iduser = $_GET['iduser'];
$query = "SELECT * FROM `usuarios` WHERE id = $Iduser";
$resultado = mysqli_query($conexion,$query);
$mostrar = mysqli_fetch_array($resultado);

 ?>
 <?php require_once "vistas/parte_superior.php" ?>
 <form class="formulario" action="edits/EditarUsuario.php" method="post">
   <div class="form-group row">
     <label for="codigo" class="col-3">id:</label>
     <div class="mx-auto">
       <input type="text" name="id" value="<?php echo $mostrar[0] ?>" class="form-control " readonly>
     </div>
   </div>
   <div class="form-group row">
     <label for="codigo" class="col-3">Nombre:</label>
     <div class="mx-auto">
       <input type="text" name="nombre" value="<?php echo $mostrar[2] ?>" class="form-control " >
     </div>
   </div>
   <div class="form-group row">
     <label for="Usuario" class="col-3">Apellido:</label>
     <div class="mx-auto">
       <input type="text" name="apellido" value="<?php echo $mostrar[3] ?>" class="form-control">
     </div>
   </div>

   <div class="form-group row">
     <label for="email" class="col-3">Correo: </label>
      <div class="mx-auto">
       <input type="email" name="correo" value="<?php echo $mostrar[5] ?>" class="form-control" >
     </div>
   </div>

   <div class="form-group row">
     <label for="Telefono" class="col-3">Telefono: </label>
      <div class="mx-auto">
       <input type="text" name="telefono" value="<?php echo $mostrar[6] ?>" class="form-control" >
     </div>
   </div>

   <div class="form-group row">
     <label for="Telefono" class="col-3">Contraseña: </label>
      <div class="mx-auto">
       <input type="text" name="contraseña" value="<?php echo $mostrar[7] ?>" class="form-control" >
     </div>
   </div>

   <div class="form-group text-center">
     <button type="submit" name="button" class="btn btn-info">Modificar</button>
   </div>

 </form>
  <?php require_once "vistas/parte_inferior.php" ?>
  </body>
</html>
