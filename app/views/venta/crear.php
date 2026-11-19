<h1>Crear venta</h1>
<form action="/venta" method="POST">
    <label for="fecha_venta">Fecha de venta:</label>
    <input type="date" name="fecha_venta" id="fecha_venta" required><br><br>

    <label for="idusuario">ID usuario:</label>
    <input type="number" name="idusuario" id="idusuario" required><br><br>

    <button type="submit">Guardar</button>
</form>