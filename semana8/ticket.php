<?php
$medidaTicket = 1300;
?>
<!DOCTYPE html>
<html>
<head>
<style>
* {
font-size: 30px;
font-family: 'DejaVu Sans', serif;
  }
h1 {
font-size: 40px;
}
.ticket {
margin: 10px;
}
  td,
  th,
  tr,
  table {
  border-top: 4px solid black;
  border-collapse: collapse;
  margin: 0 auto;
    }
td.precio {
text-align: right;
font-size: 15px;
}
td.cantidad {
font-size: 11px;
}
td.producto {
text-align: center;
}
th {
text-align: center;
}
.centrado {
text-align: center;
align-content: center;
}
.ticket {
width: <?php echo $medidaTicket ?>px;
max-width: <?php echo $medidaTicket ?>px;
}
img {
max-width: inherit;
width: inherit;
}
* {
margin: 0;
padding: 0;
}
.ticket {
margin: 0;
padding: 0;
}
body {
text-align: center;
}
</style>
</head>
<body>
    <div class="ticket centrado">
        <h1>Tienda de Agustin</h1>
        <?php
        echo "Hora: " . date("h:i:sa"). "<br>";
        echo "Fecha: " . date("Y/m/d") . "<br>";
        ?>
        <?php
        $productos= [
            [
                "cantidad" => 1,
                "descripcion" => "Enchufe Universal",
                "precio" => 310,
            ],
            [
                "cantidad" => 1,
                "descripcion" => "Monitor",
                "precio" => 3000,
            ],
            [
                "cantidad" => 1,
                "descripcion" => "Foco RGB",
                "precio" => 230,
            ],
            [
                "cantidad" => 1,
                "descripcion" => "Cable USB",
                "precio" => 50,
            ],
            [
                "cantidad" => 1,
                "descripcion" => "Audifonos",
                "precio" => 50,
            ],
        ];

        ?>

        <table>
            <thead>
                <tr class="centrado">
                    <th class="cantidad">CANTIDAD</th>
                    <th class="producto">PRODUCTO</th>
                    <th class="precio">TOTAL</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                foreach ($productos as $producto) {
                    $total += $producto["cantidad"] * $producto["precio"];
                ?>
                    <tr>
                        <td class="cantidad"><?php echo number_format($producto["cantidad"], 2) ?></td>
                        <td class="producto"><?php echo $producto["descripcion"] ?></td>
                        <td class="precio">$<?php echo number_format($producto["precio"], 2) ?></td>
                    </tr>
                <?php } ?>
            </tbody>
            <tr>
                <td class="cantidad"></td>
                <td class="producto">
                    <strong>TOTAL</strong>
                </td>
                <td class="precio">
                    $<?php echo number_format($total, 2) ?>
                </td>
            </tr>
        </table>
        <p class="centrado">¡GRACIAS POR SU COMPRA!
    </div>
</body>

</html>