<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="https://joaquina.com.mx/wp-content/uploads/2020/09/cropped-favicon-1-32x32.png" sizes="32x32" />
	<title>JOAQUINA</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
	<link rel="stylesheet" href="assets/css/main.css?v=<?= rand() ?>" />
</head>

<body>
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
										<li id="carr_2" data-target="#carouselExampleIndicators" data-slide-to="1"></li>
										<li id="carr_3" data-target="#carouselExampleIndicators" data-slide-to="2"></li>
									</ol>
								</div>

								<p class="hero-text-p">
									Réntalo desde <b>$13,800 mxn,</b> plazos de 6 y 12 meses. </p>

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
							<!-- <div class="position">
                                <img src="assets/img/form-2.svg" alt="forma-hero" height="79" width="100">
                            </div> -->
						</div>

					</div>
				</div>

			</section>
			<section style="background-color: white;">
				<div class="d-flex justify-content-end">
					<img src="assets/img/form-2.svg" alt="forma-hero" height="79" width="100">
				</div>
			</section>

			<section id="cards-depas-title">
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
									<a id="estudio_cot" href="#" class="btn boton-card scroll" data-desktop="#formulario-hero" data-mobile="#formu">COTIZALO AHORA</a>
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
									<a id="recamara_disp" href="#" class="btn boton-card scroll" data-desktop="#formulario-hero" data-mobile="#formu">VEN A CONOCERLO</a>
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
									<a id="2recamaras_details" href="#" class="btn boton-card scroll" data-desktop="#formulario-hero" data-mobile="#formu">RÉNTALO AQUÍ</a>
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
								<div class="text-center">
									<p>Rooftop </p>
									<button type="button" class="btn popup" data-toggle="modal" data-target="#roof" id="btn-pop-roof">
										VER MÁS
									</button>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="roof" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog modal-xl pop-tam modal-dialog-centered">
										<div class="modal-content">

											<div class="modal-body">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<img src="assets/img/popup/close.svg" class="close-tam" alt="close icon">
													<!-- <span aria-hidden="true">&times;</span> -->
												</button>
												<div class="pop-content">
													<!--desktop-->
													<div class="d-none d-sm-none d-md-block">
														<div class="pop-img1">
															<div id="carouselroof" class="carousel slide" data-ride="carousel">
																<div class="carousel-inner tamaño-car">
																	<div class="carousel-item active">
																		<img src="assets/img/popup/roof/rooftop-1.jpg" class="pop-img-1" alt="roof-garden">
																		<!-- <img class="d-block w-100" src="..." alt="First slide"> -->
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/roof/rooftop-2.png" class="pop-img-1" alt="roof-garden">
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/roof/rooftop-3.png" class="pop-img-1" alt="roof-garden">
																	</div>
																</div>
																<a class="carousel-control-prev" href="#carouselroof" role="button" data-slide="prev">
																	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
																	<span class="sr-only">Previous</span>
																</a>
																<a class="carousel-control-next" href="#carouselroof" role="button" data-slide="next">
																	<span class="carousel-control-next-icon" aria-hidden="true"></span>
																	<span class="sr-only">Next</span>
																</a>
															</div>
														</div>
														<div class="pop-back">
															<div class="figura-pop">
																<img src="assets/img/popup/figura1.svg" class="figura-pop-1-tam" alt="roof-garden-figura1">
															</div>
															<div class="parrafo-pop">
																<p class="parrafo-pop-text-title">
																	Rooftop
																</p>
																<p class="parrafo-pop-text-sub" style="font-style: italic">120 m²</p>
																<p class="parrafo-pop-text-sub">
																	Las mejores reuniones
																	te esperan en las salas
																	exteriores.
																</p>
															</div>
															<div class="figura-pop-2">
																<img src="assets/img/popup/figura2.svg" class="figura-pop-2-tam" alt="roof-garden-figura2">
															</div>
														</div>
													</div>
													<!--movil-->
													<div class="d-block d-sm-block d-md-none">
														<div class="pop-img1">
															<div id="carouselroof-m" class="carousel slide" data-ride="carousel">
																<div class="carousel-inner tamaño-car">
																	<div class="carousel-item active">
																		<img src="assets/img/popup/roof/rooftop-1.jpg" class="pop-img-1" alt="roof-garden">
																		<!-- <img class="d-block w-100" src="..." alt="First slide"> -->
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/roof/rooftop-2.png" class="pop-img-1" alt="roof-garden">
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/roof/rooftop-3.png" class="pop-img-1" alt="roof-garden">
																	</div>
																</div>
																<a class="carousel-control-prev" href="#carouselroof-m" role="button" data-slide="prev">
																	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
																	<span class="sr-only">Previous</span>
																</a>
																<a class="carousel-control-next" href="#carouselroof-m" role="button" data-slide="next">
																	<span class="carousel-control-next-icon" aria-hidden="true"></span>
																	<span class="sr-only">Next</span>
																</a>
															</div>
														</div>
														<div class="pop-back">
															<div class="parrafo-pop">
																<p class="parrafo-pop-text-title">
																	Rooftop
																</p>
																<p class="parrafo-pop-text-sub" style="font-style: italic">120 m²</p>
																<p class="parrafo-pop-text-sub">
																	Las mejores reuniones
																	te esperan en las salas
																	exteriores.
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="img-amenidades2 img-tam text-amenidades">
								<div class="text-center">
									<p>Pet zone</p>
									<button type="button" class="btn popup" data-toggle="modal" data-target="#petzone" id="btn-pop-pet">
										VER MÁS
									</button>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="petzone" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog modal-xl pop-tam modal-dialog-centered">
										<div class="modal-content">

											<div class="modal-body">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<img src="assets/img/popup/close.svg" class="close-tam" alt="close icon">
													<!-- <span aria-hidden="true">&times;</span> -->
												</button>
												<div class="pop-content">
													<div class="d-none d-sm-none d-md-block">
														<div class="pop-img1">
															<div id="carouselpet" class="carousel slide" data-ride="carousel">
																<div class="carousel-inner tamaño-car">
																	<div class="carousel-item active">
																		<img src="assets/img/popup/pet/petzone-1.jpg" class="pop-img-1" alt="roof-garden">
																		<!-- <img class="d-block w-100" src="..." alt="First slide"> -->
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/pet/petzone-2.png" class="pop-img-1" alt="roof-garden">
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/pet/petzone-3.png" class="pop-img-1" alt="roof-garden">
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/pet/petzone-4.png" class="pop-img-1" alt="roof-garden">
																	</div>
																</div>
																<a class="carousel-control-prev" href="#carouselpet" role="button" data-slide="prev">
																	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
																	<span class="sr-only">Previous</span>
																</a>
																<a class="carousel-control-next" href="#carouselpet" role="button" data-slide="next">
																	<span class="carousel-control-next-icon" aria-hidden="true"></span>
																	<span class="sr-only">Next</span>
																</a>
															</div>
														</div>
														<div class="pop-back">
															<div class="figura-pop">
																<img src="assets/img/popup/figura1.svg" class="figura-pop-1-tam" alt="roof-garden-figura1">
															</div>
															<div class="parrafo-pop">
																<p class="parrafo-pop-text-title">
																	Pet zone
																</p>
																<p class="parrafo-pop-text-sub" style="font-style: italic">36 m²</p>
																<p class="parrafo-pop-text-sub">
																	Un espacio diseñado con todo lo que tu mejor amigo necesita para divertirse.
																</p>
															</div>
															<div class="figura-pop-2">
																<img src="assets/img/popup/figura2.svg" class="figura-pop-2-tam" alt="roof-garden-figura2">
															</div>
														</div>
													</div>

													<!--movil-->
													<div class="d-block d-sm-block d-md-none">
														<div class="pop-img1">
															<div id="carouselpet-m" class="carousel slide" data-ride="carousel">
																<div class="carousel-inner tamaño-car">
																	<div class="carousel-item active">
																		<img src="assets/img/popup/pet/petzone-1.jpg" class="pop-img-1" alt="roof-garden">
																		<!-- <img class="d-block w-100" src="..." alt="First slide"> -->
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/pet/petzone-2.png" class="pop-img-1" alt="roof-garden">
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/pet/petzone-3.png" class="pop-img-1" alt="roof-garden">
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/pet/petzone-4.png" class="pop-img-1" alt="roof-garden">
																	</div>
																</div>
																<a class="carousel-control-prev" href="#carouselpet-m" role="button" data-slide="prev">
																	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
																	<span class="sr-only">Previous</span>
																</a>
																<a class="carousel-control-next" href="#carouselpet-m" role="button" data-slide="next">
																	<span class="carousel-control-next-icon" aria-hidden="true"></span>
																	<span class="sr-only">Next</span>
																</a>
															</div>
														</div>
														<div class="pop-back">
															<div class="parrafo-pop">
																<p class="parrafo-pop-text-title">
																	Pet zone
																</p>
																<p class="parrafo-pop-text-sub" style="font-style: italic">36 m²</p>
																<p class="parrafo-pop-text-sub">
																	Un espacio diseñado con todo lo que tu mejor amigo necesita para divertirse.
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 w-15 p-3"></div>
						<div class="col-lg-6 col-md-6 col-sm-12 margin-img">
							<div class="img-amenidades3 img-tam text-amenidades margen">
								<div class="text-center">
									<p>Tech gym</p>
									<button type="button" class="btn popup" data-toggle="modal" data-target="#techgym" id="btn-pop-gym">
										VER MÁS
									</button>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="techgym" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog modal-xl pop-tam modal-dialog-centered">
										<div class="modal-content">

											<div class="modal-body">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<img src="assets/img/popup/close.svg" class="close-tam" alt="close icon">
													<!-- <span aria-hidden="true">&times;</span> -->
												</button>
												<div class="pop-content">
													<div class="d-none d-sm-none d-md-block">
														<div class="pop-img1">
															<div id="carouseltech" class="carousel slide" data-ride="carousel">
																<div class="carousel-inner tamaño-car">
																	<div class="carousel-item active">
																		<img src="assets/img/popup/tech/gym-1.jpg" class="pop-img-1" alt="roof-garden">
																		<!-- <img class="d-block w-100" src="..." alt="First slide"> -->
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/tech/gym-2.png" class="pop-img-1" alt="roof-garden">
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/tech/gym-3.png" class="pop-img-1" alt="roof-garden">
																	</div>
																</div>
																<a class="carousel-control-prev" href="#carouseltech" role="button" data-slide="prev">
																	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
																	<span class="sr-only">Previous</span>
																</a>
																<a class="carousel-control-next" href="#carouseltech" role="button" data-slide="next">
																	<span class="carousel-control-next-icon" aria-hidden="true"></span>
																	<span class="sr-only">Next</span>
																</a>
															</div>
														</div>
														<div class="pop-back">
															<div class="figura-pop">
																<img src="assets/img/popup/figura1.svg" class="figura-pop-1-tam" alt="roof-garden-figura1">
															</div>
															<div class="parrafo-pop">
																<p class="parrafo-pop-text-title">
																	Tech gym
																</p>
																<p class="parrafo-pop-text-sub" style="font-style: italic">28 m²</p>
																<p class="parrafo-pop-text-sub">
																	Ejercítate con dos plataformas multifuncionales: Pelotón y Mirror.
																</p>
															</div>
															<div class="figura-pop-2">
																<img src="assets/img/popup/figura2.svg" class="figura-pop-2-tam" alt="roof-garden-figura2">
															</div>
														</div>
													</div>
													<!--movil-->
													<div class="d-block d-sm-block d-md-none">
														<div class="pop-img1">
															<div id="carouseltech-m" class="carousel slide" data-ride="carousel">
																<div class="carousel-inner tamaño-car">
																	<div class="carousel-item active">
																		<img src="assets/img/popup/tech/gym-1.jpg" class="pop-img-1" alt="roof-garden">
																		<!-- <img class="d-block w-100" src="..." alt="First slide"> -->
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/tech/gym-2.png" class="pop-img-1" alt="roof-garden">
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/tech/gym-3.png" class="pop-img-1" alt="roof-garden">
																	</div>
																</div>
																<a class="carousel-control-prev" href="#carouseltech-m" role="button" data-slide="prev">
																	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
																	<span class="sr-only">Previous</span>
																</a>
																<a class="carousel-control-next" href="#carouseltech-m" role="button" data-slide="next">
																	<span class="carousel-control-next-icon" aria-hidden="true"></span>
																	<span class="sr-only">Next</span>
																</a>
															</div>
														</div>
														<div class="pop-back">
															<div class="parrafo-pop">
																<p class="parrafo-pop-text-title">
																	Tech gym
																</p>
																<p class="parrafo-pop-text-sub" style="font-style: italic">28 m²</p>
																<p class="parrafo-pop-text-sub">
																	Ejercítate con dos plataformas multifuncionales: Pelotón y Mirror.
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="img-amenidades4 img-tam text-amenidades">
								<div class="text-center">
									<p>Movie room</p>
									<button type="button" class="btn popup" data-toggle="modal" data-target="#movie" id="btn-pop-movie">
										VER MÁS
									</button>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="movie" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog modal-xl pop-tam modal-dialog-centered">
										<div class="modal-content">

											<div class="modal-body">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<img src="assets/img/popup/close.svg" class="close-tam" alt="close icon">
													<!-- <span aria-hidden="true">&times;</span> -->
												</button>
												<div class="pop-content">
													<div class="d-none d-sm-none d-md-block">
														<div class="pop-img1">
															<div id="carouselmovie" class="carousel slide" data-ride="carousel">
																<div class="carousel-inner tamaño-car">
																	<div class="carousel-item active">
																		<img src="assets/img/popup/movie/cine-1.jpg" class="pop-img-1" alt="roof-garden">
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/movie/cine-2.png" class="pop-img-1" alt="roof-garden">
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/movie/cine-3.png" class="pop-img-1" alt="roof-garden">
																	</div>
																</div>
																<a class="carousel-control-prev" href="#carouselmovie" role="button" data-slide="prev">
																	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
																	<span class="sr-only">Previous</span>
																</a>
																<a class="carousel-control-next" href="#carouselmovie" role="button" data-slide="next">
																	<span class="carousel-control-next-icon" aria-hidden="true"></span>
																	<span class="sr-only">Next</span>
																</a>
															</div>
														</div>
														<div class="pop-back">
															<div class="figura-pop">
																<img src="assets/img/popup/figura1.svg" class="figura-pop-1-tam" alt="roof-garden-figura1">
															</div>
															<div class="parrafo-pop">
																<p class="parrafo-pop-text-title">Movie room</p>
																<p class="parrafo-pop-text-sub" style="font-style: italic">33 m²</p>
																<p class="parrafo-pop-text-sub">
																	Disfruta de tus películas favoritas en una pantalla de 70 pulgadas, con sillones y sonido envolvente.
																</p>
															</div>
															<div class="figura-pop-2">
																<img src="assets/img/popup/figura2.svg" class="figura-pop-2-tam" alt="roof-garden-figura2">
															</div>
														</div>
													</div>
													<!--movil-->
													<div class="d-block d-sm-block d-md-none">
														<div class="pop-img1">
															<div id="carouselmovie-m" class="carousel slide" data-ride="carousel">
																<div class="carousel-inner tamaño-car">
																	<div class="carousel-item active">
																		<img src="assets/img/popup/movie/cine-1.jpg" class="pop-img-1" alt="roof-garden">
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/movie/cine-2.png" class="pop-img-1" alt="roof-garden">
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/movie/cine-3.png" class="pop-img-1" alt="roof-garden">
																	</div>
																</div>
																<a class="carousel-control-prev" href="#carouselmovie-m" role="button" data-slide="prev">
																	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
																	<span class="sr-only">Previous</span>
																</a>
																<a class="carousel-control-next" href="#carouselmovie-m" role="button" data-slide="next">
																	<span class="carousel-control-next-icon" aria-hidden="true"></span>
																	<span class="sr-only">Next</span>
																</a>
															</div>
														</div>
														<div class="pop-back">
															<div class="parrafo-pop">
																<p class="parrafo-pop-text-title">
																	Movie room </p>
																<p class="parrafo-pop-text-sub" style="font-style: italic">33 m²</p>
																<p class="parrafo-pop-text-sub">
																	Disfruta de tus películas favoritas en una pantalla de 70 pulgadas, con sillones y sonido envolvente.
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>

							</div>
						</div>
						<div class="col-lg-12 w-15 p-3"></div>
						<div class="col-lg-6 col-md-6 col-sm-12 margin-img">
							<div class="img-amenidades5 img-tam text-amenidades margen">
								<div class="text-center">
									<p>Home office</p>
									<button type="button" class="btn popup" data-toggle="modal" data-target="#homeoffice" id="btn-pop-homeoffice">
										VER MÁS
									</button>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="homeoffice" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog modal-xl pop-tam modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-body">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<img src="assets/img/popup/close.svg" class="close-tam" alt="close icon">
													<!-- <span aria-hidden="true">&times;</span> -->
												</button>
												<div class="pop-content">
													<div class="d-none d-sm-none d-md-block">
														<div class="pop-img1">
															<div id="carouselhome" class="carousel slide" data-ride="carousel">
																<div class="carousel-inner tamaño-car">
																	<div class="carousel-item active">
																		<img src="assets/img/popup/home/homeoffice-1.jpg" class="pop-img-1" alt="roof-garden">
																		<!-- <img class="d-block w-100" src="..." alt="First slide"> -->
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/home/homeoffice-2.png" class="pop-img-1" alt="roof-garden">
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/home/homeoffice-3.png" class="pop-img-1" alt="roof-garden">
																	</div>
																</div>
																<a class="carousel-control-prev" href="#carouselhome" role="button" data-slide="prev">
																	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
																	<span class="sr-only">Previous</span>
																</a>
																<a class="carousel-control-next" href="#carouselhome" role="button" data-slide="next">
																	<span class="carousel-control-next-icon" aria-hidden="true"></span>
																	<span class="sr-only">Next</span>
																</a>
															</div>
														</div>
														<div class="pop-back">
															<div class="figura-pop">
																<img src="assets/img/popup/figura1.svg" class="figura-pop-1-tam" alt="roof-garden-figura1">
															</div>
															<div class="parrafo-pop">
																<p class="parrafo-pop-text-title">Home office</p>
																<p class="parrafo-pop-text-sub" style="font-style: italic">9 m²</p>
																<p class="parrafo-pop-text-sub">
																	Sala de juntas y espacios personales habilitados con todo lo que necesitas.
															</div>
															<div class="figura-pop-2">
																<img src="assets/img/popup/figura2.svg" class="figura-pop-2-tam" alt="roof-garden-figura2">
															</div>
														</div>
													</div>
													<!--movil-->
													<div class="d-block d-sm-block d-md-none">
														<div class="pop-img1">
															<div id="carouselhome-m" class="carousel slide" data-ride="carousel">
																<div class="carousel-inner tamaño-car">
																	<div class="carousel-item active">
																		<img src="assets/img/popup/home/homeoffice-1.jpg" class="pop-img-1" alt="roof-garden">
																		<!-- <img class="d-block w-100" src="..." alt="First slide"> -->
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/home/homeoffice-2.png" class="pop-img-1" alt="roof-garden">
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/home/homeoffice-3.png" class="pop-img-1" alt="roof-garden">
																	</div>
																</div>
																<a class="carousel-control-prev" href="#carouselhome-m" role="button" data-slide="prev">
																	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
																	<span class="sr-only">Previous</span>
																</a>
																<a class="carousel-control-next" href="#carouselhome-m" role="button" data-slide="next">
																	<span class="carousel-control-next-icon" aria-hidden="true"></span>
																	<span class="sr-only">Next</span>
																</a>
															</div>
														</div>
														<div class="pop-back">
															<div class="parrafo-pop">
																<p class="parrafo-pop-text-title">
																	Home office
																</p>
																<p class="parrafo-pop-text-sub" style="font-style: italic">9 m²</p>
																<p class="parrafo-pop-text-sub">
																	Sala de juntas y espacios personales habilitados con todo lo que necesitas.
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="img-amenidades6 img-tam text-amenidades">
								<div class="text-center">
									<p>Play zone</p>
									<button type="button" class="btn popup" data-toggle="modal" data-target="#zone" id="btn-pop-playzone">
										VER MÁS
									</button>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="zone" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog modal-xl pop-tam modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-body">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<img src="assets/img/popup/close.svg" class="close-tam" alt="close icon">
												</button>
												<div class="pop-content">
													<div class="d-none d-sm-none d-md-block">
														<div class="pop-img1">
															<div id="carouselzone" class="carousel slide" data-ride="carousel">
																<div class="carousel-inner tamaño-car">
																	<div class="carousel-item active">
																		<img src="assets/img/popup/zone/playzone-1.jpg" class="pop-img-1">
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/zone/playzone-2.png" class="pop-img-1" alt="roof-garden">
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/zone/playzone-3.png" class="pop-img-1" alt="roof-garden">
																	</div>
																</div>
																<a class="carousel-control-prev" href="#carouselzone" role="button" data-slide="prev">
																	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
																	<span class="sr-only">Previous</span>
																</a>
																<a class="carousel-control-next" href="#carouselzone" role="button" data-slide="next">
																	<span class="carousel-control-next-icon" aria-hidden="true"></span>
																	<span class="sr-only">Next</span>
																</a>
															</div>
														</div>
														<div class="pop-back">
															<div class="figura-pop">
																<img src="assets/img/popup/figura1.svg" class="figura-pop-1-tam" alt="roof-garden-figura1">
															</div>
															<div class="parrafo-pop">
																<p class="parrafo-pop-text-title">Play zone</p>
																<p class="parrafo-pop-text-sub" style="font-style: italic">15 m²</p>
																<p class="parrafo-pop-text-sub">
																	Relájate en el área de juegos con máquina de arcade, juegos de mesa y salas lounge.
															</div>
															<div class="figura-pop-2">
																<img src="assets/img/popup/figura2.svg" class="figura-pop-2-tam" alt="roof-garden-figura2">
															</div>
														</div>
													</div>
													<!--movil-->
													<div class="d-block d-sm-block d-md-none">
														<div class="pop-img1">
															<div id="carouselzone-m" class="carousel slide" data-ride="carousel">
																<div class="carousel-inner tamaño-car">
																	<div class="carousel-item active">
																		<img src="assets/img/popup/zone/playzone-1.jpg" class="pop-img-1">
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/zone/playzone-2.png" class="pop-img-1" alt="roof-garden">
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/zone/playzone-3.png" class="pop-img-1" alt="roof-garden">
																	</div>gastrobar-
																</div>
																<a class="carousel-control-prev" href="#carouselzone-m" role="button" data-slide="prev">
																	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
																	<span class="sr-only">Previous</span>
																</a>
																<a class="carousel-control-next" href="#carouselzone-m" role="button" data-slide="next">
																	<span class="carousel-control-next-icon" aria-hidden="true"></span>
																	<span class="sr-only">Next</span>
																</a>
															</div>
														</div>
														<div class="pop-back">
															<div class="parrafo-pop">
																<p class="parrafo-pop-text-title">
																	Play zone
																</p>
																<p class="parrafo-pop-text-sub" style="font-style: italic">15 m²</p>
																<p class="parrafo-pop-text-sub">
																	Relájate en el área de juegos con máquina de arcade, juegos de mesa y salas lounge.
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>

							</div>
						</div>
						<div class="col-lg-12 w-15 p-3 col-sm-12"></div>
						<div class="col-lg-6 col-md-6 col-sm-12  margin-img">
							<div class="img-amenidades7 img-tam text-amenidades margen">
								<div class="text-center">
									<p>Gastrobar</p>
									<button type="button" class="btn popup" data-toggle="modal" data-target="#gastrobar" id="btn-pop-gastrobar">
										VER MÁS
									</button>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="gastrobar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog modal-xl pop-tam modal-dialog-centered">
										<div class="modal-content">

											<div class="modal-body">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<img src="assets/img/popup/close.svg" class="close-tam" alt="close icon">
													<!-- <span aria-hidden="true">&times;</span> -->
												</button>
												<div class="pop-content">
													<div class="d-none d-sm-none d-md-block">
														<div class="pop-img1">
															<div id="carouselgastro" class="carousel slide" data-ride="carousel">
																<div class="carousel-inner tamaño-car">
																	<div class="carousel-item active">
																		<img src="assets/img/popup/gastrobar/gastrobar-1.jpg" class="pop-img-1" alt="roof-garden">
																		<!-- <img class="d-block w-100" src="..." alt="First slide"> -->
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/gastrobar/gastrobar-2.png" class="pop-img-1" alt="roof-garden">
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/gastrobar/gastrobar-3.png" class="pop-img-1" alt="roof-garden">
																	</div>
																</div>
																<a class="carousel-control-prev" href="#carouselgastro" role="button" data-slide="prev">
																	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
																	<span class="sr-only">Previous</span>
																</a>
																<a class="carousel-control-next" href="#carouselgastro" role="button" data-slide="next">
																	<span class="carousel-control-next-icon" aria-hidden="true"></span>
																	<span class="sr-only">Next</span>
																</a>
															</div>
														</div>
														<div class="pop-back">
															<div class="figura-pop">
																<img src="assets/img/popup/figura1.svg" class="figura-pop-1-tam" alt="roof-garden-figura1">
															</div>
															<div class="parrafo-pop">
																<p class="parrafo-pop-text-title">Gastrobar</p>
																<p class="parrafo-pop-text-sub" style="font-style: italic">9 m²</p>
																<p class="parrafo-pop-text-sub">
																	Prepara tus mejores platillos en la cocina multifuncional.
															</div>
															<div class="figura-pop-2">
																<img src="assets/img/popup/figura2.svg" class="figura-pop-2-tam" alt="roof-garden-figura2">
															</div>
														</div>
													</div>
													<!--movil-->
													<div class="d-block d-sm-block d-md-none">
														<div class="pop-img1">
															<div id="carouselgastro-m" class="carousel slide" data-ride="carousel">
																<div class="carousel-inner tamaño-car">
																	<div class="carousel-item active">
																		<img src="assets/img/popup/gastrobar/gastrobar-1.jpg" class="pop-img-1" alt="roof-garden">
																		<!-- <img class="d-block w-100" src="..." alt="First slide"> -->
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/gastrobar/gastrobar-2.png" class="pop-img-1" alt="roof-garden">
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/gastrobar/gastrobar-3.png" class="pop-img-1" alt="roof-garden">
																	</div>
																</div>
																<a class="carousel-control-prev" href="#carouselgastro-m" role="button" data-slide="prev">
																	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
																	<span class="sr-only">Previous</span>
																</a>
																<a class="carousel-control-next" href="#carouselgastro-m" role="button" data-slide="next">
																	<span class="carousel-control-next-icon" aria-hidden="true"></span>
																	<span class="sr-only">Next</span>
																</a>
															</div>
														</div>
														<div class="pop-back">
															<div class="parrafo-pop">
																<p class="parrafo-pop-text-title">
																	Gastrobar
																</p>
																<p class="parrafo-pop-text-sub" style="font-style: italic">9 m²</p>
																<p class="parrafo-pop-text-sub">
																	Prepara tus mejores platillos en la cocina multifuncional.
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="img-amenidades8 img-tam text-amenidades">
								<div class="text-center">
									<p>Grill zone</p>
									<button type="button" class="btn popup" data-toggle="modal" data-target="#grillzone" id="btn-pop-grillzone">
										VER MÁS
									</button>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="grillzone" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog modal-xl pop-tam modal-dialog-centered">
										<div class="modal-content">

											<div class="modal-body">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<img src="assets/img/popup/close.svg" class="close-tam" alt="close icon">
													<!-- <span aria-hidden="true">&times;</span> -->
												</button>
												<div class="pop-content">
													<div class="d-none d-sm-none d-md-block">
														<div class="pop-img1">
															<div id="carouselgrill" class="carousel slide" data-ride="carousel">
																<div class="carousel-inner tamaño-car">
																	<div class="carousel-item active">
																		<img src="assets/img/popup/grill/grillzone-1.jpg" class="pop-img-1" alt="roof-garden">
																		<!-- <img class="d-block w-100" src="..." alt="First slide"> -->
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/grill/grillzone-2.png" class="pop-img-1" alt="roof-garden">
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/grill/grillzone-3.png" class="pop-img-1" alt="roof-garden">
																	</div>
																</div>
																<a class="carousel-control-prev" href="#carouselgrill" role="button" data-slide="prev">
																	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
																	<span class="sr-only">Previous</span>
																</a>
																<a class="carousel-control-next" href="#carouselgrill" role="button" data-slide="next">
																	<span class="carousel-control-next-icon" aria-hidden="true"></span>
																	<span class="sr-only">Next</span>
																</a>
															</div>
														</div>
														<div class="pop-back">
															<div class="figura-pop">
																<img src="assets/img/popup/figura1.svg" class="figura-pop-1-tam" alt="roof-garden-figura1">
															</div>
															<div class="parrafo-pop">
																<p class="parrafo-pop-text-title">Grill zone</p>
																<p class="parrafo-pop-text-sub" style="font-style: italic">120 m²</p>
																<p class="parrafo-pop-text-sub">
																	Disfruta de la explosión de sabores que te ofrecen los asadores green egg y kitchenaid.
															</div>
															<div class="figura-pop-2">
																<img src="assets/img/popup/figura2.svg" class="figura-pop-2-tam" alt="roof-garden-figura2">
															</div>
														</div>
													</div>
													<!--movil-->
													<div class="d-block d-sm-block d-md-none">
														<div class="pop-img1">
															<div id="carouselgrill-m" class="carousel slide" data-ride="carousel">
																<div class="carousel-inner tamaño-car">
																	<div class="carousel-item active">
																		<img src="assets/img/popup/grill/grillzone-1.jpg" class="pop-img-1" alt="roof-garden">
																		<!-- <img class="d-block w-100" src="..." alt="First slide"> -->
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/grill/grillzone-2.png" class="pop-img-1" alt="roof-garden">
																	</div>
																	<div class="carousel-item">
																		<img src="assets/img/popup/grill/grillzone-3.png" class="pop-img-1" alt="roof-garden">
																	</div>
																</div>
																<a class="carousel-control-prev" href="#carouselgrill-m" role="button" data-slide="prev">
																	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
																	<span class="sr-only">Previous</span>
																</a>
																<a class="carousel-control-next" href="#carouselgrill-m" role="button" data-slide="next">
																	<span class="carousel-control-next-icon" aria-hidden="true"></span>
																	<span class="sr-only">Next</span>
																</a>
															</div>
														</div>
														<div class="pop-back">
															<div class="parrafo-pop">
																<p class="parrafo-pop-text-title">
																	Grill zone
																</p>
																<p class="parrafo-pop-text-sub" style="font-style: italic">120 m²</p>
																<p class="parrafo-pop-text-sub">
																	Disfruta de la explosión de sabores que te ofrecen los asadores green egg y kitchenaid.
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
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
						<div class="row margen-movil">
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
								<div class="texto-servicio">
									<img src="assets/img/servicios-m/img3.png" class="img-servicios" alt="">
									<p class="text-p-servicios justi">Internet de alta velocidad</p>
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
									<p class="text-p-servicios">Manteni-<br>miento</p>
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
						<button id="info-edificio" type="button" class="button-ubicacion button-form scroll" data-desktop="#formulario-hero" data-mobile="#formu">SOLICITA MÁS DETALLES</button>
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
									<img src="assets/img/form-3.svg" alt="forma-hero" class="m-p" height="170">
								</div>
								<div class="caja-ubicacion">

									<div class="text-title-cards">
										Ubicación
									</div>
									<p class="parrafo-ubicacion">
										<b>Vive en la zona más dinámica.</b>
									</p>

									<br><br>
									<p class="parrafo-ubicacion" style="font-style: italic;">
										Joaquina se ubica en la Colonia del Valle, a 2 cuadras del WTC y a pocos metros de la Av. Insurgentes.</p>
									<br><br>
									<p class="parrafo-ubicacion" style="font-style: italic;">San Francisco 345, Col. del Valle Nte, CDMX.</p>

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
