<?php require_once "vistas/parte_superior.php" ?>
  <div class="container">
    <h1>Edicion de Inventario</h1>
    <div class="container">
      <div class="row">
       <div class="caja col-9 shadow mx-auto">
         <ul class="nav nav-tabs" id="myTab" role="tablist">
           <li class="nav-item" role="presentation">
             <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Clientes</button>
           </li>
         </ul>
         <br>
         <div class="tab-content" id="myTabContent" >

           <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
               <div class="mx-auto">
                 <div class="col-8">
                      <form class="" action="edits/validarinv.php" method="get">
                        <div class="form-group row">
                          <label for="codigo" class="col-3">Titulo:</label>
                          <div class="ml-auto">
                            <input type="text" name="nomplato" value="" placeholder="Nombre del plato" class="form-control" required>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="Usuario" class="col-3">Oferta:</label>
                          <div class="ml-auto ">
                            <input type="text" name="ofer" value="" placeholder="Oferta" class="form-control" required>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="Usuario" class="col-3">Envio:</label>
                          <div class="ml-auto ">
                            <input type="text" name="envi" value="" placeholder="Envio" class="form-control" required>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="Usuario" class="col-3">Descripcion:</label>
                          <div class="ml-auto ">
                            <input type="textarea" name="descri" value="" placeholder="Descripcion" class="form-control" required>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="email" class="col-3">Precio: </label>
                           <div class="ml-auto ">
                            <input type="number" name="costo" value="" placeholder="Costo" class="form-control"  required>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="Telefono" class="col-3">Imagen: </label>
                           <div class="ml-auto col-6">
                            <input type="file" name="imagen" value=""  required>
                          </div>
                        </div>
                        <div class="form-group text-center">
                          <button type="submit" name="button" class="btn btn-info">Añadir</button>
                        </div>
                      </form>

                      <table class="table table-responsive-sm ">

                      <thead>
                          <tr>
                          <th scope="col">Titulo</th>
                          <th scope="col">Oferta</th>
                          <th scope="col">Envio</th>
                          <th scope="col">Descripcion</th>
                          <th scope="col">Costo</th>
                          <th scope="col">Producto</th>
                          <th scope="col">Eliminar</th>
                          </tr>
                      </thead>
                    <div>


                      <tbody>
                      <?php
                      $conexion = mysqli_connect("localhost","root","","jjd-food");
                      $consulta = "SELECT * FROM `platos`";
                      $resultado = mysqli_query($conexion, $consulta);
                      while ($Rows = mysqli_fetch_array($resultado)) {
                        echo "<tr>";
                        echo "<td>$Rows[0]</td>";
                        echo "<td>$Rows[1]</td>";
                        echo "<td>$Rows[2]</td>";
                        echo "<td>$Rows[3]</td>";
                        echo "<td>$Rows[4]</td>";
                        echo "<td>$Rows[5]</td>";
                        echo "<td><a href='edits/Eliminarinv.php?nombreplato=$Rows[0]'>Eliminar</a> </td>";
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
