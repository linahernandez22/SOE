<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soporte</title>
    <link rel="stylesheet" href="../css/soporte.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
       <header>

        <div class="container__header">	

            <div class="logo">
                <img src="../img/soe.png" alt="">
            </div>

            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="../html/pag.php">Inicio</a></li>
                        <li><a href="../html/somos.php">¿Quienes somos?</a></li>
                    <li><a href="../html/soporteC.php">Soporte</a></li>
                    <li><a href="../html/conctacto.php">Contactos</a></li>
                    </ul>
                </nav>
            </div>
            <i class="fa-solid fa-bars" id="icon_menu"></i>
             
        </div>
    </header>
    <main>
        <div class="margen">
    <h2>Titulo del problema</h2>
	<form action="mailto:tu_correo@ejemplo.com" method="post" enctype="text/plain">
		<label for="respuesta"></label><br>
		<textarea id="respuesta" name="respuesta" rows="4" cols="50"></textarea><br><br>
		<label for="descripcion">Descripción de lo que ocurre:</label><br>
		<textarea id="descripcion" name="descripcion" rows="10" cols="50"></textarea><br><br>
       <label for="CE">Correo electronico:</label><br>
		<textarea id="CE" name="CE" rows="3" cols="50"></textarea><br><br>
  		<input type="checkbox" id="contacto" name="contacto" value="contacto">
        <label for="contacto" >¿Puedo contactarte por este correo?</label><br><br>
  		<input type="submit" value="Enviar">
  		<input type="reset" value="Borrar">
        <div class="terminos"> <label for="terminos" rows="2"></label>Tus comentarios se usaran para mejorar los productos y servicios de SPA o SOE. Si incluyes tu direccion de correo electronico, aceptas que SPA o SOE te envie un correo eletronico sobre tu comentario. <a href="#">Politicas de privacidad</a> <br></div>
    </form></div>
 </main>
 <section>
<div class="contenido">
    <div class="articulo">
        <h2 id="pp">muchas gracias</h2>
    <p>gracias por enviarnos tu respuesta le tendremos en cuenta</p>
</div>
    <div class="articulo">
        <h2 id="pp">emprendemos para ganar</h2>
    <p>tomamos la iniciativa, buscamos aquello que no existe desafiando lo conocido para lograr lo inimaginable</p>
</div>
    <div class="articulo"> 
        <h2 id="pp">siemprre aprendiendo</h2>
    <p>aprendemos constantemente. vemos cada cambio como una oprtunidad. no tenemos miedo a fallar porque probamos y coregimos hasta lograrlo</p>
</div>
    <div class="articulo">
        <h2 id="pp">quieres saber quienes somos</h2>
    <p>panemops nuestra diversas acciones para seguir innovando</p>    
    <input type="button" class="btn-cont" onclick="" value="Registrarsemira quienes somos">
</div>    


</div>
 </section>

 <footer class="footer">
    <div class="container container-footer">
        <div class="menu-footer">
            <div class="contact-info">
                <p class="title-footer">Información de Contacto</p>
                <ul>
                    <li>
                        Dirección: 71 Pennington Lane Vernon Rockville, CT
                        06066
                    </li>
                    <li>Teléfono: 123-456-7890</li>
                    <li>Fax: 55555300</li>
                    <li>EmaiL: spa@Natural.com</li>
                </ul>
                <div class="social-icons">
                    <span class="facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </span>
                    <span class="twitter">
                        <i class="fa-brands fa-twitter"></i>
                    </span>
                    <span class="youtube">
                        <i class="fa-brands fa-youtube"></i>
                    </span>
                    <span class="pinterest">
                        <i class="fa-brands fa-pinterest-p"></i>
                    </span>
                    <span class="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </span>
                </div>
            </div>

            <div class="information">
                <p class="title-footer">Información</p>
                <ul>
                    <li><a href="#">Acerca de Nosotros</a></li>
                    <li><a href="#">Información Delivery</a></li>
                    <li><a href="#">Politicas de Privacidad</a></li>
                    <li><a href="#">Términos y condiciones</a></li>
                    <li><a href="#">Contactános</a></li>
                </ul>
            </div>

            <div class="my-account">
                <p class="title-footer">Mi cuenta</p>

                <ul>
                    <li><a href="#">Mi cuenta</a></li>
                    <li><a href="#">Historial de ordenes</a></li>
                    <li><a href="#">Lista de deseos</a></li>
                    <li><a href="#">Boletín</a></li>
                    <li><a href="#">Reembolsos</a></li>
                </ul>
            </div>

            <div class="newsletter">
                <p class="title-footer">Boletín informativo</p>

                <div class="content">
                    <p>
                        Suscríbete a nuestros boletines ahora y mantente al
                        día con nuevas colecciones y ofertas exclusivas.
                    </p>
                    <input type="email" placeholder="Ingresa el correo aquí...">
                    <button>Suscríbete</button>
                </div>
            </div>
        </div>

        <div class="copyright">
            <img src="../img/payment.png" alt="Pagos">
        </div>
    </div>
</footer>

</body>
</html>
