<!DOCTYPE html >
<html lang="es-mx">
<head><h1>Carrito de Compras</h1></head>
<!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<title>javascript Tienda</title>
<script src="carrito.js" language="javascript" type="text/javascript">
</script>
<style type="text/css">
    p { color: blue; }
    form {
      margin: 0 auto;
      width: 400px;
      padding: 1em;
      border: 1px solid #CCC;
      border-radius: 1em;
      }
    </style>
<body> 
    <form action="ticket.php" method="POST">
	 <form id="formulario" class="formulario">
		<p><label>Cantidad:   <input type="number" min="0" max="10" name="cantidad" id="cantidad"> </label></p>
		<p></br><label>Producto: </label>
		<select id="productos">
			<option></option>
			  <option id="Teclado USB" value="100">Teclado - $100</option> 
          <option id="Audifonos" value="50">Audifonos - $50</option>
          <option id="Mouse" value="150">Mouse - $150</option>
          <option id="Cable USB" value="50">Cable USB - $50</option>
          <option id="Foco RGB" value="230">Foco RGB - $230</option>
          <option id="Lampara USB" value="70">Lampara USB - $70</option>
          <option id="Monitor" value="3000">Monitor - $3,000</option>
          <option id="Enchufe Universal" value="310">Enchufe Universal - $310</option>
			</select>
		<input type="button" name="insertar" value="Insertar" onclick="insertaDatos(this)"</p>
		<p><label>carrito de compras: </br></label>
		<textarea id="carritocompra" name="productos"readonly=""></textarea>
		<p><label></br>total a pagar:
		<input type="number" name="totalapagar"id="totalCompras" readonly=""></label></p>
		<input type="button" id="botonNuevo" value="Nueva Compra" onclick="location.reload()">
    
    <input type="submit" id="cobrar" name="cobrar" value="cobrar" </p>
		</form>
</body>

</html>
