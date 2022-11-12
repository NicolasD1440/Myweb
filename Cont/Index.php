<?php require_once "vistas/parte_superior.php" ?>
<!DOCTYPE html>

  <div class="container">
    <h1>Perfil Contabilidad</h1>
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
           <!--Begin Page Content -->
                <div class="container-fluid">

                    <!-- Cabecera de la pagina -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Perfil</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Nombre usuario Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Nombre</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $Datos[2]?></div>
                                        </div>
                                        <div class="col-auto">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Apellido usuario Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Apellido</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $Datos[3]?></div>
                                        </div>
                                        <div class="col-auto">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Correo usuario Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Correo</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $Datos[5]?></div>
                                        </div>
                                        <div class="col-auto">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Edad usuario Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Edad</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $Datos[4]?></div>
                                        </div>
                                        <div class="col-auto">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mx-auto">
                          <div class="card col-20" style="width: 18rem;">
                            <img src="img/undraw_profile.svg" class="card-img-top" width="100" height="100">
                            <div class="card-body">
                              <center><p class="card-text">
                                <h6>Nombre: <?php echo $Datos[2]?></h6>
                                <h6>Apellido: <?php echo $Datos[3]?></h6>
                                <h6>Corrreo: <?php echo $Datos[5]?></h6>
                                <h6>Telefono: <?php echo $Datos[6]?></h6>
                              </p></center>
                            </div>
                          </div>
                        </div>
                    </div>

                </div>
               
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
