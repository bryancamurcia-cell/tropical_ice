<h1>Crear usuario</h1>
<form action="/usuario" method="POST">
    <label for="nombreusuario">Nombre:</label>
    <input type="text" name="nombreusuario" id="nombreusuario" required><br><br>

    <label for="usuario">Usuario:</label>
    <input type="text" name="usuario" id="usuario" required><br><br>

    <label for="password">Contraseña:</label>
    <input type="password" name="password" id="password" required><br><br>

    <label for="direccion">Dirección:</label>
    <input type="text" name="direccion" id="direccion" required><br><br>

    <label for="idrol">ID rol:</label>
    <input type="number" name="idrol" id="idrol" required><br><br>

    <button type="submit">Guardar</button>
</form>