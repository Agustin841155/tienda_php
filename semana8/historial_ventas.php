<?php
    $db = new SQLite3("../sql/tienda.db");

    $resultado = $db->query("SELECT * from tickets;");

    $table = "
        <table class='table' border=1>
            <thead>
            <tr>
                <th>Fecha</th>
                <th>Hora venta</th>
                <th>Cantidad producto</th>
                <th>Producto</th>
                <th>Total producto</th>
            </tr>
            </thead>
            ";

    print($table);

    while ($row = $resultado->fetchArray()) {

        $fecha = $row['fecha'];
        $hora_venta = $row['hora_venta'];
        $cantidad_producto = $row['cantidad_producto'];
        $producto = $row['producto'];
        $total_producto = $row['total_producto'];

        $table = "
            <tr>
                <td>$fecha</td>
                <td>$hora_venta</td>
                <td>$cantidad_producto</td>
                <td>$producto</td>
                <td>$total_producto</td>
            </tr>
        ";

        print($table);
    }
 
    print("</table>");
?>