<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // Conectar a la base de datos
    $chedrauiDB = new mysqli('localhost', 'tavobeto', 'N1nt3nd0123.,@', 'chedraui');

    // Obtener los registros de la tabla `productos`
    $productos = $chedrauiDB->query('SELECT * FROM producto');

    // Imprimir la tabla
    echo '<table border="2px outset">
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
    </tr>';

    foreach ($productos as $producto) {
    echo '<tr>
        <td>' . $producto['Nombre'] . '</td>
        <td>' . $producto['Precio'] . '</td>
    </tr>';
    }

    echo '</table>';

    // Cerrar la conexión a la base de datos
    $chedrauiDB->close();

    ?>

</body>
</html>