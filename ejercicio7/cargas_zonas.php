<?php
// Conectar a la base de datos
$conn = new mysqli('localhost', 'root', '', 'bdcarlos');
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el distrito desde la solicitud
$distrito = $_GET['distrito'];

// Consultar zonas según el distrito
$sql = "SELECT zona FROM catastro WHERE distrito = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $distrito);
$stmt->execute();
$result = $stmt->get_result();

// Crear opciones para el combo de zonas
$options = "<option value=''>Seleccione una zona</option>";
while ($row = $result->fetch_assoc()) {
    $options .= "<option value='{$row['zona']}'>{$row['zona']}</option>";
}

// Devolver las opciones
echo $options;

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
