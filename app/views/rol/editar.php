<h1>Actualizando datos</h1>
<form action="/rol/actualizar" method="POST">
    <input type="hidden" name="idrol" value="<?= (int) $rol['idrol'] ?>">

    <label for="nombrerol">Nombre:</label>
    <input type="text" id="nombrerol" name="nombrerol" value="<?= htmlspecialchars($rol['nombrerol']) ?>" required><br><br>

    <input type="submit" value="Actualizar">
</form>