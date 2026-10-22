<h1>listado de productos</h1>

<table border="1">
    <thead>
        <tr>
            <th>nombre</th>
            <th>precio</th>
            <th>stock</th>
            <th>accion</th>
        </tr>
    </thead>
    <tbody>             
      <?php foreach ($productos as $producto): ?>     
    <tr>
        <td><?= ($producto['nombre']) ?></td>
        <td><?= ($producto['precio']) ?></td>
        <td><?= ($producto['stock']) ?></td>
        <td> <a href="/producto/editar?id=<?= $producto['id']; ?>">editar</a> </td> 
    </tr>
<?php endforeach; ?>
    </tbody>
</table>
