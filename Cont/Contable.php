<?php require_once "vistas/parte_superior.php" ?>
  <div class="container">
    <h1>Seccion Contabilidad</h1> </div>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width">
  <title> ChartMysql</title>


</head>
  <body>


    <div class="row">
      <div class="col-lg-2"> <center>
        <button class="btn btn-primary" onclick="CargarDatosGraficobar()"> Grafico Bar </button>
     </div></div> </center>
     <div class="col-lg-8"> <canvas id="myChart" style=" position: relative; height: 60vh; width: 80vw;"></canvas></div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</body>

</html>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>


<script>


function CargarDatosGraficobar(){
  $.ajax({
      url:'controlador_graf.php',
      type:'POST'
  }).done(function(resp){
    var titulo = [];
    var precio = [];
    var data =JSON.parse(resp);
    for(var i=0; i < data.length; i++){
        titulo.push(data[i][1])
        precio.push(data[i][2])
    }
   var ctx = document.getElementById('myChart');
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: precio,
          datasets: [{
              label: 'Datos de ejemplo',
              data: titulo,
              backgroundColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 3)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
              ],
              borderColor: ['black'],
              borderWidth: 3
          }]
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true
              }
          }
      }
  });

  })
}
</script>



<script>


function CargarDatosGraficolin(){
  $.ajax({
      url:'controlador_graf.php',
      type:'POST'
  }).done(function(resp){
    var titulo = [];
    var precio = [];
    var data =JSON.parse(resp);
    for(var i=0; i < data.length; i++){
        titulo.push(data[i][1])
        precio.push(data[i][2])
    }
   var ctx = document.getElementById('myChart');
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: precio,
          datasets: [{
              label: 'Datos de ejemplo',
              data: titulo,
              backgroundColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 3)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
              ],
              borderColor: ['black'],
              borderWidth: 3
          }]
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true
              }
          }
      }
  });

  })
}
</script>
<?php require_once "vistas/parte_inferior.php" ?>
