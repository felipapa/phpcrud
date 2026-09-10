<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require "conexion.php";

$id = $_GET["id"];


$consulta = $conexion->prepare("DELETE FROM productos WHERE id = :id");
$consulta->execute([
    ':id' => $id
    
]);

$producto = $consulta->fetch();

header("Location: index.php?eli=ok");

?>


