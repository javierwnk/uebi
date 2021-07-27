<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Páginas web, ecommerce, presencia online, mi tienda, crear, templates, comercio electrónico, bajo costo, precios baratos, planes economicos, marketing digital, community manager, fotografía">
    <meta name="description" content="Contáctanos para más información">
    <title>Contáctanos</title>

    <link href="https://fonts.googleapis.com/icon?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>

<?php 
$nya = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['cellphone'];
$mensaje = $_POST ['textearea'];

$mimail="contact@uebi.store";

$cuerpoemail = "Ha recibido una consulta de ".$nya."\r\n"."Email: ".$email."\r\n"."Telefono de contacto: ".$phone."\r\n"."Mensaje: ".$mensaje;
$cuerpoenvio = "Se ha enviado su consulta a Uebi "."\r\n"."Teléfono: ".$phone."\r\n"."Mensaje: ".$mensaje."\r\n"."Le responderemos a la brevedad"."\r\n"."Por favor, no responda este mensaje";
$respuesta ="From: $nya <$email>";
$respuestaenvio ="From: Uebi <contact@uebi.store>";

mail ($mimail, "Ha recido una nueva consulta", $cuerpoemail, $respuesta);
mail ($email, "Recibimos tu consulta - Uebi", $cuerpoenvio, $respuestaenvio);
?>

    <!-- Inicio Navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="./images/logo.png" alt="Uebi">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="bi bi-list"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Servicios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="servicios.html#site">Uebi Site</a></li>
                            <li><a class="dropdown-item" href="servicios.html#ecommerce">Uebi eCommerce</a></li>
                            <li><a class="dropdown-item" href="servicios.html#manager">Uebi Manager</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="precios.html">Precios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contáctanos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-primary" target="_new" href="https://wa.me/5491173601015">Chateá con
                            nosotros</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Inicio Main -->


    <main>
        <div class="success container-fluid content">

            <img src="./images/flame-1237.png" alt="imagen mensaje envíado">
            <h1>Mensaje envíado correctamente</h1>
            <p>¡A la brevedad nos comunicaremos con vos!</p>
          
        </div>
    </main>

    <!-- Inicio Footer -->

    <footer>
        <div class="container">
            <div class="brand">
                <img src="images/logo.png" alt="Uebi">
            </div>

            <div class="info">
                <div class="divisiones">
                    <ul>
                        <li><a href="servicios.html" class="links"><span class="titulo">Servicios</span></a></li>
                        <li><a href="servicios.html" class="links">Uebi Site</a></li>
                        <li><a href="servicios.html" class="links">Uebi eCommerce</a></li>
                        <li><a href="servicios.html" class="links">Uebi Manager</a></li>
                    </ul>
                </div>

                <div class="divisiones">
                    <ul>
                        <li><a href="#" class="links"><span class="titulo">Ipsum pellentes.</span></a></li>
                        <li><a href="#" class="links">NLorem</a></li>
                        <li><a href="#" class="links">UDolor Sit</a></li>
                    </ul>
                </div>

                <div class="divisiones">
                    <ul>
                        <li><a href="#" class="links"><span class="titulo">Adipiscing</span></a></li>
                    </ul>
                </div>

            </div>

            <p>© Copyright 2021 Uebi. Todos los derechos reservados</p>

        </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
</body>

</html>