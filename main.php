<?php
// Init + Start session
error_reporting(E_ALL & ~E_NOTICE);
session_start();

// Redirect users to the main page if already signed in
if ($_SESSION['session'] != 1) {
  header("Location: index.php");
  die();
}
?>
<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Boda Quique y Maday</title>

    <link rel="shortcut icon" type="image/x-icon" href="resources/images/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Pacifico|Lato|Playfair+Display&display=swap" rel="stylesheet">
    <link href="resources/css/main.css" rel="stylesheet" />
    <link href="resources/css/flipclock.css" rel="stylesheet" />
    <link rel="stylesheet" href="resources/css/mobile-menu.css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="resources/js/main.js"></script>
    <script src="resources/js/flipclock.min.js"></script>
    <script src="resources/js/mobile-menu.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/be3111f231.js" crossorigin="anonymous"></script>
</head>
<script>
    function hideLoader() {
        $('.loader').fadeOut("slow");

    }

</script>

<body onload="hideLoader()" style="padding:0 !important;">
    <div class="loader">
        <div class="rhombus">
            <div class="circle1"></div>
            <div class="circle2"></div>
        </div>
    </div>
    <div class="container-fluid" style="padding: 0;">
        <div class="section-overlay"></div>

        <header id="mainScreen" class="page-section">
            <div id="contenedor-titulo">
                <div class="nombreQuique">Enrique</div>
                <div class="nombreMaday">Maday</div>
                <h1 class="titulo">Bienvenidos a nuestra boda</h1>
                <div class="clock"></div>

            </div>
            <div class="menu d-lg-none">
                <nav class="menu__nav">
                    <ul class="r-list menu__list">
                        <hr>
                        <li class="menu__group">
                            <a href="#granDia" class="r-link menu__link">El gran día</a>
                        </li>
                        <hr style="background-color: #494949">
                        <li class="menu__group">
                            <a href="#preboda" class="r-link menu__link">Preboda</a>
                        </li>
                        <hr style="background-color: #494949">
                        <li class="menu__group">
                            <a href="#info" class="r-link menu__link">Información</a>
                        </li>
                        <hr style="background-color: #494949">
                        <li class="menu__group">
                            <a href="#vestimenta" class="r-link menu__link">Dress Code</a>
                        </li>
                        <hr style="background-color: #494949">
                        <li class="menu__group">
                            <a href="#fotos" class="r-link menu__link">Fotos</a>
                        </li>
                        <hr style="background-color: #494949">
                        <li class="menu__group">
                            <a href="#listaBoda" class="r-link menu__link">Regalo</a>
                        </li>
                        <hr style="background-color: #494949">
                        <li class="menu__group">
                            <a href="#asistencia" class="r-link menu__link">Asistencia</a>
                        </li>
                        <hr>
                    </ul>
                </nav>
                <div class="menu__toggle">
                    <button class="r-button menu__hamburger">
                        <span class="m-hamburger">
                            <span class="m-hamburger__label">Open menu</span>
                        </span>
                    </button>
                </div>
            </div>
            <nav id="mainNav" class="cl-effect-1 d-none d-lg-block">
                <div class="navbar-container">
                    <div class="row">
                        <a class="col" href="#preboda">Preboda</a>
                        <a class="col" href="#info">Información</a>
                        <a class="col" href="#vestimenta">Dress Code</a>
                        <img class="col-1 logo" style="max-width: 100px;" src="resources/images/logo.png">
                        <a class="col" href="#fotos">Fotos</a>
                        <a class="col" href="#listaBoda">Regalo</a>
                        <a class="col" href="#asistencia">Asistencia</a>
                    </div>
                </div>
            </nav>

        </header>
        <main>
            <section id="granDia">
                <div class="granDia-sup">
                    <div class="granDia-container">
                        <h1 class="titulo-secciones">El gran día</h1>
                        <hr class="barra1" data-content="Q&M">
                        <p class="granDia-intro">Chiclana pertenece a uno de esos sitios con encanto al que a todos nos gusta ir en verano y repetir año tras año, un lugar especial debido a su clima, su gastronomía y sus encantadoras gentes, con una espectacular playa llamada La Barrosa de aguas cristalinas y arena blanca. Aquí, en este paraíso terrenal, tendrá lugar <span style="font-weight: bold; color: #dc143c;">”la boda del año” , el 20 de Junio de 2020</span>, entre un gaditano llamado <span style="font-weight: bold; color: #dc143c;">Enrique</span> y una madrileña llamada <span style="font-weight: bold; color: #dc143c;">Maday</span>, que se prometerán amor eterno bajo la que, sin duda, es una de las puestas de sol más bonitas del mundo. </p>
                    </div>
                </div>
                <div class="granDia-parallax"></div>
                <div class="granDia-inf px-5">
                    <div class="row">
                        <div class="col-12 col-lg-4 centered">
                            <p style="font-weight: bold;"><i class="fas fa-calendar-day mr-4" style="color: #dc143c"></i>20 de Junio de 2020</p>
                        </div>
                        <div class="col-12 col-lg-4 centered">
                            <p style="font-weight: bold;"><i class="fas fa-clock mr-4" style="font-size: 4rem; color: #dc143c;"></i> 19:30h</p>
                        </div>
                        <div class="col-12 col-lg-4 centered">
                            <p style="font-weight: bold;"><i class="fas fa-thumbtack mr-4" style="font-size: 4rem; color: #dc143c;"></i>Enlace: playa La Barrosa - Banquete: Hotel Barrosa Palace</p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="preboda">
                <div class="preboda-sup">
                    <h1 class="titulo-secciones">Preboda</h1>
                    <hr class="barra2" data-content="Q&M">
                </div>
                <div class="preboda-text-container mt-5">
                    <p><i class="fas fa-glass-cheers"></i> Para ir abriendo boca, nos gustaría recibiros, a vuestra llegada, con un <span style="font-weight: bold; color: #dc143c;">aperitivo de bienvenida</span> que tendrá lugar en el propio chiringuito del hotel. ¿Os animáis a compartir el atardecer con nosotros?</p>
                    <p>¿Dónde? <span style="font-weight: bold; color: #dc143c;">En el chiringuito del hotel</span></p>
                    <p>¿Cuándo? <span style="font-weight: bold; color: #dc143c;">El 19 de Junio a las 21.30h</span></p>
                    <p><small>*El cóctel se servirá de 22:00 - 23:00</small></p>
                    <p class="preboda-msg" style="margin: 20px 0; font-weight: bold;">¡¡No os lo podéis perder!!</p>
                </div>
                <div class="preboda-img-container mt-5">
                    <img class="preboda-img img-fluid" src="resources/images/chiringuito-barrosa.jpg" />
                </div>
            </section>
            <section id="info" style="position: relative;">
                <div class="info-sup">
                    <h1 class="titulo-secciones">Información</h1>
                    <hr class="barra1" data-content="Q&M">
                </div>
                <div id="menu-info" class="row mx-0 px-3">
                    <div class="opciones-menu-info pt-3 col-12 col-lg-4 text-center" data-toggle="modal" data-target="#modalAlojamiento">
                        <div>
                            <i class="fa fas fa-hotel"></i>
                        </div>
                        <h2 class="mb-4">Alojamiento</h2>
                        <hr align="center" width="50%" style="background-color: #000; margin: auto;">
                        <p class="mt-4">Aquí encontrarás los mejores hospedajes para que disfrutes del fin de semana como te mereces.</p>
                    </div>
                    <div class="opciones-menu-info pt-3 col-12 col-lg-4 text-center" data-toggle="modal" data-target="#modalPeluqueria">
                        <div>
                            <i class="fa fas fa-cut"></i>
                        </div>
                        <h2 class="mb-4">Peluquería y maquillaje</h2>
                        <hr align="center" width="50%" style="background-color: #000; margin: auto;">
                        <p class="mt-4">¿Necesitas algún servicio para estar tan guapa como la novia? ¡Echa un vistazo!</p>
                    </div>
                    <div class="opciones-menu-info pt-3 col-12 col-lg-4 text-center" data-toggle="modal" data-target="#modalRestaurante">
                        <div>
                            <i class="fa fas fa-utensils"></i>
                        </div>
                        <h2 class="mb-4">Restaurantes</h2>
                        <hr align="center" width="50%" style="background-color: #000; margin: auto;">
                        <p class="mt-4">¡Haz tu reserva para comer en uno de nuestros restaurantes favoritos de la zona!</p>
                    </div>
                </div>
            </section>
            <section id="vestimenta" style="position: relative;">
                <div class="vestimenta-sup">
                    <h1 class="titulo-secciones">Dress Code</h1>
                    <hr class="barra2" data-content="Q&M">
                </div>
                <div class="vestimenta-inf">
                    <div class="vestimenta-preboda text-center">
                        <h2 class="mb-4"><i class="fas fa-glass-cheers"></i> Preboda</h2>
                        <p>Informal. No olvidéis una chaquetilla para la brisa del mar.</p>
                        <p>Nos gustaría que los asistentes fueran de blanco, aunque es totalmente opcional.</p>
                        <img class="vestimenta-preboda-img" src="resources/images/vestimenta-preboda.jpg" />
                    </div>
                    <div class="vestimenta-boda text-center">
                        <h2 class="mb-4"><i class="fas fa-tshirt"></i> Boda</h2>
                        <p>Formal, boda de tarde.</p>
                        <p>Como consejo, si el levante y la lluvia lo permiten, la ceremonia tendrá lugar sobre la espectacular playa de la Barrosa. Así que… MUJERES!!! Una cuña, poco tacón o tacón ancho os será de mayor utilidad. Si no, tacones fuera un rato y listo.</p>
                        <div class="row mt-4">
                            <div id="check-list" class="col-6">
                                <p><i class="fas fa-check"></i> Formal</p>
                                <p><i class="fas fa-check"></i> Vestido largo o midi</p>
                                <p><i class="fas fa-check"></i> Pantalones largos</p>
                                <p><i class="fas fa-check"></i> Chaqueta</p>
                            </div>
                            <div id="cross-list" class="col-6">
                                <p><i class="fas fa-times"></i> Casual - Semi formal</p>
                                <p><i class="fas fa-times"></i> Pantalón corto</p>
                                <p><i class="fas fa-times"></i> Bañador</p>
                                <p><i class="fas fa-times"></i> BLANCO :)</p>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <section id="fotos" style="position: relative;">
                <div class="fotos-sup">
                    <h1 class="titulo-secciones">Fotos</h1>
                    <hr class="barra1" data-content="Q&M">
                </div>
                <div class="fotos-inf text-center">
                    <p id="proximamente">PRÓXIMAMENTE</p>
                    <p>Os agradeceríamos que os descargarais la aplicación de <span><a href="https://www.wedshoots.com/" style="color: #dc143c;" target="_blank">Wedshoots</a></span> desde el móvil para que compartierais al momento las fotos y vídeos que saquéis con vuestros móviles.
                    </p>
                    <p style="color: #dc143c; font-size: 7rem;">#bodaenriqueymaday</p>
                </div>
            </section>
            <section id="listaBoda" style="position: relative;">
                <div class="listaBoda-sup">
                    <h1 class="titulo-secciones" style="color: #000 !important;">Regalo</h1>
                    <hr class="barra-regalo" data-content="Q&M">
                </div>
                <div class="listaBoda-inf">
                    <p style="color: #000; font-weight: bold;" class="listaBoda-texto my-5">Nuestro mejor regalo es que nos acompañes en este día tan especial, disfrutes y bailes sin parar. Si además quieres contribuir a enviarnos muy muy lejos de luna de miel, disponemos del siguiente número de cuenta:</p>
                    <div style="text-align: center;">
                        <div class="listaBoda-cuenta my-5">
                            <p>ES03 0073 0100 5706 0144 0319</p>
                        </div>
                    </div>
                    <p style="color: #000; font-weight: bold;" class="listaBoda-texto my-5">Titulares:</p>
                    <br>
                    <p style="color: #000; font-weight: bold;" class="listaBoda-titular">Enrique Villagrán Medinilla</p>
                    <br>
                    <p style="color: #000; font-weight: bold;" class="listaBoda-titular">Maday Cabrero Fernández</p>
                </div>
            </section>
            <section id="asistencia" style="position: relative;">
                <div>
                    <div class="asistencia-sup">
                        <h1 class="titulo-secciones">Confirma tu asistencia</h1>
                        <hr class="barra2" data-content="Q&M">
                    </div>
                    <div class="asistencia-inf">
                        <form role="form" id="singInForm" class="was-validated" method="post" action="send_form_email.php">
                            <div class="form-row">
                                <div class="form-group col-8">
                                    <label style="font-weight: bold;" for="nombre">Nombre y apellidos:</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del representante familiar" required>
                                </div>
                                <div class="col-4">
                                    <label style="font-weight: bold;" for="asistencia-select">Asistencia:</label>
                                    <select class="custom-select" name="asistencia-boda" id="asistencia-boda-form">
                                        <option selected>-- ¿Asistiréis a la boda? --</option>
                                        <option value="SI">Sí</option>
                                        <option value="NO">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-6">
                                    <label style="font-weight: bold;" for="nAdultos">Número de adultos:</label>
                                    <input type="number" class="form-control" id="nAdultos" name="nAdultos" placeholder="nºAdultos" disabled required>
                                </div>
                                <div class="form-group col-6">
                                    <label style="font-weight: bold;" for="nNinios">Número de niños:</label>
                                    <input type="number" class="form-control" id="nNinios" name="nNinios" placeholder="nºNiños" disabled required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label style="font-weight: bold;" for="alergias">Alergias o intolerancias:</label>
                                <textarea class="form-control" rows="3" name="alergias" id="alergias-asistencia" placeholder="Escribe aquí tus alergias y/o intolerancias (en caso de tenerlas)" disabled></textarea>
                            </div>
                            <div class="row preboda-radio">
                                <legend style="font-weight: bold;" class="col-form-label col-5 col-lg-3 pt-0">¿Asistiréis a la preboda?</legend>
                                <div class="col-7 col-lg-9">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="asistenciaPreboda" id="asistencia-preboda-form-si" value="Si" required disabled>
                                        <label class="form-check-label" for="asistencia-preboda-form">Sí</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="asistenciaPreboda" id="asistencia-preboda-form-no" value="No" required disabled>
                                        <label class="form-check-label" for="asistencia-preboda-form-no">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="comentarios" rows="3" id="comentarios-asistencia" placeholder="Si tienes alguna duda, sugerencia o indicación, no dudes en hacérnosla llegar" disabled></textarea>
                            </div>
                            <div class="mt-5" style="text-align: center;">
                                <input for="submit" type="submit" id="boton-enviar" class="boton-form btn" value="Enviar">
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <footer id="main-footer">
                <div class="row">
                    <div class="col-6 footer-contacto-container">
                        <div class="footer-contacto text-center">
                            <p style="color: #fff9f9; font-weight: bold;">Maday Cabrero Fernández</p>
                            <p><a href="mailto:maday.cabrero@gmail.com">maday.cabrero@gmail.com</a> - <span style="font-weight: bold;">618329992</span></p>
                            <p style="color: #fff9f9; font-weight: bold;">Enrique Villagrán Medinilla</p>
                            <p><a href="mailto:enrique.villagran@yahoo.es">enrique.villagran@yahoo.es</a> - <span style="font-weight: bold;">635467266</span></p>
                        </div>
                    </div>
                    <div class="col-6 footer-hastag-container">
                        <div class="footer-hastag text-center">
                            <p>#bodaenriqueymaday</p>
                        </div>
                    </div>
                </div>
            </footer>

        </main>
    </div>

    <div class="modal fade" id="modalPeluqueria" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalScrollableTitle">Peluquerías y centros de belleza</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="cerrar-modal" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <img class="img-thumbnail miniatura-modal float-left mr-3" src="resources/images/peluqueria-barrosa-palace.jpg" />
                        <div>
                            <h3><a href="https://www.hipotels.com/hoteles/barrosapalace/" style="color: #dc143c !important;" target="_blank">Hotel Barrosa Palace</a></h3>
                            <p class="text-modal-size">El propio hotel ofrece servicio de peluquería (entre 30 y 60 euros) y maquillaje (unos 30-35 euros): reserva llamando al hotel o en <a href="mailto:spa.barrosapalace@hipotels.com">spa.barrosapalace@hipotels.com</a></p>
                            <p class="text-modal-size"><a href="https://goo.gl/maps/tygWRDntrg3YvaVV9" target="_blank">Ver mapa</a></p>
                        </div>
                    </div>
                    <hr class="mb-3">
                    <div>
                        <img class="img-thumbnail miniatura-modal float-left mr-3" src="resources/images/peluqueria-bella-montero.jpg" />
                        <div>
                            <h3><a href="https://es-es.facebook.com/pages/category/Hair-Salon/Sal%C3%B3n-de-peluquer%C3%ADa-y-estetica-Bella-Montero-1470831963172611/" style="color: #dc143c !important;" target="_blank">Salón de Peluquería y estética Bella Montero</a></h3>
                            <p class="text-modal-size">Pack de maquillaje y peluquería por unos 70-80 euros . A 5 min en coche. Teléfono: 956496324</p>
                            <p class="text-modal-size"><a href="https://goo.gl/maps/n6VMYEFMUEYM1ZbU8" target="_blank">Ver mapa</a></p>
                        </div>
                    </div>
                    <hr class="mb-3 mt-5 mt-lg-5">
                    <div>
                        <img class="img-thumbnail miniatura-modal float-left mr-3" src="resources/images/peluqueria-susana-alvarez.jpg" />
                        <div>
                            <h3><a href="https://es-es.facebook.com/pages/category/Hair-Salon/ESTILISTAS-UNISEX-SUSANA-ALVAREZ-111770235590188/" style="color: #dc143c !important;" target="_blank">Susana Álvarez Estilistas (Cádiz)</a></h3>
                            <p class="text-modal-size">Si venís desde Cádiz podéis pasaros por su peluquería o incluso llamarlas para que se desplacen a peinar a varias personas. Además de ser unas fenómenas, son encantadoras. Teléfono: 856077268</p>
                            <p class="text-modal-size"><a href="https://goo.gl/maps/9tN7UnW8ZpWYtXYi7" target="_blank">Ver mapa</a></p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <p class="mr-auto" style="color: #dc143c">*Existen más peluquerías y salones de belleza por la zona, pero, al no conocerlas, preferimos no opinar.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalAlojamiento" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalScrollableTitle">Alojamiento</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="cerrar-modal" aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <div style="padding: 0 25px;">
                        <h3><a href="https://www.hipotels.com/hoteles/cadiz/" style="color: #dc143c !important;" target="_blank">Complejo Hipotels</a></h3>
                        <p class="text-modal-size">¿Quieres estar a unos pocos pasos? Llama a la central de reservas o introduce el código del "save the date" en la web (<span style="color:#dc143c; font-weight: bold;">BMEBPC</span>) para que te apliquen un descuento por venir a nuestra boda.</p>
                    </div>
                    <div class="row m-0">
                        <div class="col-12 col-lg-6">
                            <div class="list-group list-group-flush text-modal-size" id="list-tab" role="tablist">
                                <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Barrosa Palace Hotel & Spa***** - El hotel de la boda</a>
                                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Playa La Barrosa**** - En primera línea, solo para adultos</a>
                                <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Barrosa Park**** - Recién renovado, en primera línea</a>
                                <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Barrosa Garden**** - En segunda línea de playa</a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 my-4 my-lg-0">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                    <img class="img-thumbnail" src="resources/images/alojamientos-barrosa-palace.jpg" />
                                </div>
                                <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                    <img class="img-thumbnail" src="resources/images/alojamientos-playa-la-barrosa.jpg" />
                                </div>
                                <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                                    <img class="img-thumbnail" src="resources/images/alojamientos-barrosa-park.jpg" />
                                </div>
                                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                                    <img class="img-thumbnail" src="resources/images/alojamientos-barrosa-garden.jpg" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div style="padding: 0 25px;">
                        <div class="my-4">
                            <h3 style="color: #dc143c !important;">Otras opciones</h3>
                            <p class="text-modal-size">Nuestras recomendaciones a unos 10-15 min a pie, 4-5 min en coche.</p>
                            <div class="row mx-0 text-modal-size">
                                <div class="col-12 col-lg-6">
                                    <p>VALENTIN SANCTI PETRI - Tlf: 956491000</p>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <p>VINCCCI RESORT COSTA GOLF - Tlf: 956494535</p>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <p>APARTAHOTEL LAS DUNAS - Tlf: 956494985</p>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <p>SOL SANCTI PETRI APARTAHOTELES - Tlf: 912764747</p>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <p>HOTEL BOUTIQUE AROMA DE MAR - Tlf: 956497049</p>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <p>HOTEL NOVOMAR - Tlf: 956239373</p>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <p>HOTEL CORAL PLAYA - Tlf: 956492100</p>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <p>HOTEL AZALEA PLAYA - Tlf: 610791830</p>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <p>HOTEL MARIA ANTONIA - Tlf: 956496022</p>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <p>HOSPEDERÍA SANTIAGO - Tlf: 956494840</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalRestaurante" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalScrollableTitle">Restaurantes</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="cerrar-modal" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3 class="text-center mb-2">Chiclana</h3>
                    <div>
                        <img class="img-thumbnail miniatura-modal float-left mr-3" src="resources/images/restaurantes-popeye.jpg" />
                        <div>
                            <h3><a href="https://www.restaurantepopeye.com/" style="color: #dc143c !important;" target="_blank">Restaurante Popeye</a></h3>
                            <p class="text-modal-size">
                                Nuestro sitio de referencia allí. Terraza, mesas altas y restaurante. Ricos y abundantes arroces. Buenas tapas y frescos pescados del día. Exquisita ensaladilla.
                            </p>
                            <p class="text-modal-size"><a href="https://goo.gl/maps/Qo7djGVuduv4sfVDA" target="_blank">Ver mapa</a></p>
                        </div>
                    </div>
                    <h3 class="text-center my-2">Cádiz</h3>
                    <div>
                        <img class="img-thumbnail miniatura-modal float-left mr-3" src="resources/images/restaurantes-ventorilloelchato.jpg" />
                        <div>
                            <h3><a href="http://www.ventorrilloelchato.com/" style="color: #dc143c !important;" target="_blank">Ventorillo El Chato</a></h3>
                            <p class="text-modal-size">
                                Formal. Elegante. Entre Cádiz y San Fernando.
                                <br>
                                Exquisito atún, almejas, ostiones y tortitas de camarones.
                            </p>
                            <p class="text-modal-size"><a href="https://goo.gl/maps/ZnJhg1mPY3UVLXGX6" target="_blank">Ver mapa</a></p>
                        </div>
                    </div>
                    <hr class="mb-3">
                    <div>
                        <img class="img-thumbnail miniatura-modal float-left mr-3" src="resources/images/restaurantes-elfaro.jpg" />
                        <div>
                            <h3><a href="http://www.elfarodecadiz.com/" style="color: #dc143c !important;" target="_blank">El Faro</a></h3>
                            <p class="text-modal-size">
                                Zona de barra y de restaurante. Un “must” de la tacita de plata.
                                <br>
                                Tortitas de camarones, ostiones, anchoa y boquerón sobre alboronía, fritura, patatas aliñás…
                            </p>
                            <p class="text-modal-size"><a href="https://goo.gl/maps/Li95vabRzFVSvXCz8" target="_blank">Ver mapa</a></p>
                        </div>
                    </div>
                    <hr class="mb-3">
                    <div>
                        <img class="img-thumbnail miniatura-modal float-left mr-3" src="resources/images/restaurantes-latabernita.jpg" />
                        <div>
                            <h3><a href="https://www.facebook.com/RafaTabernita/" style="color: #dc143c !important;" target="_blank">Mini-bar La Tabernita</a></h3>
                            <p class="text-modal-size">
                                Picoteo a buen precio. Informal.
                                <br>
                                Tapa de hamburquesa, choco, salmorejo…
                            </p>
                            <p class="text-modal-size"><a href="https://g.page/RafaTabernita?share" target="_blank">Ver mapa</a></p>
                        </div>
                    </div>
                    <hr class="mb-3">
                    <div>
                        <img class="img-thumbnail miniatura-modal float-left mr-3" src="resources/images/restaurantes-mauroberreiro.jpg" />
                        <div>
                            <h3><a href="http://www.lacuriosidaddemaurobarreiro.com/" style="color: #dc143c !important;" target="_blank">La curiosidad de Mauro Barreiro</a></h3>
                            <p class="text-modal-size">
                                Comida gaditana con un toque de fusión. Menú degustación en sala y platitos en barra.
                                <br>
                                Carta cambiante. Pedid que os recomienden.
                            </p>
                            <p class="text-modal-size"><a href="https://goo.gl/maps/RyAw2gdQg7ADzfHw8" target="_blank">Ver mapa</a></p>
                        </div>
                    </div>
                    <hr class="mb-3">
                    <div>
                        <img class="img-thumbnail miniatura-modal float-left mr-3" src="resources/images/restaurantes-lamarea.jpg" />
                        <div>
                            <h3><a href="https://www.lamarea.es/" style="color: #dc143c !important;" target="_blank">La Marea</a></h3>
                            <p class="text-modal-size">
                                En el paseo marítimo. Chiringuito.
                                <br>
                                Arroz de almejas en salsa verde, chocos fritos. Tapitas en barra.
                            </p>
                            <p class="text-modal-size"><a href="https://g.page/LaMareaRestaurante?share" target="_blank">Ver mapa</a></p>
                        </div>
                    </div>
                    <h3 class="text-center my-2">Conil</h3>
                    <div>
                        <img class="img-thumbnail miniatura-modal float-left mr-3" src="resources/images/restaurantes-franciscofontanilla.jpg" />
                        <div>
                            <h3><a href="http://www.franciscofontanilla.com/" style="color: #dc143c !important;" target="_blank">Francisco Fontanilla</a></h3>
                            <p class="text-modal-size">
                                Frente al mar y con un producto exquisito.
                                <br>
                                Carta amplia con atún, retinto, pescados, mariscos, así como una carta de atún, crudo y cocinado.
                            </p>
                            <p class="text-modal-size"><a href="https://goo.gl/maps/4PNeiUNgBgZKhfTa9" target="_blank">Ver mapa</a></p>
                        </div>
                    </div>
                    <h3 class="text-center my-2">Puerto de Santa Maria</h3>
                    <div>
                        <img class="img-thumbnail miniatura-modal float-left mr-3" src="resources/images/restaurantes-romerijo.jpg" />
                        <div>
                            <h3><a href="https://www.romerijo.com/web/establecimientos/el-puerto-de-santa-maria-n-iv/" style="color: #dc143c !important;" target="_blank">Romerijo</a></h3>
                            <p class="text-modal-size">
                                Informal.
                                <br>
                                Con un puesto de fritura y otro de marisco, combínalo (o no) y tómalo en sus mesas.
                            </p>
                            <p class="text-modal-size"><a href="https://goo.gl/maps/w4Rdo8y7pyuQxM5Y7" target="_blank">Ver mapa</a></p>
                        </div>
                    </div>
                    <hr class="mb-3">
                    <div>
                        <img class="img-thumbnail miniatura-modal float-left mr-3" src="resources/images/restaurantes-elfaroelpuerto.jpg" />
                        <div>
                            <h3><a href="http://www.elfarodelpuerto.com/index.asp" style="color: #dc143c !important;" target="_blank">El Faro de El Puerto</a></h3>
                            <p class="text-modal-size">
                                De los mismos dueños que el faro de Cádiz
                                <br>
                                Tortitas de camarones, ostiones, anchoa y boquerón sobre alboronía, fritura, patatas aliñás…
                            </p>
                            <p class="text-modal-size"><a href="https://g.page/elfarodelpuerto?share" target="_blank">Ver mapa</a></p>
                        </div>
                    </div>
                    <hr class="mb-3">
                    <div>
                        <img class="img-thumbnail miniatura-modal float-left mr-3" src="resources/images/restaurantes-aponiente.jpg" />
                        <div>
                            <h3><a href="https://www.aponiente.com/" style="color: #dc143c !important;" target="_blank">Aponiente</a></h3>
                            <p class="text-modal-size">
                                No hemos ido, pero, sin duda, tiene que estar en esta lista.
                                <br>
                                Muchos de vosotros me lo habéis recomendado.
                            </p>
                            <p class="text-modal-size"><a href="https://goo.gl/maps/aT5fZ1xfw7j8PpiH9" target="_blank">Ver mapa</a></p>
                        </div>
                    </div>
                    <h3 class="text-center my-2">Tarifa</h3>
                    <div>
                        <img class="img-thumbnail miniatura-modal float-left mr-3" src="resources/images/restaurantes-elfrances.jpg" />
                        <div>
                            <h3><a href="https://es-la.facebook.com/pages/Bar-El-Franc%C3%A9s/197350900284948" style="color: #dc143c !important;" target="_blank">El Francés</a></h3>
                            <p class="text-modal-size">
                                Tapas en barra y raciones en la terraza. Muy dificil reservar (se reserva a las 6-7 de cada dia para cenar). Atún (hamburguesa, albóndigas, a la plancha), bravas, berenjena.
                            </p>
                            <p class="text-modal-size"><a href="https://goo.gl/maps/KKSUwdMiYANk8Xas9" target="_blank">Ver mapa</a></p>
                        </div>
                    </div>
                    <hr class="mb-3">
                    <div>
                        <img class="img-thumbnail miniatura-modal float-left mr-3" src="resources/images/restaurantes-elancla.jpg" />
                        <div>
                            <h3><a href="https://es-es.facebook.com/pages/category/Seafood-Restaurant/Restaurante-El-Ancla-Tarifa-791534737542530/" style="color: #dc143c !important;" target="_blank">El Ancla</a></h3>
                            <p class="text-modal-size">
                                Informal, junto al puerto.
                                <br>
                                Croquetas de choco muy ricas (¿qué tal como aperitivo antes de ir a El Francés?).
                            </p>
                            <p class="text-modal-size"><a href="https://goo.gl/maps/dabsV3D7RR86sVU48" target="_blank">Ver mapa</a></p>
                        </div>
                    </div>
                    <h3 class="text-center my-2">Barbate</h3>
                    <div>
                        <img class="img-thumbnail miniatura-modal float-left mr-3" src="resources/images/restaurantes-elcampero.jpg" />
                        <div>
                            <h3><a href="http://www.restauranteelcampero.es/" style="color: #dc143c !important;" target="_blank">El Campero</a></h3>
                            <p class="text-modal-size">
                                Formal. Terraza, barra, mesas altas y restaurante. Si te gusta el atún, no dejes de ir. 80 platos de atún diferentes. Dejaos guiar por vuestras preparaciones y partes favoritas del atún.
                            </p>
                            <p class="text-modal-size"><a href="https://goo.gl/maps/zCCYQbziT962oAQA9" target="_blank">Ver mapa</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
