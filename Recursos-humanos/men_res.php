<?php require_once "vistas/parte_superior.php" ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Cabecera de la pagina -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Mensajes respondidos</h1>
                    </div>

                    <!-- CONTENIDO DEL DASHBOARD -->
                    <div class="row">

                        <?php
                  $consulta = "SELECT * FROM mensajes";
                  $conexion = mysqli_connect("localhost","root","","jjd-food");
                  $resultado = mysqli_query($conexion, $consulta);
                  while ($Datos = mysqli_fetch_array($resultado)) {
                  $id_men = $Datos[1];
                  if ($Datos[5]== 1) {
                   
                  
                    ?>
                    
                    <div class="card text-center mx-auto col-8">
                    <div class="card-header">
                    <h2>Asunto: <?php echo $Datos[2]?></h2>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo "Mensaje del usuario";?></h5>
                        <h3 class="card-text"> <?php echo $Datos[3]?></h3>
                           
                        <form action="validar.php?id_res=<?php echo $id_men?>" method="post">
                        <p>Estado : RESPONDIDO</p>
                        <br>
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