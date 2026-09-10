<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require "conexion.php";
$resultado = $conexion->query('SELECT * FROM productos');

$res = $_GET["res"] ?? "";
$eli = $_GET["eli"] ?? "";
$gua = $_GET["gua"] ?? "";
$err = $_GET["err"] ?? "";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <h1 class="palabrafachera2" >Clase 15 - CRUD con PHP</h1>
    <h2 class="palabrafachera3" >Lista de productos</h2>

    <?php if($res == "ok"): ?>
        <p class="res">El producto se actualizó correctamente</p>
    <?php endif; ?>
    <?php if($eli == "ok"): ?>
        <p class="res">El producto se elimino correctamente</p>
    <?php endif; ?>
    <?php if($gua == "ok"): ?>
        <p class="res">El producto se agrego correctamente</p>
    <?php endif; ?>
    <?php if($err == "ok"): ?>
        <p class="res">ERROR</p>
    <?php endif; ?>
    <main>
    <section class="productos">
    <?php foreach ($resultado as $producto): ?>
        <article class="producto">
            <h3 class="palabrafacheratitular" ><?= $producto['nombre']; ?></h3>
            <p class="palabrafachera">Stock disponible: <?= $producto['stock']; ?></p>
            <p class="palabrafachera">$<?= $producto['precio']; ?></p>
            <a class="link1" href="editar.php?id=<?= $producto['id']; ?>">Editar</a>
            <a class="link" href="eliminar.php?id=<?= $producto['id']; ?>">eliminar</a>

        </article>
    <?php endforeach; ?>
    </section>
    <section>
        <h2 class="palabrafachera3">Agregar producto</h2>
        <form class="form" action="guardar.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required>
            <label for="stock">Stock</label>
            <input type="number" name="stock" id="stock" required>
            <label for="precio">Precio</label>
            <input type="number" name="precio" id="precio" step="0.01" required>
            <button class="btn-submit" type="submit">Agregar</button>
        </form>
    </section>
</main>
</body>
</html>