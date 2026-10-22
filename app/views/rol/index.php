<h1>listado de roles</h1>

<table border "1">
    <thead>
        <tr>
            <th>idrol</th>
            <th>nombre</th>
            <th>Accion</th>
            
        </tr>
    </thead>
    <tbody>             
      <?php foreach ($rols as $rol): ?>     
    <tr>
        <td><?= ($rol['idrol']) ?></td>
        <td><?= ($rol['nombrerol']) ?></td>
         <td> <a href="/rol/editar?id=<?= $rol['idrol']; ?>">editar</a> </td> 
    </tr>
<?php endforeach; ?>
    </tbody>
</table>
