<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "auth.php";
require "conexion.php";
$resultado = $conexion->query('SELECT * FROM productos');

$res = $_GET["res"] ?? "";
$gua = $_GET["gua"] ?? "";
$err = $_GET["err"] ?? "";
$regi = $_GET["regi"] ?? "";
$ini = $_GET["inicio"] ?? "";

?>
<?php require "encabezado.php"; ?>

    <h1>Clase 15 - CRUD con PHP</h1>
    <h2 class="palabrafachera">Lista de productos</h2>

    <main>
    <section class="productos">
    <?php foreach ($resultado as $producto): ?>
        <article class="producto">
            <h3><?= $producto['nombre']; ?></h3>
            <p>Stock disponible: <?= $producto['stock']; ?></p>
            <p>$<?= $producto['precio']; ?></p>
            <a class="link1" href="editar.php?id=<?= $producto['id']; ?>">Editar</a>
            <a class="link" href="eliminar.php?id=<?= $producto['id']; ?>">Eliminar</a>
        </article>
    <?php endforeach; ?>
    </section>
</main>

<?php require "pie.php"; ?>
