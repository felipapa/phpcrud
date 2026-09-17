<?php
require "auth.php";

?>
<?php require "encabezado.php"; ?>

<section>
    <h2 class="palabrafachera3">Registrarse</h2>
    <form class="form" action="registraruser.php" method="POST">
        <label for="username">Nombre</label>
        <input type="text" name="username" id="nombre1">

        <label for="contrasena">Contraseña</label>
        <input type="password" name="contrasena" id="contrasena1">

        <label for="rol">Rol</label>
        <input type="text" name="rol" id="rol">

        <button class="btn-submit" type="submit">Agregar</button>
    </form>
</section>

<?php require "pie.php"; ?>
