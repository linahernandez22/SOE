<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../css/iniciosecion.css" />
    <title>Sign in & Sign up Form</title>
    <link rel="shortcut icon" href="../img/soe.png" type="image/x-icon">
  </head>
  
  <body>

    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="pag.php" class="sign-in-form" method="POST">
            <h2 class="title">Iniciar Sesión</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nombre de usuario" id="Nombreusuario" name="Nombreusuario" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Contraseña" id="contraseña"/>
            </div>
            <input type="submit" value="ACCEDER" class="btn solid"/>
            <p class="social-text">O inicie sesión en plataformas sociales</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="../html/insertarinicio.php" method="POST" class="sign-up-form">
            <h2 class="title">INSCRÍBETE</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="nombres " id="nombres" name="nombres"/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="apellidos" id="apellidos" name="apellidos"/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="nombre de usuario" id="nombreusuario" name="nombreusuario" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="email" id="email" name="email"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="contraseña" id="contraseña" name="contraseña"/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="cedula" id="cedula_cliente" name="cedula_cliente" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="telefono" id="telefono" name="telefono"/>
            </div>
            <input type="submit" class="btn" value="INSCRÍBETE" />
            <p class="social-text">O inicie sesión en plataformas sociales</p>
            <div class="social-media">
 }
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>¿Nuevo aquí ?</h3>
            <p>
          ¡Te invitamos formar parte de nosotros!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              INSCRÍBETE
            </button>
          </div>
          <img src="" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>¿Uno de nosotros?</h3>
            <p>
            Bienvenido a SPA tu amigo naturista 
            </p>
            <button class="btn transparent" id="sign-in-btn">
              INICIAR SESIÓN
            </button>
          </div>
          <img src="" class="image" alt="" />
        </div>
      </div>
    </div>

 
    <script src="../js/iniciosecion.js"></script>
  </body>
</html>