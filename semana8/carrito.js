var total=0;
function insertaDatos(form) {
		
		var nomProd = document.getElementById('productos');
		var extraccion = nomProd.options[nomProd.selectedIndex].text;
		var extraccion2 = nomProd.options[nomProd.selectedIndex].value;
		var articulos=document.getElementById('cantidad').value;
		var conteo=parseFloat(articulos);
		var num=parseFloat(extraccion2);
		var totalCarro =conteo*num;
		total = total + totalCarro; 
		document.getElementById('carritocompra').value += "Cantidad:"+articulos+"\tProducto:"+extraccion+"\tTotal: "+ " $"+totalCarro + "\n";
		document.getElementById('totalCompras').value=total;

    }
     