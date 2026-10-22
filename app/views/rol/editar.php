<h1>Actualizando datos</h1>
<form action="/rol/Editar" method="POST">
    <input type="hidden" name="idrol" value="<?= $rol['idrol'] ?>">
    <label for="nombrerol">Nombre:</label>
    <input type="text" name="nombrerol" value="<?= ($rol['nombrerol']) ?>" required><br><br>

    <input type="submit" value="Actualizar">

   