<?php
include "conexion.inc.php";

// Verificar si se recibió el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario y sanitizarlos
    //$id = $_POST['id'];

    $ci = $_POST['ci'];
    $codigo = $_POST['codigo'];
    $zona = $_POST['zona'];
    $superficie = $_POST['superficie'];
    $xini = $_POST['xini'];
    $yini = $_POST['yini'];
    $xfin = $_POST['xfin'];
    $yfin = $_POST['yfin'];
    $distrito = $_POST['distrito'];

    $sql2 = "INSERT INTO Catastro (codigo, zona, superficie, xini, yini, xfin, yfin, distrito,ci) 
             VALUES ('$codigo', '$zona', '$superficie', '$xini', '$yini', '$xfin', '$yfin', '$distrito','$ci')";

    mysqli_query($con, $sql2);
    header("Location: datos.php");
} else {
    // Redirigir si no es una solicitud POST
    header("Location: index.php");
    exit();
}

?>