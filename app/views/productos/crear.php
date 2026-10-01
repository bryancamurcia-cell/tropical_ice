<form action="/productos" method="POST">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" required><br>

    <label for="precio">Precio</label>
    <input type="number" name="precio" id="precio" step="0.01" min="0" required><br>

    <label for="stock">Stock</label>
    <input type="number" name="stock" id="stock" min="0" required><br>

    <button type="submit">Guardar</button>
</form>

