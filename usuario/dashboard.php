<?php require_once "vistas/parte_superior.php" ?>

                <!-- Begin Page Content -->
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

                <!-- /.container-fluid -->

                <?php require_once "vistas/parte_inferior.php" ?>           