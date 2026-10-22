<h1>Actaulizando datos</h1>
<form action="/venta/actualizar" method="POST">
    <input type="hidden" name="idventa" value="<?= $venta['idventa'] ?>">
    <label for="fecha_venta">Fecha de Venta:</label>
    <input type="date" name="fecha_venta" value="<?= $venta['fecha_venta'] ?>" required><br><br>

    <label for="idusuario">ID Usuario:</label>
    <input type="text" name="idusuario" value="<?= $venta['idusuario'] ?>" required><br><br>


    <input type="submit" value="Actualizar">
