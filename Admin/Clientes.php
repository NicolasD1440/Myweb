<?php require_once "vistas/parte_superior.php" ?>
  <div class="container">
    <h1>Nuestros Clientes</h1>
    <table class="table table-responsive-sm">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Nombre usuario</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Edad</th>
        <th scope="col">Correo</th>
        <th scope="col">Telefono</th>
        <th scope="col">contraseña</th>
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
    echo "</tr>";
    }

      ?>
    </tbody>
    </table>

  </div>
<?php require_once "vistas/parte_inferior.php" ?>
