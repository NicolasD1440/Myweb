<?php require_once "vistas/parte_superior.php" ?>
  <div class="container">
    <h1>Nuestros Empleados</h1>

        <div class="container">
          <div class="row">
           <div class="caja col-md-8 shadow mx-auto">
             <ul class="nav nav-tabs" id="myTab" role="tablist">
               <li class="nav-item" role="presentation">
                 <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Administracion</button>
               </li>
               <li class="nav-item" role="presentation">
                 <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Recursos Humanos</button>
               </li>
               <li class="nav-item" role="presentation">
                 <button class="nav-link" id="cont-tab" data-bs-toggle="tab" data-bs-target="#cont" type="button" role="tab" aria-controls="cont" aria-selected="false">Contabilidad</button>
               </li>
             </ul>
             <br>
             <div class="tab-content" id="myTabContent" >

               <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                 <div class="row">
                   <div class="mx-auto">
                       <table class="table table-responsive-sm">
                       <thead>
                           <tr>
                           <th scope="col">id</th>
                           <th scope="col">Nombre</th>
                           <th scope="col">Apellido</th>
                           <th scope="col">Dependencia</th>
                           <th scope="col">Salario</th>
                           <th scope="col">Contraseña</th>
                           </tr>
                       </thead>
                       <tbody>
                       <?php
                       $conexion = mysqli_connect("localhost","root","","jjd-food");
                       $id_user = $_SESSION["id_user"];
                       $consulta = "SELECT * FROM `administracion`";
                       $resultado = mysqli_query($conexion, $consulta);
                       while ($Rows = mysqli_fetch_array($resultado)) {
                         echo "<tr>";
                         echo "<td>$Rows[0]</td>";
                         echo "<td>$Rows[1]</td>";
                         echo "<td>$Rows[2]</td>";
                         echo "<td>$Rows[3]</td>";
                         echo "<td>$Rows[4]</td>";
                         echo "<td>$Rows[5]</td>";
                         echo "</tr>";
                       }

                         ?>
                       </tbody>
                       </table>
                   </div>
                 </div>
               </div>

               <!-- Formualrio rh -->

              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <div class="row">
              <div class="mx-auto">
                 <table class="table table-responsive-sm">
                 <thead>
                   <tr>
                     <th scope="col">id</th>
                     <th scope="col">Nombre</th>
                     <th scope="col">Apellido</th>
                     <th scope="col">Dependencia</th>
                     <th scope="col">Salario</th>
                     <th scope="col">Contraseña</th>
                   </tr>
                 </thead>
                 <tbody>
                 <?php
                 $conexion = mysqli_connect("localhost","root","","jjd-food");
                 $id_user = $_SESSION["id_user"];
                 $consulta = "SELECT * FROM `recursos_humanos`";
                 $resultado = mysqli_query($conexion, $consulta);
                 while ($Rows = mysqli_fetch_array($resultado)) {
                   echo "<tr>";
                   echo "<td>$Rows[0]</td>";
                   echo "<td>$Rows[1]</td>";
                   echo "<td>$Rows[2]</td>";
                   echo "<td>$Rows[3]</td>";
                   echo "<td>$Rows[4]</td>";
                   echo "<td>$Rows[5]</td>";
                   echo "</tr>";
                 }

                   ?>
                 </tbody>
                 </table>
             </div>
             </div>
             </div>
              <!-- Formualrio ct -->
             <div class="tab-pane fade" id="cont" role="tabpanel" aria-labelledby="cont-tab">
             <div class="row">
             <div class="mx-auto">
                 <table class="table table-responsive-sm">
                 <thead>
                   <tr>
                     <th scope="col">id</th>
                     <th scope="col">Nombre</th>
                     <th scope="col">Apellido</th>
                     <th scope="col">Dependencia</th>
                     <th scope="col">Salario</th>
                     <th scope="col">Contraseña</th>
                   </tr>
                 </thead>
                 <tbody>
                 <?php
                 $conexion = mysqli_connect("localhost","root","","jjd-food");
                 $id_user = $_SESSION["id_user"];
                 $consulta = "SELECT * FROM `contabilidad`";
                 $resultado = mysqli_query($conexion, $consulta);
                 while ($Rows = mysqli_fetch_array($resultado)) {
                 echo "<tr>";
                 echo "<td>$Rows[0]</td>";
                 echo "<td>$Rows[1]</td>";
                 echo "<td>$Rows[2]</td>";
                 echo "<td>$Rows[3]</td>";
                 echo "<td>$Rows[4]</td>";
                 echo "<td>$Rows[5]</td>";
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
<?php require_once "vistas/parte_inferior.php" ?>
