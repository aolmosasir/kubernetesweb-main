<?php
session_start();
if (!empty($_SESSION[ 'usuario' ])) {
    header("Location: index.php");
}
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
                  <li class="nav-item"><a class="nav-link" href="index.php#sabermas">Big Data</a></li>
                  <li class="nav-item"><a class="nav-link" href="index.php#services">Servicios</a></li>
                  <li class="nav-item"><a class="nav-link" href="index.php#portfolio">Portfolio</a></li>
                  <li class="nav-item"><a class="nav-link" href="index.php#contact">Contacto</a></li>
                  <li class="nav-item"><a class="nav-link" href="index.php#menuChistes">Chistes</a></li>
               </ul>
            </div>
         </div>
      </nav>
      <header class="masthead">
         <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center">
               <div class="col-md-5 mb-lg-5">
                    <form action="ldaplogin.php" method="POST" class="bg-white rounded shadow-5-strong p-5">
                        <div class="form-outline mb-4">
                            <label class="form-label" for="user">Usuario de LDAP</label>
                            <input type="text" name="usuario" class="form-control" placeholder="Escribe tu nombre de usuario"/>
                        </div>
        
                        <label class="form-label" for="contra">Contraseña</label>
                        <div class="form-outline mb-4">
                            <input type="password" name="password" class="form-control" placeholder="Inserte su contraseña" />
                        </div>

                        <button type="submit" class="btn btn-primary btn-block w-100">Iniciar sesion</button>
                    </form>
               </div>
            </div>
         </div>
      </header>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
      <script src="js/scripts.js"></script>
      <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
   </body>
</html>