<h1>Actualizando datos</h1>
<form action="/producto/actualizar" method="POST">
    <input type="hidden" name="id" value="<?= (int) $producto['id'] ?>">

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="<?= htmlspecialchars($producto['nombre']) ?>" required><br><br>

    <label for="precio">Precio:</label>
    <input type="number" id="precio" name="precio" step="0.01" min="0" value="<?= htmlspecialchars($producto['precio']) ?>" required><br><br>

    <label for="stock">Stock:</label>
    <input type="number" id="stock" name="stock" min="0" value="<?= htmlspecialchars($producto['stock']) ?>" required><br><br>

    <input type="submit" value="Actualizar">
</form>