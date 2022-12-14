<!DOCTYPE html
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous">
    <link rel="stylesheet" href="Estilos_ingreso.css">
    <link rel="stylesheet" href="Normalizacion.css">

    <title>Login</title>

    <?php
    //incio
    error_reporting(0);
    session_start();
    $_SESSION['Tabla']= $_GET["Tabla"];
    $_SESSION['usuario']= $_GET["usuario"];
    $_SESSION['Contraseña']= $_GET["Contraseña"];
    $user = $_GET["usuario"];

     ?>
  </head>
  <body>

    <main class="login-design">
         <div class="waves">
           <img src="Resources/ingreso.svg" alt="" width="300" height="400"/>
         </div>
         <div class="login">
           <div class="login-data">
             <img src="Resources/img-ingreso.svg" width="200" height="200" />
             <h1>Inicio de Sesión</h1>
             <form action="Validar.php" method="post"class="login-form">
               <div class="input-group">
                 <label class="input-fill">
                   <input type="text" name="usuario" id="correo" autocomplete="on" required />
                   <span class="input-label">Nombre - Usuario</span>
                   <i class="fas fa-envelope"></i>
                 </label>
               </div>
               <div class="input-group">
                 <label class="input-fill">
                   <input type="password" name="contraseña" id="contraseña" required />
                   <span class="input-label">Contraseña</span>
                   <i class="fas fa-lock"></i>
                 </label>
               </div>
               <td><a href="../login/Login.php">Volver al login de clientes</a></td>
               <input type="submit" value="Iniciar Sesión" class="btn-login" />
             </form>
           </div>
         </div>
  </body>
</html>
