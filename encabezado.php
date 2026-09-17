<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD de Productos</title>
</head>
<body>

<div class="izquierda">
    <?php if(isset($_SESSION["usuario"])): ?>
        <p class="cajita2">ProductosCaros.Com</p>

        <a class="linea"></a>
        <p class="cajita">Hola, <?= $_SESSION["usuario"]; ?> (<?= $_SESSION["rol"]; ?>)</p>
        <?php if($_SESSION["rol"] == "admin"): ?>
            <a class="cajita" href="agregar.php">Agregar producto</a>
        <?php endif; ?>
        <a class="cajita" href="logout.php">Cerrar sesión</a>
        <a class="linea"></a>

        <?php if(($_GET["eli"] ?? "") == "ok"): ?>
            <p class="mensaje-lateral">El producto se eliminó correctamente</p>
        <?php endif; ?>
        <?php if(($_GET["res"] ?? "") == "ok"): ?>
            <p class="mensaje-lateral">Producto actualizado correctamente</p>
        <?php endif; ?>
        <?php if(($_GET["gua"] ?? "") == "ok"): ?>
            <p class="mensaje-lateral">Producto agregado correctamente</p>
        <?php endif; ?>
        <?php if(($_GET["regi"] ?? "") == "ok"): ?>
            <p class="mensaje-lateral">Registro correcto</p>
        <?php endif; ?>
        <?php if(($_GET["inicio"] ?? "") == "ok"): ?>
            <p class="mensaje-lateral">Inicio correcto</p>
        <?php endif; ?>
        <?php if(($_GET["err"] ?? "") == "ok"): ?>
            <p class="mensaje-lateral mensaje-error-lateral">No tenés permisos</p>
        <?php endif; ?>

    <?php else: ?>
        <p class="cajita2">ProductosCaros.Com</p>
        <a class="linea"></a>
        <a class="cajita" href="pantallalog.php">Registrarse</a>
        <a class="cajita" href="iniciar.php">Iniciar sesión</a>
        <a class="linea"></a>

    <?php endif; ?>
</div>

<div class="contenido">
