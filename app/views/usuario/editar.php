<h1>Actualizando datos</h1>
<form action="/usuario/actualizar" method="POST">
    <input type="hidden" name="idusuario" value="<?= (int) $usuario['idusuario'] ?>">

    <label for="nombreusuario">Nombre:</label>
    <input type="text" id="nombreusuario" name="nombreusuario" value="<?= htmlspecialchars($usuario['nombreusuario']) ?>" required><br><br>

    <label for="usuario">Usuario:</label>
    <input type="text" id="usuario" name="usuario" value="<?= htmlspecialchars($usuario['usuario']) ?>" required><br><br>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" value="<?= htmlspecialchars($usuario['password']) ?>" required><br><br>

    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion" value="<?= htmlspecialchars($usuario['direccion']) ?>" required><br><br>

    <label for="idrol">ID rol:</label>
    <input type="number" id="idrol" name="idrol" value="<?= (int) $usuario['idrol'] ?>" required><br><br>

    <input type="submit" value="Actualizar">
</form>





    