<?php require_once "vistas/parte_superior.php" ?>
  <div class="container">
    <h1>Añadir o eliminar usuario</h1>
    <div class="container">
      <div class="row">
       <div class="caja col-20 shadow mx-auto">
         <ul class="nav nav-tabs" id="myTab" role="tablist">
           <li class="nav-item" role="presentation">
             <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Clientes</button>
           </li>
           <li class="nav-item" role="presentation">
             <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Pedidos</button>
           </li>
         </ul>
         <br>
         <div class="tab-content" id="myTabContent" >

           <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
               <div class="mx-auto">
                 <div class="col-8">
                   <table class="table table-responsive-sm">
                   <thead>
                       <tr>
                       <th scope="col">id</th>
                       <th scope="col">NombreUser</th>
                       <th scope="col">Nombre</th>
                       <th scope="col">Apellido</th>
                       <th scope="col">Edad</th>
                       <th scope="col">Correo</th>
                       <th scope="col">Telefono</th>
                       <th scope="col">Contraseña</th>
                       <th scope="col">Eliminar</th>
                       <th scope="col">Editar</th>
                       </tr>
                   </thead>
                   <tbody>
                   <?php
                   $conexion = mysqli_connect("localhost","root","","jjd-food");
                   $id_user = $_SESSION["id_user"];
                   $consulta = "SELECT * FROM `usuarios`";
                   $resultado = mysqli_query($conexion, $consulta);
                   while ($Rows = mysqli_fetch_array($resultado)) {
                     echo "<tr>";
                     echo "<td>$Rows[0]</td>";
                     echo "<td>$Rows[1]</td>";
                     echo "<td>$Rows[2]</td>";
                     echo "<td>$Rows[3]</td>";
                     echo "<td>$Rows[4]</td>";
                     echo "<td>$Rows[5]</td>";
                     echo "<td>$Rows[6]</td>";
                     echo "<td>$Rows[7]</td>";
                     echo "<td><a href='../Admin/edits/EliminarUser.php?iduser= $Rows[0]'>Eliminar</a> </td>";
                     echo "<td><a href='../Admin/FormularioEditUsuario.php?iduser= $Rows[0]'>Editar</a> </td>";
                     echo "</tr>";
                   }

                     ?>
                   </tbody>
                   </table>
               </div>
             </div>
           </div>

           <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
               <div class="mx-auto">
                <div class="caja col-11 mx-auto">
                 <div class="col-8">
                   <table class="table table-responsive-sm">
                   <thead>
                       <tr>
                       <th scope="col">id</th>
                       <th scope="col">Precio</th>
                       <th scope="col">Fecha</th>
                       <th scope="col">Tipo</th>
                       <th scope="col">Direccion</th>
                       <th scope="col">Eliminar</th>
                       </tr>
                   </thead>
                   <tbody>
                   <?php
                   $conexion = mysqli_connect("localhost","root","","jjd-food");
                   $id_user = $_SESSION["id_user"];
                   $consulta = "SELECT * FROM `pedido`";
                   $resultado = mysqli_query($conexion, $consulta);
                   while ($Rows = mysqli_fetch_array($resultado)) {
                     echo "<tr>";
                     echo "<td>$Rows[0]</td>";
                     echo "<td>$Rows[1]</td>";
                     echo "<td>$Rows[2]</td>";
                     echo "<td>$Rows[3]</td>";
                     echo "<td>$Rows[4]</td>";
                     echo "<td><a href='../Admin/edits/EliminarPedido.php?idped= $Rows[0]'>Eliminar</a> </td>";
                     echo "</tr>";
                   }

                     ?>
                   </tbody>
                   </table>
               </div>
             </div>
           </div>

           </div>
         </div>
      </div>
    </div>
   </div>
  </div>
<?php require_once "vistas/parte_inferior.php" ?>
