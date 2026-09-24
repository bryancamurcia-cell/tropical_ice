<h1>listado de productos</h1>

<table border "1">
    <thead>
        <tr>
            <th>nombre</th>
            <th>precio</th>
            <th>stock</th>
        </tr>
    </thead>
    <tbody>             
      <?php foreach ($productos as $producto): ?>     
    <tr>
        <td><?= ($producto['nombre']) ?></td>
        <td><?= ($producto['precio']) ?></td>
        <td><?= ($producto['stock']) ?></td>
    </tr>
<?php endforeach; ?>
    </tbody>
</table>
