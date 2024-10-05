<?php
// Iniciar sesión
session_start();

// Verificar si existe la variable de sesión 'rol'
//if (isset($_SESSION["rol"])) {
    // Mostrar el rol del usuario
    //echo "Holaa " . $_SESSION["rol"];
    
    // Verificar si el rol es igual a -1 (para redirigir a login)
//    if ($_SESSION["rol"] == -1) {
//        header("Location: login.php");
//        exit();
//    }
//} else {
    // Si no está logueado o no tiene un rol, redirigir a login
//    header("Location: login.php");
//    exit();
//}
?>
<?php require_once('header.php'); ?>

<!--Carrusel-->
<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="Assets/images/imagen01.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="Assets/images/imagen02.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="Assets/images/imagen03.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Sección de información general -->
<section class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-left" style="color: #DC143C;">INFORMACION</h2>
            <p class="text-justify">
                La Honorable Alcaldía Municipal de La Paz (HAM-LP) es responsable de gestionar y administrar los servicios públicos, la planificación urbana, y promover el desarrollo sostenible de la ciudad de La Paz. A través de distintas áreas y departamentos, la alcaldía ofrece una amplia variedad de servicios y programas para el beneficio de la ciudadanía.
            </p>
            <p class="text-justify">
                Entre sus principales responsabilidades se encuentran la recolección de impuestos, la gestión del catastro, el mantenimiento de infraestructuras urbanas, y la implementación de políticas ambientales. Además, la HAM-LP tiene el objetivo de fomentar la participación ciudadana y promover el bienestar social de los habitantes de La Paz.
            </p>
            <center>
                <img src="Assets/images/imagen06.jpg" class="img-fluid" alt="...">
            </center>
            <h2 class="text-left" style="color: #DC143C;">NUESTRAS AREAS DE TRABAJO</h2>
            <ol>
                <li>
                    Servicios Públicos: La HAMLP está comprometida con la prestación de servicios públicos de calidad que mejoran el día a día de todos los ciudadanos. Desde la recolección de residuos hasta el mantenimiento de espacios públicos, nuestra labor se enfoca en garantizar un entorno urbano limpio, seguro y accesible.
                </li>
                <li>
                    Infraestructura y Desarrollo Urbano: Uno de los pilares de nuestra gestión es el desarrollo de infraestructura moderna que permita a La Paz crecer de manera ordenada. Proyectos de vialidad, parques, áreas verdes y espacios culturales forman parte de nuestra agenda para consolidar a La Paz como una ciudad de futuro, respetuosa con su entorno y con visión de largo plazo.
                </li>
                <li>
                    Participación Ciudadana: La Alcaldía de La Paz promueve la participación activa de sus ciudadanos en las decisiones importantes que afectan su vida cotidiana. A través de programas y plataformas digitales, como el registro de IGOB ciudadano, los habitantes pueden interactuar directamente con la gestión municipal, asegurando que sus voces sean escuchadas.
                </li>
            </ol>

            
        </div>
    </div>
</section>

<!-- Sección de tipos de trámites -->
<section class="container mt-5">
    <h2 id="mi-seccion" class="text-left" style="color: #DC143C;">TIPOS DE TRAMITE</h2>
    <div class="row mt-4">
        <!-- Trámite 1 -->
        <div class="col-md-4">
            <div class="card">
                <img src="Assets/images/imagen07.jpg" class="card-img-top" alt="Trámite 1">
                <div class="card-body">
                    <h5 class="card-title">Trámite de Licencias de Funcionamiento</h5>
                    <p class="card-text">
                        Solicitud y renovación de licencias para el funcionamiento de negocios y establecimientos comerciales en el municipio de La Paz.
                    </p>
                    <a href="#" class="btn btn-primary">Más información</a>
                </div>
            </div>
        </div>

        <!-- Trámite 2 -->
        <div class="col-md-4">
            <div class="card">
                <img src="Assets/images/imagen08.jpg" class="card-img-top" alt="Trámite 2">
                <div class="card-body">
                    <h5 class="card-title">Trámite de Permisos de Construcción</h5>
                    <p class="card-text">
                        Gestión de permisos para la construcción, ampliación o modificación de edificaciones en el territorio de La Paz.
                    </p>
                    <a href="#" class="btn btn-primary">Más información</a>
                </div>
            </div>
        </div>

        <!-- Trámite 3 -->
        <div class="col-md-4">
            <div class="card">
                <img src="Assets/images/imagen09.jpg" class="card-img-top" alt="Trámite 3">
                <div class="card-body">
                    <h5 class="card-title">Trámite de Catastro y Propiedades</h5>
                    <p class="card-text">
                        Actualización y consulta de información sobre propiedades y terrenos registrados en el catastro municipal.
                    </p>
                    <a href="#" class="btn btn-primary">Más información</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once('footer.php'); ?>