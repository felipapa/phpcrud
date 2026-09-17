<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "auth.php";
require "conexion.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: iniciar.php");
    exit();
}

$userinput = $_POST['username'] ?? '';
$contrasena = $_POST['contrasena'] ?? '';

if (empty($userinput) || empty($contrasena)) {
    die("Completá todos los campos");
}

$traer = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = ?');
$traer->execute([$userinput]);
$usuarioencontrado = $traer->fetch();

if ($usuarioencontrado && password_verify($contrasena, $usuarioencontrado['contrasena'])) {
    
    $_SESSION['id']      = $usuarioencontrado['id_usuario'];
    $_SESSION['usuario'] = $usuarioencontrado['usuario'];
    $_SESSION['rol']     = $usuarioencontrado['rol']; 

    header("Location: index.php?inicio=ok");
    exit();
} else {
    header("Location: iniciar.php?error=login");
    exit();
}
?>
