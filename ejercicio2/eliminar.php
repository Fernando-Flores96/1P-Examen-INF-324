<?php 
include "conexion.inc.php";
$ci = $_GET["ci"];
$sql2="DELETE FROM catastro WHERE ci=$ci";
$sql="DELETE FROM persona WHERE ci=$ci";
mysqli_query($con, $sql2);
mysqli_query($con, $sql);
header("Location: datos.php")
?>