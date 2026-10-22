<h1>Actaulizando datos</h1>
<form action="/productos/Editar" method="POST">
    <input type="hidden" name="id" value="<?= $producto['id'] ?>">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="<?= ($producto['nombre']) ?>" required><br><br>

    <label for="precio">Precio:</label>
    <input type="number" name="precio" value="<?= ($producto['precio']) ?>" required><br><br>

    <label for="stock">Stock:</label>
    <input type="number" name="stock" value="<?= ($producto['stock']) ?>" required><br><br>

    <input type="submit" value="Actualizar">

    