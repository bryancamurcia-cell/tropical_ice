<h1>listado de ventas</h1>

<table border "1">
    <thead>
        <tr>
            <th>idventa</th>
            <th>fecha_venta</th>
            <th>idusuario</th>
        </tr>
    </thead>
    <tbody>             
      <?php foreach ($ventas as $venta): ?>     
    <tr>
        <td><?= ($venta['idventa']) ?></td>
        <td><?= ($venta['fecha_venta']) ?></td>
        <td><?= ($venta['idusuario']) ?></td>
    </tr>
<?php endforeach; ?>
    </tbody>
</table>
