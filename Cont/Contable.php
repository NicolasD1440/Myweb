<?php require_once "vistas/parte_superior.php" ?>
<!DOCTYPE html>

  <div class="container">
    <h1>Plataforma Datos Y Graficas principales</h1>
 </div>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Plantilla de estilos -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head> <body>

          <div class="container">
            <br>
            <div class="row justify-content-md-center">
              <div class="col-md-3">

                  <div class="card text-white text-center bg-primary mb-3" style="max-width: 18rem;">
                      <div class="card-header text-white" style="background-color: #00AA9E;">USUARIOS</div>
                        <div class="card-body">
                            <h5 class="card-title"> 5 </h5>
                            <p class="card-text"># Total de usuarios registrados</p>
                        </div>
                  </div>
            </div>

              <div class="col-md-3">
                <div class="card text-white text-center bg-info mb-3" style="max-width: 18rem;">
                      <div class="card-header text-white" style="background-color: #00FFFF;">Platillos</div>
                        <div class="card-body">
                            <h5 class="card-title"> 8 </h5>
                            <p class="card-text"># Total de los platillos pedidos</p>
                        </div>
                  </div>
              </div>


              <div class="col-md-3">
                <div class="card bg-light text-center mb-3" style="max-width: 18rem;">
                      <div class="card-header text-white" style="background-color: #D3D3D3;">Header</div>
                        <div class="card-body">
                            <h5 class="card-title"> 168.000 </h5>
                            <p class="card-text">Ventas totales, desde apertura</p>
                        </div>
                  </div>
              </div>


            </div>
              </div>
               <center> <H2> REPORTE DE VENTAS </H2> </center> 
               <div class="card-body">
                  <div class="row justify-content-center">
                    <div class="col-lg-6">
                      <center><h5>Ultimas ventas</h5></center>
                      <canvas id="Grafica1" class="grafica"> </canvas>
                    </div>
                    <div class="col-lg-6">
                      <center><h5>% Ventas Diarias</h5></center>
                       <canvas id="Grafica2" class="grafica chartjs-render-monitor ml-auto"> </canvas>
                    </div>
                    <div class="col-lg-6">
                       <canvas id="Grafica3" class="grafica"> </canvas>
                    </div>
                    <div class="col-lg-6">
                       <canvas id="Grafica4" class="grafica"> </canvas>
                    </div> 
                  </div>
               </div>
              
                   

                    
                   
                    
                 
<script src="js/index.js"> </script>     
           
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>




</html>






<?php require_once "vistas/parte_inferior.php" ?>
