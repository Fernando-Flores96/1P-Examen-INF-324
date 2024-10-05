<?php
include "conexion.inc.php";

// Verificar si se recibió el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario y sanitizarlos
    //$id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];

    $ci = $_POST['ci'];
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $codigo = $_POST['codigo'];
    $zona = $_POST['zona'];
    $superficie = $_POST['superficie'];
    $xini = $_POST['xini'];
    $yini = $_POST['yini'];
    $xfin = $_POST['xfin'];
    $yfin = $_POST['yfin'];
    $distrito = $_POST['distrito'];

    // Preparar la consulta 

    $sql="UPDATE Persona 
          SET nombre='$nombre',paterno='$paterno' 
          WHERE ci=$ci";

    $sql2="UPDATE Catastro
           SET zona='$zona', superficie='$superficie', xini='$xini', yini='$yini', xfin='$xfin', yfin='$yfin', distrito='$distrito'
           WHERE codigo=$codigo";

    mysqli_query($con, $sql);
    mysqli_query($con, $sql2);
    header("Location: datos.php");
} else {
    // Redirigir si no es una solicitud POST
    header("Location: index.php");
    exit();
}

?>