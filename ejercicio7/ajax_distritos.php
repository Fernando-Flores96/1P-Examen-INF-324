<?php
if (isset($_POST['id'])) {
    include "conexion.inc.php";
    
    // Consultar distritos por macrodistrito_id
    $sql = "SELECT nombre FROM distritos WHERE macrodistrito_id = " . $_POST['id'];
    $resultado = mysqli_query($con, $sql);

    // Generar las opciones del select con los nombres de los distritos
    $html = '<option value="">Seleccione un distrito</option>';
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $html .= '<option value="' . $fila['nombre'] . '">' . $fila['nombre'] . '</option>';
    }

    echo $html;
}
?>
