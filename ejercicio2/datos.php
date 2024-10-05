<?php
// Iniciar sesión
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['rol']) || $_SESSION['rol'] == -1) {
    header("Location: login.php");
    exit();
}

include "conexion.inc.php";

// Consulta SQL para obtener personas y propiedades
$sql = "SELECT p.ci, p.nombre, p.paterno, c.codigo,c.zona, c.xini, c.yini, c.xfin, c.yfin, c.superficie, c.distrito 
        FROM Persona p 
        LEFT JOIN Catastro c ON p.ci = c.ci";
$resultado = mysqli_query($con, $sql);
?>

<?php require_once('header.php'); ?>

    <div class="container my-5">
        <h2>Lista de Personas y Propiedades</h2>
        <table class="table table-striped table-hover table-responsive">
            <thead class="table-dark">
            <tr>
                <th scope="col">CI</th>
                <th scope="col">Nombre</th>
                <th scope="col">Paterno</th>
                <th scope="col">Codigo</th>
                <th scope="col">Zona</th>
                <th scope="col">Xini</th>
                <th scope="col">Yini</th>
                <th scope="col">Xfin</th>
                <th scope="col">Yfin</th>
                <th scope="col">Superficie</th>
                <th scope="col">Distrito</th>
                <th scope="col">Operaciones</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            <?php
            while($fila=mysqli_fetch_array($resultado)) {
                echo "<tr>";
                echo "<td scope='row'>$fila[ci]</td>";
                echo "<td scope='row'>$fila[nombre]</td>";
                echo "<td scope='row'>$fila[paterno]</td>";
                echo "<td scope='row'>$fila[codigo]</td>";
                echo "<td scope='row'>$fila[zona]</td>";
                echo "<td scope='row'>$fila[xini]</td>";
                echo "<td scope='row'>$fila[yini]</td>";
                echo "<td scope='row'>$fila[xfin]</td>";
                echo "<td scope='row'>$fila[yfin]</td>";
                echo "<td scope='row'>$fila[superficie]</td>";
                echo "<td scope='row'>$fila[distrito]</td>";
                echo "<td scope='row'>";
                echo "<a class='btn btn-secondary' href='editar.php?ci=$fila[ci]'>Editar</a> ";
                echo "<a class='btn btn-danger' href='eliminar.php?ci=$fila[ci]'>Eliminar</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
        <a class="btn btn-primary" href='nuevo.php'>Nuevo</a>
        <a class="btn btn-primary" href='catastro.php'>Agregar Catastro</a>
    </div>

<?php require_once('footer.php'); ?>