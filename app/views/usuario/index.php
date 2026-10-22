<h1>listado de usuarios</h1>

<table border "1">
    <thead>
        <tr>
            <th>idusuario</th>
            <th>nombreusuario</th>
            <th>Usuario</th>
            <th>password</th>
            <th>direccion</th>
            <th>idrol</th>
            <th>accion</th>
            

        </tr>
    </thead>
    <tbody>             
      <?php foreach ($usuarios as $usuario): ?>     
    <tr>
        <td><?= ($usuario['idusuario']) ?></td>
        <td><?= ($usuario['nombreusuario']) ?></td>
        <td><?= ($usuario['usuario']) ?></td>
        <td><?= ($usuario['password']) ?></td>
        <td><?= ($usuario['direccion']) ?></td>
        <td><?= ($usuario['idrol']) ?></td>
        <td> <a href="/usuario/editar?id=<?= $usuario['idusuario']; ?>">editar</a> </td> 
    </tr>
<?php endforeach; ?>
    </tbody>
</table>
