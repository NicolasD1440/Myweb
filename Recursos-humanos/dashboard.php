<?php require_once "vistas/parte_superior.php" ?>
<div class="container">
    <h1>Perfil Atencion al cliente</h1>
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="row">

            <!-- Nombre usuario Card Example -->
            <div class="col-xl-3 col-md-6 mb-4 mx-auto">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Nombre</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $Datos[1]." ".$Datos[2]?></div>
                            </div>
                            <div class="col-auto">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Correo usuario Card Example -->
            <div class="col-xl-3 col-md-6 mb-4 mx-auto">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Cargo</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $Datos[3]?></div>
                            </div>
                            <div class="col-auto">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Edad usuario Card Example -->
            <div class="col-xl-3 col-md-6 mb-4 mx-auto">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Salario</div>
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
                <img src="img/undraw_profile_2.svg" class="card-img-top" width="100" height="100">
                <div class="card-body">
                  <center><p class="card-text">
                    <h6>Nombre: <?php echo $Datos[1]?></h6>
                    <h6>Apellido: <?php echo $Datos[2]?></h6>
                    <h6>Cargo: <?php echo $Datos[3]?></h6>
                    <h6>Salario: <?php echo $Datos[4]?></h6>
                  </p></center>
                </div>
              </div>
            </div>
        </div>

    </div>
  </div>
                <?php require_once "vistas/parte_inferior.php" ?>
