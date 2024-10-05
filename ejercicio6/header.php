
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  </head>
  <style>
    html, body {
    height: 100%;
    display: flex;
    flex-direction: column;
    }

    body {
        margin: 0;
    }

    .container {
        flex: 1;
    }
  </style>
  <body>
    

  <header  style="background: linear-gradient(90deg, #aa3d5f, #49bfdf, #bf4def);" class="text-white text-center py-4">
        <h1>Honorable Alcaldía Municipal de La Paz (HAM-LP)</h1>
        <p>Información General y Tipos de Trámites</p>
    </header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: black;">
        <div class="container-fluid">
          <!--<a class="navbar-brand" href="#">Navbar</a>-->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
              <a class="nav-link active" aria-current="page" href="index.php">INICIO</a>
             
              
              
              <a class="nav-link" href="contacto.php">CONTACTOS</a>
              <a class="nav-link" href="acerca.php">ACERCA DE</a>
              <!--<a class="nav-link" href="login.php">TIPOS DE TRAMITE</a>-->
              <?php
              if (isset($_SESSION["rol"])) {
                  echo '<a class="nav-link" href="datos.php">CRUD DATOS</a>';
              }
              ?>
              <?php
                if (isset($_SESSION["rol"])) {
                    echo '
                        <form action="logout.php" method="POST" style="display: inline;">
                            <button type="submit" class=" nav-link">CERRAR SESION</button>
                        </form>';
                } else {
                    echo '<a class="nav-link" href="login.php">INICIAR SESION</a>';
                }
                ?>

              
              

            </div>
          </div>
        </div>
      </nav>