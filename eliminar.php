<?php

require "auth.php";
es_admin();

require "conexion.php";

$id = $_GET["id"];

$consulta = $conexion->prepare("DELETE FROM productos WHERE id = :id");
$consulta->execute([
    ':id' => $id
]);

header("Location: index.php?eli=ok");
exit();

?>
