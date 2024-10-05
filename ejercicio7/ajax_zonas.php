<?php
if (isset($_POST['distrito_nombre'])) {
    include "conexion.inc.php";

    // Consultar zonas por el nombre del distrito
    $sql = "SELECT nombre FROM zonas WHERE distrito_id IN 
            (SELECT id FROM distritos WHERE nombre = '" . $_POST['distrito_nombre'] . "')";
    $resultado = mysqli_query($con, $sql);

    // Generar las opciones del select con los nombres de las zonas
    $html = '<option value="">Seleccione una zona</option>';
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $html .= '<option value="' . $fila['nombre'] . '">' . $fila['nombre'] . '</option>';
    }

    echo $html;
}
?>