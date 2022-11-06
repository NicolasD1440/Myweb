<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/287753f600.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login.css"/>
    <title>Inicia sesion o registraté</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

          <form action="validar.php" method="post" class="sign-in-form">
            <h2 class="title">Iniciar sesion</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="usuario" placeholder="Nombre de usuario"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="text" name="password" placeholder="Contraseña" />
            </div>
            <input type="submit" name="inicio" value="Iniciar sesion" class="btn solid" />
            <p class="social-text">Ingreso para empleados</p>
            <div class="social-media">
              <a href="../LogEmpleados/Ingreso.php?Usuario=administracion&Correo=correo&Contraseña=contraseña" class="social-icon">
              <i class="fa-solid fa-user-shield"></i>
              </a>
              <a href="../LogEmpleados/Ingreso.php?Usuario=recursos_humanos&Correo=correo&Contraseña=contraseña" class="social-icon">
              <i class="fa-solid fa-headset"></i>
              </a>
              <a href="../LogEmpleados/Ingreso.php?Usuario=contabilidad&Correo=correo&Contraseña=contraseña" class="social-icon">
                <i class="fa-solid fa-briefcase"></i>
              </a>
            </div>
          </form>

          <form action="Validar.php" class="sign-up-form" method="post">
            <h2 class="title">Registrarse</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" required name="Nom_user" placeholder="Nombre de usuario" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" required name="Nom" placeholder="Nombre" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" required name="Ape" placeholder="Apellido" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" required name="Edad" placeholder="Edad" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" required name="email" placeholder="Correo" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" required name="password2" placeholder="Contraseña" />
            </div>
            <input type="submit" class="btn" value="Registrarse" name="registro"/>


          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>No tienes una cuenta?</h3>
            <p>
              Registrate de forma sencilla con tu correo y contraseña o hazlo por medio
              de tus redes sociales.

            </p>
            <button class="btn transparent" id="sign-up-btn">
              Registrarse
            </button>
          </div>
          <img src="img_Login/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Ya tienes una cuenta?</h3>
            <p>
              Inicia sesion de forma sencilla con tu correo y contraseña o hazlo por medio
              de tus redes sociales.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Iniciar sesion
            </button>
          </div>
          <img src="img_Login/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="js/jpp.js"></script>
  </body>
</html>
