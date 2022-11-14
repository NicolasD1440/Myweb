<?php require_once "vistas/parte_superior.php" ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Cabecera de la pagina -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Perfil</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                    <table class="table table-responsive-sm">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Tipo de consumo</th>
                        <th scope="col">direccion</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                $conexion = mysqli_connect("localhost","root","","jjd-food");
                $id_user = $_SESSION["id_user"];
                $consulta = "SELECT * FROM `pedido` WHERE id='$id_user'";
                $resultado = mysqli_query($conexion, $consulta);
              while ($Rows = mysqli_fetch_array($resultado)) {
                echo "<tr>";
                echo "<td>$Rows[0]</td>";
                echo "<td>$Rows[1]</td>";
                echo "<td>$Rows[2]</td>";
                echo "<td>$Rows[3]</td>";
                echo "<td>$Rows[4]</td>";
                echo "</tr>";
              }

          ?>
                    </tbody>
                    </table>
                    </div>
                </div>

                <!-- /.container-fluid -->

     <?php require_once "vistas/parte_inferior.php" ?>
