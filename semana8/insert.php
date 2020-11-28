<?php
    $cantidad = $_GET['cantidad'];
    $producto = $_GET['producto'];
    $total_compras = $_GET['totalCompras'];

    $db = new SQLite3('../sql/tienda.db');

    $db->exec("INSERT INTO tickets (cantidad,producto,total compas) VALUES ('$cantidad', '$producto', '$total_compras');");
    
    header("Location: ../index.php");

?>