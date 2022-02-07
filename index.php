<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Infinite Data Analyzer</title>
        <link rel="icon" type="image/x-icon" href="imagenes/Logo/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">Infinite Data Analizer</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#sabermas">Big Data</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>
                        <li class="nav-item"><a class="nav-link" href="#menuChistes">Chistes</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">Iniciar sesion</a></li>
                        <?php if(isset($_SESSION["usuario"])): ?>
                            <li class="nav-item"><a class="nav-link" href="logout.php">Cerrar sesion</a></li>
                        <?php endif; ?>
						<li><button type="button" class="btn btn-danger" id="tema" onclick="cambiarTema()"><i class="fa fa-moon-o" aria-hidden="true"></i></button></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Empieza a conocer el mundo de Big Data</h1>
                        <?php if(isset($_SESSION["usuario"])): ?>
                            <h1 class="text-white font-weight-bold"><?php echo $_SESSION["usuario"]['nombre'] ?></h1>
                        <?php endif; ?>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Big Data es un término que describe el gran volumen de datos, tanto estructurados como no estructurados, que inundan los negocios cada día.</p>
                        <a class="btn btn-primary btn-xl" href="#sabermas">Saber más</a>
                    </div>
                </div>
            </div>
        </header>
        <section class="page-section bg-primary" id="sabermas">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Tenemos lo que necesita</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Ofrecemos una gran cantidad de formación, ya puede ser en forma de cursos, tutoriales y distintos ejercicios para poner aprueba los tutoriales y cursos de está página web</p>
                        <a class="btn btn-light btn-xl" href="#services">Empezemos</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Estamos a tu servicio</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-award fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Tutoriales</h3>
                            <p id="cambio1" class="text-muted mb-0">Todo lo que necesite saber sobre BigData aqui lo encontrará!!!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Cursos</h3>
                            <p id="cambio2" class="text-muted mb-0">Donde nuestros profesionales pondrán a vuestra disposición el mejor material.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Ejemplos</h3>
                            <p id="cambio3" class="text-muted mb-0">Para que se familiarice y le sea mas sencillo el aprendizaje</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-pencil fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Ejercicios</h3>
                            <p id="cambio4" class="text-muted mb-0">Para poner en prácticas lo que le hemos enseñado en los cursos</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg" title="Project Name" height="1px">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg"/>
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Servicios</div>
                                <div class="project-name">Proyecto 1</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/2.jpg"  />
                            <div class="portfolio-box-caption" >
                                <div class="project-category text-white-50">Servicios</div>
                                <div class="project-name">Proyecto 1</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/3.jpg"/>
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Servicios</div>
                                <div class="project-name">Proyecto 1</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/4.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/4.jpg"/>
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Servicios</div>
                                <div class="project-name">Proyecto 1</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/5.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/5.jpg"/>
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Servicios</div>
                                <div class="project-name">Proyecto 1</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/6.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/6.jpg"/>
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Servicios</div>
                                <div class="project-name">Proyecto 1</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="menuChistes">
            <main>
                <ul>
                    <li>Va Susana y nos da un descanso</li>
                    <li>Va Susana y nos aprueba a todos</li>
                    <li>Va Gerardo y explica</li>
                    <li>Va el Galimatías y viene</li>
                    <li>Va Susana y no se estresa por el parri</li>
                    <li>Viva el vino y las mujeres</li>
		            <li>Va el Parry y se calla un rato</li>
                </ul>
            </main>
        </div>
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <form action="mail.php" method="post">
                            <h2 class="mt-0">Ponte en contacto con nosotros</h2>
                            <hr class="divider" />
                            <p id="cambio5" class="text-muted mb-5">¿Listo para comenzar tu próximo proyecto con nosotros? ¡Envíenos un mensaje y nos pondremos en contacto con usted lo antes posible!</p>
                            <label for="email">Correo electrónico de contacto</label><hr>
                            <input type="email" name="correo" placeholder="Introduzca su email">
                            <button type="submit" class="btn btn-primary" name="email">Inscribirse</button>
                        </form>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5"></div>
            </div>
        </section>

        <footer id="piepag" class="text-center text-lg-start bg-light text-muted">
            <section class="">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i><a class="navbar-brand" href="index.html">Infinite Data Analizer</a>
                        </h6>
                        <p>
                            Para nosotros ha sido un placer que visite nuestra página, <strong>¡Gracias!</strong>
                        </p>
                    </div>
                
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4" style="color: #f4623a;">
                            Enlaces directos
                        </h6>
                        <p>
                        <a href="#sabermas" class="text-reset">Big Data</a>
                        </p>
                        <p>
                        <a href="#services" class="text-reset">Servicios</a>
                        </p>
                        <p>
                        <a href="#portfolio" class="text-reset">Portfolio</a>
                        </p>
                        <p>
                        <a href="chistes.html" class="text-reset">Chistes</a>
                        </p>
                    </div>
        
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            <a class="nav-link" href="#contact">Contacto</a>
                        </h6>
                        <p><i class="fas fa-home me-3"></i> Av. de Andalucía, 84, 18230 Atarfe, Granada</p>
                        <p><i class="fas fa-phone me-3"></i> 958 89 39 93</p>
                    </div>
                </div>
            </div>
            </section>
            <div class="container px-4 px-lg-5">
                <div class="small text-center text-muted">Copyright &copy; 2022 - Inifinity Data Analizer</div>
            </div>
        </footer>
		<script>
			var body= document.body;
	
			function cambiarTema(){
				
				if (body.style.background=="dimgray"){
					body.style.background="white"
					body.style.color="black"
					var element1 = document.getElementById("piepag");
					var element2 = document.getElementById("mainNav");
					var element3 = document.getElementById("cambio1");
					var element4 = document.getElementById("cambio2");
					var element5 = document.getElementById("cambio3");
					var element6 = document.getElementById("cambio4");
					var element7 = document.getElementById("cambio5");


					element1.classList.remove("bg-dark")
					element1.classList.add("bg-light")

					element2.classList.remove("bg-dark")
					element2.classList.add("bg-light")

					element3.classList.remove("text-light")
					element3.classList.add("text-muted")

					element4.classList.remove("text-light")
					element4.classList.add("text-muted")

					element5.classList.remove("text-light")
					element5.classList.add("text-muted")

					element6.classList.remove("text-light")
					element6.classList.add("text-muted")

					element7.classList.remove("text-light")
					element7.classList.add("text-muted")

				}else{
					body.style.background="dimgray"
					body.style.color="white"
					var element1 = document.getElementById("piepag");
					var element2 = document.getElementById("mainNav");
					var element3 = document.getElementById("cambio1");
					var element4 = document.getElementById("cambio2");
					var element5 = document.getElementById("cambio3");
					var element6 = document.getElementById("cambio4");
					var element7 = document.getElementById("cambio5");


					element1.classList.remove("bg-light")
					element1.classList.add("bg-dark");

					element2.classList.remove("bg-light")
					element2.classList.add("bg-dark")

					element3.classList.remove("text-muted")
					element3.classList.add("text-light")

					element4.classList.remove("text-muted")
					element4.classList.add("text-light")

					element5.classList.remove("text-muted")
					element5.classList.add("text-light")

					element6.classList.remove("text-muted")
					element6.classList.add("text-light")

					element7.classList.remove("text-muted")
					element7.classList.add("text-light")

				}
			}
		</script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
