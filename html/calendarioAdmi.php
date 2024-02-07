<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/calendarioAdmi.css">
    <link rel="stylesheet" href="../css/tu_otro_estilo.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="shortcut icon" href="media/soe.png" type="image/x-icon">
    <title>Calendario Interactivo</title>
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
                        <li><a href="../html/pagAdmi.php">Inicio</a></li>
                        <li><a href="../html/productosAdmi.php">Productos</a></li>
                        <li><a href="../html/calendarioAdmi.php">Calendario</a></li>
                        <li><a href="../html/somos.php">¿Quiénes somos?</a></li>
                        <li><a href="../html/soporte.php">Soporte</a></li>
                        <li><a href="../html/conctacto.php">Contactos</a></li>
                    </ul>
                </nav>
            </div>
            <i class="fa-solid fa-bars" id="icon_menu"></i>
        </div>
    </header>

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

            <div class="calendar__dates" id="dates"></div>
        </div>

        <div class="appointment-form">
            <h1>Citas Pendientes</h1>
            <table border="1" id="table1">
                <tr>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Descripción</th>
                </tr>
                <tr>
                    <td>2023-11-03</td>
                    <td>10:00 AM</td>
                    <td>Revisión médica</td>
                </tr>
            </table>
        </div>
    </div>
    ㅤ
    ㅤ
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
                            <i class="fa-b{"sts":[{"expiry":1737816827.328056,"host":"AVsuOZgBg0wdpKMoxm8zihjqET8kI4Xl8bCSMk28RsE=","mode":"force-https","sts_include_subdomains":false,"sts_observed":1706280827.328061},{"expiry":1736714976.303395,"host":"BJJusOumYDtwM9zZJRuiYZp+1dkjnSON/z539PsGIx4=","mode":"force-https","sts_include_subdomains":true,"sts_observed":1705178976.3034},{"expiry":1738809463.167253,"host":"Ifty0kmGtBkqpzyRNEJ2iccvLpOffAEtEf72UjNCr0U=","mode":"force-https","sts_include_subdomains":true,"sts_observed":1707273463.16726},{"expiry":1728094275.166499,"host":"IjUhU/txFQDDYCayutpUwy1xuWJ1fyne/eHHFZKrmI4=","mode":"force-https","sts_include_subdomains":true,"sts_observed":1696558275.166507},{"expiry":1738817318.536256,"host":"KRwoeRoAGB723I8uE7JpeWqerzN/Pxk/AmwjzlZKhxE=","mode":"force-https","sts_include_subdomains":false,"sts_observed":1707281318.536264},{"expiry":1738154659.699669,"host":"OuKlWsMW1dkkbI1X/oi6o0Y95ZNSWnSoeaIXAEYPlv4=","mode":"force-https","sts_include_subdomains":true,"sts_observed":1706618659.699673},{"expiry":1736718880.934535,"host":"QKmY3BmE7X/qivMvQdGV4i/aLZjqoCfyhHTMGDUI9zk=","mode":"force-https","sts_include_subdomains":true,"sts_observed":1705182880.934539},{"expiry":1738816086.973575,"host":"SE7+Gk765m4anEXEr1z6r1vbmryAKYPZ5SnEQG7atOM=","mode":"force-https","sts_include_subdomains":true,"sts_observed":1707280086.973579},{"expiry":1736718740.467665,"host":"SMpObF5LKD8M3ubp+H0wcaFK8h/xQSc+A03+pYAdToI=","mode":"force-https","sts_include_subdomains":true,"sts_observed":1705182740.467674},{"expiry":1736714976.292196,"host":"XF9fy3fMjaicGjnP+g5OwBTLhHA8RwMpMKbHooD+Wv4=","mode":"force-https","sts_include_subdomains":true,"sts_observed":1705178976.292202},{"expiry":1708286911.751173,"host":"Z1sHQQz5M7IfQ4vF/gNh09C9xQkYFNrc38KTojX8wls=","mode":"force-https","sts_include_subdomains":false,"sts_observed":1705182911.751176},{"expiry":1737816827.611392,"host":"akP2e0NTMe7KN2UIzZ5xIcTyEs+s14WhaqfK2aV8d30=","mode":"force-https","sts_include_subdomains":false,"sts_observed":1706280827.6114},{"expiry":1727051516.900254,"host":"a3B8SKjLD5tirvmv/z7o9v4o14J4mM