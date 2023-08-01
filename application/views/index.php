<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://joaquina.com.mx/wp-content/uploads/2020/09/cropped-favicon-1-32x32.png" sizes="32x32" />
    <title>JOAQUINA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/main.css?v=<?= rand() ?>" />
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KQ5MLC6');</script>
<!-- End Google Tag Manager -->
    <!-- Global site tag (gtag.js) - Google Ads: 488834787 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-488834787"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-488834787');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-180203041-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-180203041-1');
    </script>
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '3406274016095104');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=3406274016095104&ev=PageView&noscript=1" /></noscript>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQ5MLC6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <section id="principal">
        <div class="conten">
            <nav class="navbar navbares justify-content-center movil-none">
                <span class="navbar-text">
                    <img src="assets/img/Logo.svg" alt="logotipo Joaquina">
                </span>
            </nav>
            <nav class="navbar navbares-1 justify-content-center desktop-none">
                <span class="navbar-text">
                    <img src="assets/img/Logo.svg" class="logo-text" alt="logotipo Joaquina">
                </span>
            </nav>
            <div class="position-hero d-none d-sm-none d-md-block">
                <img src="assets/img/form-1.svg" alt="forma-hero" height="200">
            </div>
            <section class="container" id="hero">
                <div class="contenedor hi">
                    <div class="row hi">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-md-5 d-flex align-items-center">
                            <div class="hero-content-details text-left">
                                <h1 class="hero-title">Descubre <b style="font-style: italic;">Joaquina</b></h1>
                                <p class="hero-text">
                                    Renta de departamentos en la Colonia del Valle.
                                </p>
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active ">
                                            <img class="d-block w-100 img-3" src="assets/img/carrousel/img1.jpg" alt="First slide">
                                            <p class="salon">SIN AVAL O FIANZA</p>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-3" src="assets/img/carrousel/img2.jpg" alt="Second slide">
                                            <p class="salon">AMENIDADES ÚNICAS</p>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-3" src="assets/img/carrousel/img3.jpg" alt="Third slide">
                                            <p class="salon">SERVICIOS EXTRAORDINARIOS</p>
                                        </div>
                                    </div>
                                    <ol class="carousel-indicators">
                                        <li id="carr_1" data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li  id="carr_2" data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li  id="carr_3" data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                </div>

                                <p class="hero-text-p">
                                    Réntalo desde <b>$13,800 mxn,</b> solo te toma 15 minutos. </p>

                                <button id="info_banner" type="button" class="btn boton-card desktop-none scroll" data-mobile="#formu">
                                    MÁS INFORMACIÓN </button>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 d-none d-flex align-items-end display-f">
                            <div class="hero-form-content">
                                <form method="POST" class="row" id="formulario-hero" action="gracias">
                                    <div class="col-12 form-title">
                                        <h3 class="hero-form-title">
                                            Conoce cómo rentar.
                                        </h3>
                                    </div>
                                    <div class="col-12 form-group">
                                        <input type="text" name="nombre" id="nombre" placeholder="Nombre:" class="ctr-h" required />
                                    </div>
                                    <div class="col-12 form-group">
                                        <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad:" class=" ctr-h" required />
                                    </div>
                                    <div class="col-12 form-group">
                                        <input type="tel" name="telefono" id="telefono" placeholder="Teléfono:" class="ctr-h" required />
                                    </div>
                                    <div class="col-12 form-group">
                                        <input type="mail" name="email" id="email" placeholder="Correo:" class="ctr-h" required />
                                    </div>
                                    <div class="col-12 form-group">
                                        <textarea name="mensaje" id="mensaje" placeholder="Deja un comentario:" class="ctr-h"></textarea>
                                    </div>

                                    <div>
                                        <input type="hidden" name="utm_source" id="utm_source">
                                        <input type="hidden" name="utm_content" id="utm_content">
                                        <input type="hidden" name="utm_campaign" id="utm_campaign">
                                        <input type="hidden" name="utm_term" id="utm_term">
                                        <input type="hidden" name="utm_medium" id="utm_medium">
                                    </div>
                                    <div class="col-12 form-group grupo text-center">
                                        <button type="submit" class="button-red button-form" id="enviar">
                                            MÁS INFORMACIÓN </button>
                                    </div>
                                </form>
                            </div>
                            <div class="position">
                                <img src="assets/img/form-2.svg" alt="forma-hero" height="79" width="100">
                            </div>

                        </div>

                    </div>
                </div>

            </section>

            <section>
                <div class="row navbares">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <p class="textos-bars">Una nueva forma de habitar la ciudad</p>
                    </div>
                </div>
            </section>

            <section id="cards">
                <div class="container padding-d">
                    <div class="row">
                        <div class="col-lg-12 text-title-cards">
                            Escoge el depa ideal
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="card text-center">
                                <img class="card-img-top img-tam-card" src="assets/img/cards/img1.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title titulo-card">Tipo Estudio</h5>
                                    <br>
                                    <br>
                                    <p class="card-text parrafo-card">Con 1 cama oculta para optimización del espacio, ante-comedor, cocina totalmente equipada y baño independiente.
                                        <br>
                                        <br>
                                    </p>
                                    <p class="parrafo-card-precio">
                                        Desde <b class="parrafos-precios-italic">$13,800 mxn</b>
                                    </p>
                                    <br>
                                    <a id="estudio_cot" href="#" class="btn boton-card scroll" data-desktop="#formulario-hero" data-mobile="#formu">COTIZAR</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="card text-center">
                                <img class="card-img-top img-tam-card" src="assets/img/cards/img2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title titulo-card">1 Recámara</h5>
                                    <br>
                                    <br>
                                    <p class="card-text parrafo-card">Con sala de estar, cuarto, baño independiente y cocina con equipo completo.
                                        <br>
                                        <br>
                                        <p class="parrafo-card-precio">
                                            Desde <b class="parrafos-precios-italic">$21,400 mxn</b>
                                        </p>
                                        <br>
                                        <a id="recamara_disp" href="#" class="btn boton-card scroll" data-desktop="#formulario-hero" data-mobile="#formu">VER DISPONIBILIDAD</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="card text-center">
                                <img class="card-img-top img-tam-card" src="assets/img/cards/img3.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title titulo-card">2 Recámaras</h5>
                                    <br>
                                    <br>
                                    <p class="card-text parrafo-card">Con sala de estar, cocina completamente equipada y 2 baños independientes.
                                        <br>
                                        <br>
                                        <p class="parrafo-card-precio">
                                            Desde <b class="parrafos-precios-italic">$29,800 mxn</b>
                                        </p>
                                        <br>
                                        <a id="2recamaras_details" href="#" class="btn boton-card scroll" data-desktop="#formulario-hero" data-mobile="#formu">MÁS DETALLES</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <section id="amenidades">
                <div class="col-lg-12 text-title-cards">
                    Nos caracterizan nuestras amenidades únicas.
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 margin-img">
                            <div class="img-amenidades1 img-tam text-amenidades margen">
                                <p>Rooftop</p>
                            </div>

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="img-amenidades2 img-tam text-amenidades">
                                <p>Pet zone</p>
                            </div>
                        </div>
                        <div class="col-lg-12 w-15 p-3"></div>
                        <div class="col-lg-6 col-md-6 col-sm-12 margin-img">
                            <div class="img-amenidades3 img-tam text-amenidades margen">
                                <p>Tech gym</p>
                            </div>

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="img-amenidades4 img-tam text-amenidades">
                                <p>Movie room</p>
                            </div>
                        </div>
                        <div class="col-lg-12 w-15 p-3"></div>
                        <div class="col-lg-6 col-md-6 col-sm-12 margin-img">
                            <div class="img-amenidades5 img-tam text-amenidades margen">
                                <p>Home office</p>
                            </div>

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="img-amenidades6 img-tam text-amenidades">
                                <p>Play zone</p>
                            </div>
                        </div>
                        <div class="col-lg-12 w-15 p-3 col-sm-12"></div>
                        <div class="col-lg-6 col-md-6 col-sm-12  margin-img">
                            <div class="img-amenidades7 img-tam text-amenidades margen">
                                <p>Gastrobar</p>
                            </div>

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="img-amenidades8 img-tam text-amenidades">
                                <p>Grill zone</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="servicios">
                <div class="row navbares-servicios">
                    <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center alineacion">
                        <img class="forma" src="assets/img/servicios.png" alt="serviciosJoaquina">
                        <div class="espacio">
                        </div>
                        <p class="text-servicios">Servicios</p>
                    </div>
                </div>
                <div class="container">
                    <div class="text-sub-servicios">
                        ¡El pago de tu renta incluye todos los servicios!
                    </div>
                    <div class="d-flex justify-content-center display-movil">
                        <div class="caja">
                            <img src="assets/img/servicios/img1.svg" class="img-servicios" alt="">
                            <p class="text-p-servicios">Agua</p>
                        </div>
                        <div class="caja">
                            <img src="assets/img/servicios/img2.svg" class="img-servicios" alt="">
                            <p class="text-p-servicios">Gas</p>
                        </div>
                        <div class="caja">
                            <img src="assets/img/servicios/img3.svg" class="img-servicios" alt="">
                            <p class="text-p-servicios">Internet de alta velocidad</p>
                        </div>
                        <div class="caja">
                            <img src="assets/img/servicios/img4.svg" class="img-servicios" alt="">
                            <p class="text-p-servicios">Luz</p>
                        </div>
                        <div class="caja">
                            <img src="assets/img/servicios/img5.svg" class="img-servicios" alt="">
                            <p class="text-p-servicios">Mante<br class="br-espacio">nimiento</p>
                        </div>
                        <div class="caja">
                            <img src="assets/img/servicios/img6.svg" class="img-servicios" alt="">
                            <p class="text-p-servicios">Telefonía</p>
                        </div>
                        <div class="caja">
                            <img src="assets/img/servicios/img7.svg" class="img-servicios" alt="">
                            <p class="text-p-servicios">Televisión por cable</p>
                        </div>
                    </div>
                    <div class="d-block d-sm-block d-md-none">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="caja">
                                    <img src="assets/img/servicios-m/img1.png" class="img-servicios" alt="">
                                    <p class="text-p-servicios">Agua</p>
                                </div>
                                <p class="espacio-s"></p>
                                <div class="caja">
                                    <img src="assets/img/servicios-m/img2.png" class="img-servicios" alt="">
                                    <p class="text-p-servicios">Gas</p>
                                </div>
                            </div>
                            <div class="col-sm-12 text-center">
                                <div class="caja">
                                    <img src="assets/img/servicios-m/img3.png" class="img-servicios" alt="">
                                    <p class="text-p-servicios">Internet <br class="break"> de alta velocidad</p>
                                </div>
                                <p class="espacio-s"></p>
                                <div class="caja">
                                    <img src="assets/img/servicios-m/img4.png" class="img-servicios" alt="">
                                    <p class="text-p-servicios">Luz</p>
                                </div>
                            </div>
                            <div class="col-sm-12 text-center">
                                <div class="caja">
                                    <img src="assets/img/servicios-m/img5.png" class="img-servicios" alt="">
                                    <p class="text-p-servicios">Mantenimiento</p>
                                </div>
                                <p class="espacio-s"></p>
                                <div class="caja">
                                    <img src="assets/img/servicios-m/img6.png" class="img-servicios" alt="">
                                    <p class="text-p-servicios">Telefonía</p>
                                </div>
                            </div>
                            <div class="col-sm-12 text-center">
                                <div class="caja">
                                    <img src="assets/img/servicios-m/img7.png" class="img-servicios" alt="">
                                    <p class="text-p-servicios">Televisión por cable</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="ubicacion">
                <div class="row navbares-ubicacion">

                    <div class="col-lg-12 col-md-12 col-sm-12 justify-content-center">
                        <p class="text-ubicacion">VIVE EN UN EDIFICIO ÚNICO, DISFRUTA TU HOGAR AL MÁXIMO.</p>
                        <button id="info-edificio"type="button" class="button-ubicacion button-form scroll" data-desktop="#formulario-hero" data-mobile="#formu">SOLICITAR INFORMACIÓN</button>
                    </div>
                </div>
                <div class="d-block d-sm-block d-md-none">
                    <div class="container form-movil">
                        <div class="text-center form-m">
                            <form class="row" id="formu" method="POST" action="gracias">

                                <div class="col-12 form-group">
                                    <h3 class="hero-form-title">
                                        Descubre Joaquina. </h3>
                                </div>
                                <div class="col-12 form-group">
                                    <input type="text" name="nombre" id="nombre" placeholder="Nombre:" class="ctr-h" required />
                                </div>
                                <div class="col-12 form-group">
                                    <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad:" class=" ctr-h" required />
                                </div>
                                <div class="col-12 form-group">
                                    <input type="number" name="telefono" id="telefono" placeholder="Teléfono:" class="ctr-h" required />
                                </div>
                                <div class="col-12 form-group">
                                    <input type="mail" name="email" id="email" placeholder="Correo:" class="ctr-h" required />
                                </div>
                                <div class="col-12 form-group">
                                    <textarea name="mensaje" id="mensaje" placeholder="Deja un comentario:" class="ctr-h"></textarea>
                                </div>
                                <div>
                                    <input type="hidden" id="utm_campaign-m" name="utm_campaign">
                                    <input type="hidden" id="utm_source-m" name="utm_source">
                                    <input type="hidden" id="utm_medium-m" name="utm_medium">
                                    <input type="hidden" id="utm_term-m" name="utm_term">
                                    <input type="hidden" id="utm_content-m" name="utm_content">
                                </div>
                                <div class="col-12 form-group text-center">
                                    <button type="submit" class="button-red button-form" id="enviar-m">
                                        MÁS INFOMACIÓN </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row color">
                        <div class="col-lg-4 col-md-4 col-sm-12 ">
                            <div class="back-ubicacion margen-ubicacion">
                                <div class="position-ubicacion">
                                    <img src="assets/img/form-3.svg" alt="forma-hero" height="170">
                                </div>
                                <div class="caja-ubicacion">

                                    <div class="text-title-cards">
                                        Ubicación
                                    </div>
                                    <p class="parrafo-ubicacion">
                                        <b>Vive en la zona más dinámica.</b></p>

                                    <br><br>
                                    <p class="parrafo-ubicacion" style="font-style: italic;">
                                        Joaquina se ubica en la Colonia del Valle, a 2 cuadras del WTC y a pocos metros de la Av. Insurgentes.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12 margenes">
                            <iframe width="104%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=San%20Francisco%20345,%20Col%20del%20Valle%20Centro,%20Benito%20Ju%C3%A1rez,%2003103%20Ciudad%20de%20M%C3%A9xico,%20CDMX+(Joaquina)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                        </div>
                    </div>
                </div>


            </section>
            <section id=aviso_privacidad>
                <div class="row navbares-servicios nav-avisos">
                    <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
                        <a href="aviso-de-privacidad/" target="_blank" class="text-aviso">Aviso de privacidad</a>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-analytics.js"></script>

    <script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-database.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
    <script src="assets/js/form.js?v=<?= rand() ?>"></script>
    <script>
        $(function() {
            let scroll_link = $('.scroll');

            //smooth scrolling -----------------------
            scroll_link.click(function(e) {

                e.preventDefault();
                /**/
                if (window.matchMedia("(max-width: 1024px)").matches) {

                    gotoFrm = $(this).data('mobile')
                } else {

                    gotoFrm = $(this).data('desktop');
                }
                /**/

                let url = $('body').find(gotoFrm).offset().top;
                $('html, body').animate({
                    scrollTop: url
                }, 700);
                $(this).parent().addClass('active');
                $(this).parent().siblings().removeClass('active');
                return false;
            });
        });
    </script>
</body>

</html>