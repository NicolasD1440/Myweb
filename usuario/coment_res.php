<?php require_once "vistas/parte_superior.php" ?>
<?php
                  $consulta = "SELECT a.Mensaje,b.Asunto,b.mensaje,b.fecha,b.estado FROM `respuesta` a INNER JOIN mensajes b on a.id_mensaje=b.id_mensaje and b.id=$Datos[0];";
                  $conexion = mysqli_connect("localhost","root","","jjd-food");
                  $resultado = mysqli_query($conexion, $consulta);
                  while ($Rows = mysqli_fetch_array($resultado)) {
                    if ($Rows[4] == 1) {     
                    ?>
<div class="card text-center col-8 mx-auto">
  <div class="card-header">
    Mensaje
  </div>
  <div class="card-body">
  <form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Asunto</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" value="<?php echo $Rows[1]?>" readonly>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Mi mensaje</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" value="<?php echo $Rows[2]?>" readonly>
    </select>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Respuesta:</label>
    <textarea placeholder="<?php echo $Rows[0]?>" class="form-control" id="exampleFormControlTextarea1" name="mensaje" rows="3"  readonly></textarea>
  </div>
</form>
  
  </div>
  <div class="card-footer text-muted">
    <p>Fecha del mensaje: <?php echo $Rows[3]?> </p>
  </div>
</div>
                    <?php
                }
            }
                    ?>

<?php require_once "vistas/parte_inferior.php" ?>