<?php require_once "vistas/parte_superior.php" ?>
<div class="card text-center col-8 mx-auto">
  <div class="card-header">
    Mensaje
  </div>
  <div class="card-body">
  <form action="mensaje.php?iduser=<?php echo $Datos[0]?>" method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">Correo electronico</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" value="<?php echo $Datos[5]?>" readonly>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Tipo de mensaje</label>
    <select class="form-control" id="exampleFormControlSelect1" name="opciones">
      <option>Queja</option>
      <option>Peticion</option>
      <option>Felicitaciones</option>
    </select>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Mensaje:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="mensaje" rows="3" required></textarea>
  </div>
  <button type="sutmid" name="enviar" class="btn btn-primary">Enviar!</button>
</form>
  
  </div>
  <div class="card-footer text-muted">
    <?php echo fecha();?>
  </div>
</div>
<?php 
function fecha(){
    setlocale(LC_ALL, 'es_ES');
    date_default_timezone_set( 'America/Bogota' );
    $day = date("l");
    $plus = date("d");
    $time = date("h:i A");
    switch ($day) {
        case "Sunday":
            echo "domingo ".$plus ." ".$time;
        break;
        case "Monday":
            echo "lunes ".$plus." ".$time;
        break;
        case "Tuesday":
            echo "martes ".$plus." ".$time;
        break;
        case "Wednesday":
            echo "miércoles ".$plus." ".$time;
        break;
        case "Thursday":
            echo "jueves ".$plus." ".$time;
        break;
        case "Friday":
            echo "viernes ".$plus." ".$time;
        break;
        case "Saturday":
            echo "sábado ".$plus." ".$time;
        break;
    }
}

?>
<?php require_once "vistas/parte_inferior.php" ?>