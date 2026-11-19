<h1>Actualizando datos</h1>
<form action="/venta/actualizar" method="POST">
    <input type="hidden" name="idventa" value="<?= (int) $venta['idventa'] ?>">

    <label for="fecha_venta">Fecha de venta:</label>
    <input type="date" id="fecha_venta" name="fecha_venta" value="<?= htmlspecialchars(substr($venta['fecha_venta'], 0, 10)) ?>" required><br><br>

    <label for="idusuario">ID usuario:</label>
    <input type="number" id="idusuario" name="idusuario" value="<?= (int) $venta['idusuario'] ?>" required><br><br>

    <input type="submit" value="Actualizar">
</form>