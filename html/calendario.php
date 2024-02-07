<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/calendario.css">
    <link rel="stylesheet" href="../css/tu_otro_estilo.css"> 
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="shortcut icon" href="media/soe.png" type="image/x-icon">

    <title>Calendario Interactivo</title>
</head>
<header>
    <div class="container__header">	
        <div class="logo">
            <img src="../img/soe.png" alt="">
        </div>
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="../html/pag.php">Inicio</a></li>
                    <li><a href="../html/productos.php">Productos</a></li>
                    <li><a href="../html/calendario.php">Citas</a></li>
                    <li><a href="../html/somosC.php">¿Quiénes somos?</a></li>
                    <li><a href="../html/soporteC.php">Soporte</a></li>
                    <li><a href="../html/conctacto.php">Contactos</a></li>
                </ul>
            </nav>
        </div>
        <i class="fa-solid fa-bars" id="icon_menu"></i>
    </div>
</header>
<body>
    <div class="container">
        <div class="calendar">
            <div class="calendar__info">
                <div class="calendar__prev" id="prev-month">&#9664;</div>
                <div class="calendar__month" id="month"></div>
                <div class="calendar__year" id="year"></div>
                <div class="calendar__next" id="next-month">&#9654;</div>
            </div>

            <div class="calendar__week">
                <div class="calendar__day calendar__item">L</div>
                <div class="calendar__day calendar__item">M</div>
                <div class="calendar__day calendar__item">M</div>
                <div class="calendar__day calendar__item">J</div>
                <div class="calendar__day calendar__item">V</div>
                <div class="calendar__day calendar__item">S</div>
                <div class="calendar__day calendar__item">D</div>
            </div>

            <div class="calendar__dates" id="dates">
            
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn btn-success fw-bold" id="boton-cita" onclick="mostrarCita()">
                AGENDAR CITA
            </button>
        </div>
        <div class="w-100 p-2 pb-5 d-flex justify-content-center">
            <div class="col-md-3" id="agendar-cita">
                    <div class="cardt rounded-0 shadow">
                        <div class="card-header bg-gradient bg-primary text-light">
                            <h5 class="card-title">AGENDAR CITA</h5>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <form action="../html/insertarcalen.php" method="post" id="schedule-form">
                                    <input type="hidden" name="id" value="">
                                    <div class="form-group mb-2">
                                        <label for="title" class="control-label">Nombre</label>
                                        <input type="text" class="form-control form-control-sm rounded-0" name="nombre" id="nombre" required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="title" class="control-label">Cedula</label>
                                        <input type="number" class="form-control form-control-sm rounded-0" name="cedula" id="cedula" required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="description" class="control-label">Descripcion</label>
                                        <textarea rows="3" class="form-control form-control-sm rounded-0" name="descripcion" id="descripcion" required></textarea>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="start_datetime" class="control-label">Fecha y Hora</label>
                                        <input type="datetime-local" class="form-control form-control-sm rounded-0" name="start_datetime" id="start_datetime" required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="start_datetime" class="control-label">Lugar</label>
                                        <select id="lugar" name="lugar" required>
                                        <option value="oficina">Oficina</option>
                                        <option value="hospital">Hospital</option>
                                        <option value="en_linea">En línea</option>
                                        </select><br> 
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-center">
                                <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i class="fa fa-save"></i> Guardar</button>
                                <button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i class="fa fa-reset"></i> Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    <footer class="footer w-100">
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


                <img src="../img/payment.png" alt="Pagos">
            </div>
        </div>
    </footer>

    <script src="../js/calendario.js"></script>
    <script>
        function mostrarCita() {
        var y= document.getElementById("boton-cita")
        var x = document.getElementById("agendar-cita");
        if (x.style.display === "none") {
            x.style.display = "block";
            y.style.display = "none"
        } else {
            x.style.display = "none";
            y.style.display = "flex"
        }
        }
    </script>
</body>
</html>
