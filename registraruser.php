<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "auth.php";
require "conexion.php";

$user = $_POST['username'];
$contrasena = $_POST['contrasena'];
$rol = $_POST['rol'];

if (empty($user) || empty($contrasena)) {
    die("Todos los campos son obligatorios");
}

$hash = password_hash($contrasena, PASSWORD_DEFAULT);

$consulta = $conexion->prepare("INSERT INTO usuarios (usuario, contrasena, rol) VALUES (:user, :contrasena, :rol)");
$consulta->execute([
    ':user' => $user,
    ':contrasena' => $hash,
    ':rol' => $rol,
]);

header("Location: index.php?regi=ok");
exit();
?>
