<?php
require "auth.php";
es_admin();

?>
<?php require "encabezado.php"; ?>

<section>
    <h2>Agregar producto</h2>
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

<?php require "pie.php"; ?>
