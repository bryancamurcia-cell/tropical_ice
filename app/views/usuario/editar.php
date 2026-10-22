<h1>Actaulizando datos</h1>
<form action="/usuario/Editar" method="POST">
    <input type="hidden" name="idusuario" value="<?= $usuario['idusuario'] ?>">
    <label for="nombreusuario">Nombre:</label>
    <input type="text" name="nombreusuario" value="<?= $usuario['nombreusuario']?>" required><br><br>

    <label for="usuario">Usuario:</label>
    <input type="text" name="usuario" value="<?= $usuario['usuario'] ?>" required><br><br>

    <label for="password">contraseña:</label>
    <input type="text" name="password" value="<?= $usuario['password'] ?>" required><br><br>

     <label for="direccion">direccion:</label>
    <input type="text" name="direccion" value="<?= $usuario['direccion'] ?>" required><br><br>

      <label for="idrol">idrol:</label>
    <input type="text" name="idrol" value="<?= $usuario['idrol'] ?>" required><br><br>


    <input type="submit" value="Actualizar">

    





    