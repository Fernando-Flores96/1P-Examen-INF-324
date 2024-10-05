<?php  
include "conexion.inc.php";

// Verificar si se recibe un ID por GET
if (isset($_GET["ci"])) {
    $ci = $_GET["ci"];
    
    // Recuperar datos de la persona
    $sql = "SELECT * FROM Persona WHERE ci = '$ci'";
    $resultado = mysqli_query($con, $sql);
    $fila = mysqli_fetch_array($resultado);

    // Recuperar datos del catastro
    $sqlCatastro = "SELECT * FROM Catastro WHERE ci = '$ci'";
    $resultadoCatastro = mysqli_query($con, $sqlCatastro);
    $filaCatastro = mysqli_fetch_array($resultadoCatastro);

    // Verificar que existan los datos
    if (!$fila || !$filaCatastro) {
        echo "Datos no encontrados.";
        exit();
    }
    
    // Obtener los datos necesarios
    $ci = $fila["ci"];
    $nombre = $fila["nombre"];
    $paterno = $fila["paterno"];

    $codigo = $filaCatastro["codigo"];
    $zona = $filaCatastro["zona"];
    $superficie = $filaCatastro["superficie"];
    $xini = $filaCatastro["xini"];
    $yini = $filaCatastro["yini"];
    $xfin = $filaCatastro["xfin"];
    $yfin = $filaCatastro["yfin"];
    $distrito = $filaCatastro["distrito"];
} else {
    // Redirigir si no se recibe el ID
    header("Location: index.php");
    exit();
}
?>
<?php
require_once('header.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Persona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <h2 class="mb-4">Editar Datos Personales</h2>
        <form class="row g-3" action="guardaeditar.php" method="POST">
            <input type="hidden" name="ci" value="<?php echo htmlspecialchars($ci); ?>">
            
            <div class="col-md-6">
                <label for="nombre" class="form-label">Carnet de Identidad:</label> 
                <input type="text" class="form-control" id="ci" name="ci" value="<?php echo $ci; ?>"  readonly required>
            </div>
            <h1></h2>
            <div class="col-md-6">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre; ?>" required>
            </div>
            <div class="col-md-6">
                <label for="paterno" class="form-label">Apellido Paterno:</label>
                <input type="text" class="form-control" id="paterno" name="paterno" value="<?php echo $paterno; ?>" required>
            </div>
            <h2 class="mb-4">Editar Datos de Propiedad</h2>
            <div class="col-md-6">
                <label for="codigo" class="form-label">Codigo</label>
                <input type="text" class="form-control" id="codigo" name="codigo" value="<?php echo $codigo; ?>" readonly require>
            </div>
            <div class="col-md-6">
                <label for="zona" class="form-label">Zona</label>
                <input type="text" class="form-control" id="zona" name="zona" value="<?php echo $zona; ?>" required>
            </div>
            <div class="col-md-6">
                <label for="superficie" class="form-label">Superficie</label>
                <input type="number" class="form-control" id="superficie" name="superficie" value="<?php echo $superficie; ?>" required>
            </div>
            <div class="col-md-6">
                <label for="xini" class="form-label">X Inicio</label>
                <input type="text" class="form-control" id="xini" name="xini" value="<?php echo $xini; ?>" required>
            </div>
            <div class="col-md-6">
                <label for="yini" class="form-label">Y Inicio</label>
                <input type="text" class="form-control" id="yini" name="yini" value="<?php echo $yini; ?>" required>
            </div>
            <div class="col-md-6">
                <label for="xfin" class="form-label">X Fin</label>
                <input type="text" class="form-control" id="xfin" name="xfin" value="<?php echo $xfin; ?>" required>
            </div>
            <div class="col-md-6">
                <label for="yfin" class="form-label">Y Fin</label>
                <input type="text" class="form-control" id="yfin" name="yfin" value="<?php echo $yfin; ?>" required>
            </div>
            <div class="col-md-6">
                <label for="distrito" class="form-label">Distrito</label>
                <input type="text" class="form-control" id="distrito" name="distrito" value="<?php echo $distrito; ?>" required>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="datos.php" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<?php
require_once('footer.php');
?>
