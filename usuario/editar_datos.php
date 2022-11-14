<?php require_once "vistas/parte_superior.php" ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Cabecera de la pagina -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Editar datos</h1>
                    </div>

                    <!-- Editar el perfil -->
                    <div class="row">

                        <div class="container">
                          <div class="row">
                           <div class="caja col-md-8 offset-md-2 shadow">
                             <ul class="nav nav-tabs" id="myTab" role="tablist">
                               <li class="nav-item" role="presentation">
                                 <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Datos personales</button>
                               </li>
                               <li class="nav-item" role="presentation">
                                 <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Actualizar contraseña</button>
                               </li>
                             </ul>
                             <br>
                             <div class="tab-content" id="myTabContent" >
                               <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                 <div class="row">

                                   <div class="col-4">
                                     <img class="img-thumbnail" src="img/undraw_profile.svg" width="200px" >
                                   </div>

                                   <div class="col-8">
                                     <form class="" action="accion.php" method="get">

                                       <div class="form-group row">
                                         <label for="codigo" class="col-3">Nombre:</label>
                                         <div class="col-8">
                                           <input type="text" name="nombre_al" value="<?php echo $Datos[2]?>" class="form-control">
                                         </div>
                                       </div>

                                       <div class="form-group row">
                                         <label for="Usuario" class="col-3">Apellido:</label>
                                         <div class="col-8">
                                           <input type="text" name="apellido_al" value="<?php echo $Datos[3]?>" class="form-control">
                                         </div>
                                       </div>

                                       <div class="form-group row">
                                         <label for="email" class="col-3">Correo: </label>
                                          <div class="col-8">
                                           <input type="text" name="Correo" value="<?php echo $Datos[5] ?>" class="form-control" >
                                         </div>
                                       </div>

                                       <div class="form-group row">
                                         <label for="Telefono" class="col-3">Telefono: </label>
                                          <div class="col-8">
                                           <input type="number" name="Telefono" value="<?php echo $Datos[6] ?>" class="form-control" >
                                         </div>
                                       </div>





                                       <div class="form-group text-center">
                                         <button type="submit" name="button" class="btn btn-info">Actualizar</button>
                                       </div>

                                     </form>
                                   </div>
                                 </div>
                               </div>

                               <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                 <div class="col-md-8 offset-md-3">
                                   <h3 class="text-center">Cambio de clave</h3>
                             <!-- Formualrio cambio de clave -->

                                   <form class="" action="accion.php" method="get">
                                   <div class="form-group row">
                                     <label for="Usuario" class="col-4">Correo:</label>
                                     <div class="col-8">
                                      <input type="text" name="email" value="<?php echo $Datos[5]; ?>" class="form-control" readonly>
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label for="nContraseña" class="col-4">Nueva contraseña:</label>
                                    <div class="col-8">
                                      <input type="password" name="pass_new" value="" class="form-control">
                                    </div>
                                  </div>
                                  <div class="form-group text-center">
                                    <button type="submit" name="button2" class="btn btn-info">Actualizar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                            </from>
                    </div>

                </div>

                <!-- /.container-fluid -->

                <?php require_once "vistas/parte_inferior.php" ?>