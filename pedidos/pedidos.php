<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<br>
                    <div class="container" >
                          <div class="row" >
                            
                          <nav class="navbar navbar-dark bg-primary col-md-8 offset-md-2 rounded">
                          <a href="../index.php"><button type="button" class="btn-close " aria-label="Close"></button></a>
                          </nav>
                          
                           <div class="caja col-md-8 offset-md-2 shadow" >
                             <ul class="nav nav-tabs" id="myTab" role="tablist">
                               <li class="nav-item" role="presentation">
                                <br>
                                 <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Datos del pedido</button>
                               </li>
                              
                             </ul>
                             <br>
                             
                             <div class="tab-content" id="myTabContent" >
                               <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                 <div class="row">
                                 
                                   <div class="col-8 w-100">

                                   <h2 style="text-align:center">Datos del pedido</h2>
                                   <table class="table table-responsive-sm">
                                    <thead>
                                        <tr  class="bg-info">
                                        <th scope="col">#</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Titulo</th>
                                        <th scope="col">fecha</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        session_start();
                                        
                                        $carrito_mio=$_SESSION['carrito'];
	                                    $_SESSION['carrito']=$carrito_mio;
                                        if(isset($_SESSION['carrito'])){
                                            for($i=0;$i<=count($carrito_mio)-1;$i ++){
                                            if($carrito_mio[$i]!=NULL){
                                    
                                          
                                            
                                        ?>
                                        <tr>
                                        <th scope="row"><?php echo $i?></th>
                                        <td><?php echo $carrito_mio[$i]['precio']?></td>
                                        <td><?php echo $carrito_mio[$i]['titulo']?></td>
                                        <td><?php dia_semana();?></td>
                                        </tr>

                                        <?php }}} ?>
                                        
                                    </tbody>
                                    </table>
                                      <div class="col text-center">
                                     <!-- Button trigger modal -->
                                     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                       Pedido a domicilio
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmar pedido</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5>Ingrese su direccion: </h5>
                                            <form action="guardar.php" method="get">
                                            <input type="text" name="direccion" value="" class="w-100" required>
                                            <?php
                                                if(isset($_SESSION['carrito'])){
                                                $total=0;
                                                for($i=0;$i<=count($carrito_mio)-1;$i ++){
                                                if($carrito_mio[$i]!=NULL){
                                                $total=$total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
                                                $_SESSION["precio"] = $total;
                                                
                                               
                                                }}}
                                                ?>
                                                <p>pedido con valor de : <?php echo $total;?>, realizado el dia <?php dia_semana();?></p>
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                               <button type="submit" class="btn btn-primary" name="domicilio">Confirmar</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                          <!-- End Modal -->
                                            </form>
                                      <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                       Pedido en plazoleta
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmar pedido</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                
                                           <?php 
                                           if(isset($_SESSION['carrito'])){
                                            $total=0;
                                            for($i=0;$i<=count($carrito_mio)-1;$i ++){
                                            if($carrito_mio[$i]!=NULL){
                                            $total=$total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
                                            }}}
                                            ?>
                                            <p>pedido con valor de : <?php echo $total;?>, realizado el dia <?php dia_semana();?> ha sido asignado
                                        en la mesa <?php generar_mesa(); ?></p>
                                          
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <form action="guardar.php" method="get">
                                                <button type="submit" class="btn btn-primary" name="plazoleta">Confirmar</button>
                                                </form>
                                            </div>
                                        
                                            </div>
                                        </div>
                                        </div>
                                          <!-- End Modal -->
                                       
                                      </div>
                                    
                                    
                                   </div>
                                 </div>
                               </div>

                               <?php
                               // funcion para obtener el dia de la semana
                               function dia_semana(){
                                setlocale(LC_ALL, 'es_ES');
                                        date_default_timezone_set( 'America/Bogota' );
                                        $day = date("l");
                                        switch ($day) {
                                            case "Sunday":
                                                echo "domingo";
                                            break;
                                            case "Monday":
                                                echo "lunes";
                                            break;
                                            case "Tuesday":
                                                echo "martes";
                                            break;
                                            case "Wednesday":
                                                echo "miércoles";
                                            break;
                                            case "Thursday":
                                                echo "jueves";
                                            break;
                                            case "Friday":
                                                echo "viernes";
                                            break;
                                            case "Saturday":
                                                echo "sábado";
                                            break;
                                        }
                               }
                               function generar_mesa(){
                                $permitted_chars = 'ABCDEFGHIHJK';
                                srand(time()); //Introducimos la "inicial"
                                $aleat = rand(0,10); //rand(mínimo y el máximo);
                                echo $aleat.substr(str_shuffle($permitted_chars), 1, 1);
                               }
                               ?>
                    
</body>
</html>
