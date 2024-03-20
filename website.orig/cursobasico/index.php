<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="descripcion" content="Coca Cola es la bebida bla bla" />
    <meta name="keywords" content="bebida, gaseosa, cola" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio - Coca Cola</title>
    <link rel="shortcut icon" href="img/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/dcb0f8ad7d.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="container">
            <a href="index.html">
                <img src="img/logo.svg" alt="logo" class="logo" />
            </a>
            <nav>
                <a href="#inicio">Inicio</a>
                <a href="#nosotros">Nosotros</a>
                <a href="#servicios">Servicios</a>
                <a href="#galeria">Galería</a>
                <a href="#contactenos">Contáctenos</a>
            </nav>
            <a href="#" aria-label="Menu" class="hamb">
                <i class="fa-solid fa-bars"></i>
            </a>
        </div>
    </header>
    <main>
        <section id="inicio">
            <img src="img/bannerprincipal.jpg" alt="bannerprincipal" />
            <div class="bloque-inicio">
                <h1>Bienvenidos a Coca Cola</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#nosotros" class="boton boton-rojo">Ver más</a>
            </div>
        </section>
        <section id="nosotros" class="seccion">
            <div class="container">
                <p>
                    Curabitur malesuada condimentum ligula eu feugiat. Nam urna enim, sodales sed vehicula sed, commodo
                    eu elit. Sed ut eros quam. Nam euismod porttitor tellus, nec faucibus mi ultricies a. Nam faucibus
                    malesuada lectus et
                    vestibulum. Vestibulum at mauris sed metus ornare pretium non ut nisi.
                </p>
            </div>
        </section>
        <section id="servicios" class="seccion">
            <div class="container">
                <div class="row">
                    <div class="columna columna33 columna-mobile-100">
                        <div class="bloque-servicio">
                            <div class="bloque-img-servicio cuadrado-perfecto">
                                <img src="img/servicio1.jpg" alt="servicio1" />
                            </div>
                            <div class="bloque-contenido-servicio">
                                <h3>servicio1</h3>
                                <p>Nam euismod porttitor tellus, nec faucibus mi ultricies a. Nam faucibus malesuada
                                    lectus et vestibulum. Vestibulum at mauris sed metus ornare pretium non ut nisi.</p>
                                <a href="#" class="boton boton-blanco">Ver más</a>
                            </div>
                        </div>
                    </div>
                    <div class="columna columna33 columna-mobile-100">
                        <div class="bloque-servicio">
                            <div class="bloque-img-servicio cuadrado-perfecto">
                                <img src="img/servicio2.jpg" alt="servicio2" />
                            </div>
                            <div class="bloque-contenido-servicio">
                                <h3>servicio2</h3>
                                <p>Nam euismod porttitor tellus, nec faucibus mi ultricies a. Nam faucibus malesuada
                                    lectus et vestibulum. Vestibulum at mauris sed metus ornare pretium non ut nisi.</p>
                                <a href="#" class="boton boton-blanco">Ver más</a>
                            </div>
                        </div>
                    </div>
                    <div class="columna columna33 columna-mobile-100">
                        <div class="bloque-servicio">
                            <div class="bloque-img-servicio cuadrado-perfecto">
                                <img src="img/servicio3.jpg" alt="servicio3" />
                            </div>
                            <div class="bloque-contenido-servicio">
                                <h3>servicio3</h3>
                                <p>Nam euismod porttitor tellus, nec faucibus mi ultricies a. Nam faucibus malesuada
                                    lectus et vestibulum. Vestibulum at mauris sed metus ornare pretium non ut nisi.</p>
                                <a href="#" class="boton boton-blanco">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="galeria">
            <div class="container-fluid">
                <div class="row">
                    <div class="columna33 columna-mobile-50">
                        <div class="cuadrado-perfecto">
                            <img src="img/servicio1.jpg" alt="servicio1" />
                            <h4>Imagen1</h4>
                        </div>
                    </div>
                    <div class="columna33 columna-mobile-50">
                        <div class="cuadrado-perfecto">
                            <img src="img/servicio2.jpg" alt="servicio2" />
                            <h4>Imagen2</h4>
                        </div>
                    </div>
                    <div class="columna33 columna-mobile-50">
                        <div class="cuadrado-perfecto">
                            <img src="img/servicio3.jpg" alt="servicio3" />
                            <h4>Imagen3</h4>
                        </div>
                    </div>
                    <div class="columna33 columna-mobile-50">
                        <div class="cuadrado-perfecto">
                            <img src="img/servicio4.jpg" alt="servicio4" />
                            <h4>Imagen4</h4>
                        </div>
                    </div>
                    <div class="columna33 columna-mobile-50">
                        <div class="cuadrado-perfecto">
                            <img src="img/servicio5.jpg" alt="servicio5" />
                            <h4>Imagen5</h4>
                        </div>
                    </div>
                    <div class="columna33 columna-mobile-50">
                        <div class="cuadrado-perfecto">
                            <img src="img/servicio6.jpg" alt="servicio6" />
                            <h4>Imagen6</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contactenos" class="seccion">
            <iframe title="map" width="520" height="400" frameborder="0"
                src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=%20Sucre+(Bolivia)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            <div class="container-fluid">
                <div class="row">
                    <div class="columna columna-41 columna-mobile-100 empujar-58 empujar-mobile-0 sinpadding-mobile">
                        <form action="index.php" method="post">
                            <div class="form-block">
                                <input type="text" name="nombre" class="form-control" placeholder="Nombre" />
                            </div>
                            <div class="form-block">
                                <input type="email" name="email" class="form-control" placeholder="Email"
                                    autocomplete="email" />
                            </div>
                            <div class="form-block">
                                <textarea name="mensaje" placeholder="Mensaje"></textarea>
                            </div>
                            <div class="form-block bloque-ultimo">
                                <input type="submit" class="boton boton-negro" value="Enviar" />
                            </div>
                            <?php
                                if($_SERVER["REQUEST_METHOD"] == "POST")
                                {
                                    $nombre = $_POST["nombre"];
                                    $email = $_POST["email"];
                                    $mensaje = $_POST["mensaje"];
                                    if(isset($nombre)){
                                        if(isset($email)){
                                            if(isset($mensaje)){
                                                $para = "ed.cespedesa@gmail.com"; // colocar email de destino
                                                $asunto = "esto es una prueba";
                                                $cuerpo = $nombre . "\n". $email . "\n" . $mensaje;
                                                $adicional = "From: noreply@gorilla.ti";

                                                mail($para,$asunto,$cuerpo,$adicional);
                                            ?>
                                                <p>Envió exitoso</p>
                                            <?php
                                            }
                                        }
                                    }
                                }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="seccion">
        <div class="container">
            <div class="row">
                <div class="columna columna-25 columna-mobile-100">
                    <img src="img/logo-blanco.png" alt="logo-blanco" class="logo-footer" />
                    <p>Nam euismod porttitor tellus, nec faucibus mi ultricies a.Nam faucibus malesuada lectus et
                        vestibulum. Vestibulum at mauris sed metus ornare pretium non ut nisi.</p>
                </div>
                <div class="columna columna-25 columna-mobile-100">
                    <h3>Temas relacionados</h3>
                    <ul>
                        <li>
                            <a href="#">Tema 1</a>
                        </li>
                        <li>
                            <a href="#">Tema 2</a>
                        </li>
                        <li>
                            <a href="#">Tema 3</a>
                        </li>
                    </ul>
                </div>
                <div class="columna columna-25 columna-mobile-100">
                    <h3>Datos de Contacto</h3>
                    <ul>
                        <li>ed.cespedesa@gmail.com</li>
                        <li>+59173352965</li>
                        <li>
                            Calle El Villar Nro.213
                            <br />Sucre - Bolivia
                        </li>
                    </ul>
                </div>
                <div class="columna columna-25 columna-mobile-100">
                    <h3>Redes Sociales</h3>
                    <ul class="redes">
                        <li>
                            <a href="#" aria-label="facebook"><i class="fa-brands fa-square-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" aria-label="twitter"><i class="fa-brands fa-square-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" aria-label="instagram"><i class="fa-brands fa-square-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#" aria-label="test"><i class="fa-solid fa-xmark"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="barra-footer">&copy; Derechos Reservados - 2020</div>
    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/funciones.js"></script>
</body>

</html>