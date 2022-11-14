<?php require_once "vistas/parte_superior.php" ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Cabecera de la pagina -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Mensajes no respondidos</h1>
                    </div>

                    <!-- CONTENIDO DEL DASHBOARD -->
                    <div class="row">

                        <?php
                  $consulta = "SELECT * FROM mensajes";
                  $conexion = mysqli_connect("localhost","root","","jjd-food");
                  $resultado = mysqli_query($conexion, $consulta);
                  while ($Datos = mysqli_fetch_array($resultado)) {
                  $id_men = $Datos[1];
                  if ($Datos[5]== 0) {
                   
                  
                    ?>
                    
                    <div class="card text-center mx-auto col-8">
                    <div class="card-header">
                    <p>Asunto: <?php echo $Datos[2]?></p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo "Mensaje del usuario";?></h5>
                        <p class="card-text"> <?php echo $Datos[3]?></p>
                           
                        <form action="validar.php?id_res=<?php echo $id_men?>" method="post">
                        <input type="text" name="respuesta" required>
                        <br>
                        <br>
                        <button type="submit" name="res" class="btn btn-primary">Enviar Datos</button>
                        </form>
                    </div>
                    <div class="card-footer text-muted">
                    <?php echo $Datos[4]?>
                    </div>
                    </div>
                    
                    <?php
                   }
                  }
                   ?>
                   
                        

                      

                       
                       
                       
                    </div>
                </div>

                <!-- /.container-fluid -->

                <?php require_once "vistas/parte_inferior.php" ?>
