<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/productos.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="/js/productos.js" async></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/footer.css">
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" id="checkbtn"></label>
        <a href="#" class="enlace">
            <img src="../img/soe.png" alt="" class="logo">
        </a>
        <ul>
            <li><a class="active" href="../html/pagAdmi.php">Inicio</a></li>
            <li><a href="../html/calendarioAdmi.php">Citas</a></li>
            <li><a href="../html/somos.php">¿Quienes somos?</a></li>
            <li><a href="../html/soporteAdmi.php">Soporte</a></li>
            <li><a href="../html/conctacto.php">Contactos</a></li>
        </ul>
    </nav>

    <section class="contenedor">
        <div class="contenedor-items">
            <div class="item">
                <span class="titulo-item">Box Engasse</span>
                <img src="../img/imagen6.png" alt="" id="imgpro" class="img-item">
                <span class="precio-item">$15.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <!-- Resto de tus productos -->
        </div>
    </section>

    <button class="boton-agregar" onclick="mostrarFormulario()">
        <i class="fas fa-cart-plus"></i> Agregar Producto
    </button>

    <div id="formulario-producto" style="display: none;">
        <h2>Agregar Producto</h2>
        <form action="insertarproAdmi.php" method="POST" id="form-producto" enctype="multipart/form-data">
               <div class="input-field">
                <i class="fas fa-cart-plus"></i>
                <input placeholder="ID_del_producto" required id="productoID" name="productoID"/>
              </div>
            <div class="input-field">
                <i class="fas fa-cart-plus"></i>
                <input placeholder="Nombre" required id="nombre" name="nombre"/>
              </div>
              <div class="input-field">
                <i class="fas fa-cart-plus"></i>
                <input  placeholder="Descripción" required id="descripcion" name="descripcion"/>
              </div>
              <div class="input-field">
                <i class="fas fa-cart-plus"></i>
                <input type="number" placeholder="Precio" required id="precio" name="precio"/>
              </div>
              <div class="input-field">
                <i class="fas fa-cart-plus"></i>
                <input  placeholder="Stock" required id="stock" name="stock"/>
                </div>
              <div class="input-field">
                <i class="fas fa-cart-plus"></i>
                <input  placeholder="Categoría" required id="categoria" name="categoria"/>
              </div>
              <div class="input-field">
                <i class="fas fa-cart-plus"></i>
                <input placeholder="Fecha de creacion" required id="fecha_creacion" name="fecha_creacion"/>
              </div>
              <div class="input-field">
                <i class="fas fa-cart-plus"></i>
                <input  placeholder="Vencimiento" required id="fecha_vencimiento" name="fecha_vencimiento"/>
              </div>

            <label for="imagen">Imagen del Producto:</label>
            <input type="file" id="Foto" name="Foto" accept="image/*" required>

            <button class="agregarproducto" type="submit">Agregar </button>
        </form>
        <div id="visorImagen" style='display:none'>
            <img id="image" width="200px">
        </div> 
    </div>

    <div class="carrito" id="carrito">
        <div class="header-carrito">
            <h2>Tu Carrito</h2>
        </div>
        <div class="carrito-items"></div>
        <div class="carrito-total">
            <div class="fila">
                <strong>Tu Total</strong>
                <span class="carrito-precio-total">$</span>
            </div>
            <a class="btn-pagar" href="Factura.php">
                Pagar <i class="fa-solid fa-bag-shopping"></i>
            </a>
        </div>
    </div>

    <footer class="footer">
        <div class="container container-footer">
            <div class="menu-footer">
                <div class="contact-info">
                    <p class="title-footer">Información de Contacto</p>
                    <ul>
                        <li>Dirección: 71 Pennington Lane Vernon Rockville, CT 06066</li>
                        <li>Teléfono: 123-456-7890</li>
                        <li>Fax: 55555300</li>
                        <li>Email: spa@Natural.com</li>
                    </ul>
                    <div class="social-icons">
                        <span class="facebook"><i class="fa-brands fa-facebook-f"></i></span>
                        <span class="twitter"><i class="fa-brands fa-twitter"></i></span>
                        <span class="youtube"><i class="fa-brands fa-youtube"></i></span>
                        <span class="pinterest"><i class="fa-brands fa-pinterest-p"></i></span>
                        <span class="instagram"><i class="fa-brands fa-instagram"></i></span>
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
                        <p>Suscríbete a nuestros boletines ahora y mantente al día con nuevas colecciones y ofertas exclusivas.</p>
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
                
                <script>
                    function mostrarFormulario() {
                        $('#formulario-producto').show();
                    }
                
                    function agregarProducto() {
                        const nombre = $('#nombre').val();
                        const precio = parseFloat($('#precio').val());
                        const stock = parseInt($('#stock').val());
                        const descripcion = $('#descripcion').val();
                        const categoria = $('#categoria').val();
                        const vencimiento = $('#vencimiento').val();
                        const imagen = $('#imagen').val();
                
                        agregarAlCarrito(nombre, precio);
                
                        $('#form-producto')[0].reset();
                        $('#formulario-producto').hide();




                    }
                    
                    
                
                    function agregarAlCarrito(nombre, precio) {
                        const carrito = JSON.parse(localStorage.getItem('carrito')) || {};
                
                        if (carrito[nombre]) {
                            carrito[nombre].cantidad += 1;
                        } else {
                            carrito[nombre] = {
                                precio: precio,
                                cantidad: 1
                            };
                        }
                
                        localStorage.setItem('carrito', JSON.stringify(carrito));
                    }
                
                    document.querySelectorAll('.boton-item').forEach(function(boton) {
                        boton.addEventListener('click', function() {
                            const item = this.parentNode;
                            const titulo = item.querySelector('.titulo-item').textContent;
                            const precio = parseFloat(item.querySelector('.precio-item').textContent.slice(1));
                            agregarAlCarrito(titulo, precio);
                        });
                    });


                    document.getElementById('Foto').onchange = function (e) {
                       let reader = new FileReader();
                       reader.readAsDataURL(e.target.files[0]);
                       reader.onload = function() {
                        let preview = document.getElementById('visorImagen');
                        let image = document.getElementById('image');
                        preview.style.display = '';
                        image.src = reader.result;

                  
                       }
                    }

                    


                </script>
                
