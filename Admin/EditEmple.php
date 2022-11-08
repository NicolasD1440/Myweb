<?php require_once "vistas/parte_superior.php" ?>
  <div class="container">
    <h1>Añadir o eliminar empleado</h1>

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
                 <div class="col-8">

                       <form class="" action="../Admin/edits/editar.php" method="get">
                         <div class="form-group row">
                           <label for="codigo" class="col-3">Nombre:</label>
                           <div class="mx-auto">
                             <input type="text" name="nombrea" value="" class="form-control">
                           </div>
                         </div>

                         <div class="form-group row">
                           <label for="Usuario" class="col-3">Apellido:</label>
                           <div class="mx-auto">
                             <input type="text" name="apellidoa" value="" class="form-control">
                           </div>
                         </div>

                         <div class="form-group row">
                           <label for="email" class="col-3">Dependencia: </label>
                            <div class="mx-auto">
                             <input type="text" name="dependenciaa" value="Administracion" class="form-control" readonly >
                           </div>
                         </div>

                         <div class="form-group row">
                           <label for="Telefono" class="col-3">Salario: </label>
                            <div class="mx-auto">
                             <input type="number" name="salarioa" value="" class="form-control" >
                           </div>
                         </div>

                         <div class="form-group row">
                           <label for="Telefono" class="col-3">Contraseña: </label>
                            <div class="mx-auto">
                             <input type="number" name="contraseñaa" value="" class="form-control" >
                           </div>
                         </div>

                         <div class="form-group text-center">
                           <button type="submit" name="button" class="btn btn-info">Añadir</button>
                         </div>

                       </form>
                    </div>

                   <table class="table table-responsive-sm">
                   <thead>
                       <tr>
                       <th scope="col">id</th>
                       <th scope="col">Nombre</th>
                       <th scope="col">Apellido</th>
                       <th scope="col">Dependencia</th>
                       <th scope="col">Salario</th>
                       <th scope="col">Contraseña</th>
                       <th scope="col">Eliminar</th>
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
                     echo "<td><a href='../Admin/edits/editar.php?idempleado= $Rows[0]'>Eliminar</a> </td>";
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
            <div class="col-8">


                <form class="" action="../Admin/edits/editar.php" method="get">
                  <div class="form-group row">
                    <label for="codigo" class="col-3">Nombre:</label>
                    <div class="mx-auto">
                      <input type="text" name="nombrer" value="" class="form-control">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Usuario" class="col-3">Apellido:</label>
                    <div class="mx-auto">
                      <input type="text" name="apellidor" value="" class="form-control">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="email" class="col-3">Dependencia: </label>
                     <div class="mx-auto">
                      <input type="text" name="dependenciar" value="Recursos humanos" class="form-control" readonly >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Telefono" class="col-3">Salario: </label>
                     <div class="mx-auto">
                      <input type="number" name="salarior" value="" class="form-control" >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Telefono" class="col-3">Contraseña: </label>
                     <div class="mx-auto">
                      <input type="number" name="contraseñar" value="" class="form-control" >
                    </div>
                  </div>

                  <div class="form-group text-center">
                    <button type="submit" name="buttonr" class="btn btn-info">Añadir</button>
                  </div>

                </form>
             </div>

             <table class="table table-responsive-sm">
             <thead>
               <tr>
                 <th scope="col">id</th>
                 <th scope="col">Nombre</th>
                 <th scope="col">Apellido</th>
                 <th scope="col">Dependencia</th>
                 <th scope="col">Salario</th>
                 <th scope="col">Contraseña</th>
                 <th scope="col">Eliminar</th>
               </tr>
             </thead>
             <tbody>
             <?php
             $conexion = mysqli_connect("localhost","root","","jjd-food");
             $id_user = $_SESSION["id_user"];
             $consulta = "SELECT * FROM `recursos_humanos`";
             $resultado = mysqli_query($conexion, $consulta);
             while ($Rowss = mysqli_fetch_array($resultado)) {
               echo "<tr>";
               echo "<td>$Rowss[0]</td>";
               echo "<td>$Rowss[1]</td>";
               echo "<td>$Rowss[2]</td>";
               echo "<td>$Rowss[3]</td>";
               echo "<td>$Rowss[4]</td>";
               echo "<td>$Rowss[5]</td>";
               echo "<td><a href='../Admin/edits/eliminarrh.php?idempleador= $Rowss[0]'>Eliminar</a> </td>";
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
         <div class="col-8">

               <form class="" action="../Admin/edits/editar.php" method="get">
                 <div class="form-group row">
                   <label for="codigo" class="col-3">Nombre:</label>
                   <div class="mx-auto">
                     <input type="text" name="nombrec" value="" class="form-control">
                   </div>
                 </div>

                 <div class="form-group row">
                   <label for="Usuario" class="col-3">Apellido:</label>
                   <div class="mx-auto">
                     <input type="text" name="apellidoc" value="" class="form-control">
                   </div>
                 </div>

                 <div class="form-group row">
                   <label for="email" class="col-3">Dependencia: </label>
                    <div class="mx-auto">
                     <input type="text" name="dependenciac" value="Contabilidad" class="form-control" readonly >
                   </div>
                 </div>

                 <div class="form-group row">
                   <label for="Telefono" class="col-3">Salario: </label>
                    <div class="mx-auto">
                     <input type="number" name="salarioc" value="" class="form-control" >
                   </div>
                 </div>

                 <div class="form-group row">
                   <label for="Telefono" class="col-3">Contraseña: </label>
                    <div class="mx-auto">
                     <input type="number" name="contraseñac" value="" class="form-control" >
                   </div>
                 </div>

                 <div class="form-group text-center">
                   <button type="submit" name="buttonc" class="btn btn-info">Añadir</button>
                 </div>

               </form>
            </div>

             <table class="table table-responsive-sm">
             <thead>
               <tr>
                 <th scope="col">id</th>
                 <th scope="col">Nombre</th>
                 <th scope="col">Apellido</th>
                 <th scope="col">Dependencia</th>
                 <th scope="col">Salario</th>
                 <th scope="col">Contraseña</th>
                  <th scope="col">Eliminar</th>
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
             echo "<td><a href='../Admin/edits/eliminarc.php?idempleadoc= $Rows[0]'>Eliminar</a> </td>";
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
