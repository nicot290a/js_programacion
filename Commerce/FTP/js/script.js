function showCat(str) {

let dropdown = $('#categorias');
dropdown.empty();
dropdown.append('<option value ="0" selected="true">Todos</option>');
dropdown.prop('selectedIndex', 0);
const url = "php/Listar_Categorias.php?q="+str;
// Populate dropdown with list of provinces
$.getJSON(url, function (data) {
  $.each(data, function (key, entry) {
    dropdown.append($('<option></option>').attr('value', entry.Idcategoria).text(entry.Descripcion));
  })
});

var a= traerProductos(0);
} 



$("#categorias").on("change", traerProductos);
var productosdb = [];
var productoscarrito = [];



function traerProductos() {
$("#lista-productos").html("");

var dato = document.getElementById('categorias');
const url = "php/Listar_Productos.php?q="+dato.selectedIndex;



var e = document.getElementById("categorias");
var categoriabuscada = e.options[e.selectedIndex].value;


  $.ajax({
    url: "php/Listar_Productos.php?q="+dato.selectedIndex,
    success: function(respuesta) {
      var listProductos = $("#lista-productos");
      $.each(respuesta, function(index, elemento) {
	  productosdb[elemento.Idproducto] = [];
	  productosdb[elemento.Idproducto]["id"] = elemento.Idproducto;
	  productosdb[elemento.Idproducto]["nombre"] = elemento.Descripcion;
	  productosdb[elemento.Idproducto]["precio"] = elemento.Precio;
	// [elemento.nombre,elemento.precio];
        listProductos.append(
            '<div class="tablath"><td>'
          +     '<h2>' + elemento.Descripcion + '</h2> $' + elemento.Precio
		  + '<tr> <button class="btn-cart" onClick="AgregaraCarrito('+elemento.Idproducto+')">Comprar</button></tr>'
          + '</td></div>'
        );    
      });
    },
    error: function() {
      console.log("No se ha podido obtener la información");
    }
  });
}


function AgregaraCarrito(id) {
if(productoscarrito[id])
{
	productoscarrito[id]["cantidad"]++; //suma 1 a la cantidad
	productoscarrito[id]["nombre"] = productosdb[id]["nombre"]; 
	productoscarrito[id]["precio"] = productosdb[id]["precio"]; 
}
else
{
	productoscarrito[id] = [];
	productoscarrito[id]["cantidad"] = 1; //suma 1 a la cantidad
	productoscarrito[id]["id"] = productosdb[id]["id"]; //id
	productoscarrito[id]["nombre"] = productosdb[id]["nombre"]; //nombre
	productoscarrito[id]["precio"] = productosdb[id]["precio"]; 
	/*productoscarrito[id][0] = 1; //define cantidad
	productoscarrito[id][1] = productosdb[id][1]; //id
	productoscarrito[id][1] = productosdb[id][1]; //nombre	*/
}
ActualizaCarrito();
}

function EliminardeCarrito(id) {
	productoscarrito[id]["cantidad"]--; //suma 1 a la cantidad
	ActualizaCarrito();
}

function ActualizaCarrito()
{
$("#lista-carrito").html("");
var listaCarrito = $("#lista-carrito");
var PrecioTotalCarrito = 0;
      $.each(productoscarrito, function(index, elemento) {
	  if(elemento)
	  {
		if(elemento["cantidad"] > 0)
		{
			var precioproducto = elemento["cantidad"] * elemento["precio"];
			PrecioTotalCarrito = PrecioTotalCarrito + precioproducto;
			listaCarrito.append('<div class="registrocarrito">'+elemento["cantidad"]+' - '+elemento["nombre"]+' $'+precioproducto
			+ '<button class="btn-cart" onClick="EliminardeCarrito('+elemento["id"]+')">Eliminar</button></tr></div>'
			
			);
		}
	  }	
	  

      });
	  listaCarrito.append('<br/><div class="preciototal">TOTAL: $'+PrecioTotalCarrito+'</div>');
}

$("#finalizar-compra").on("click", FinalizarCompra);

function FinalizarCompra()
{
	var user = document.getElementById("usuario").value;	
	var password = document.getElementById("clave").value;	
	
	if(user != "" && clave != "")
	{
					  $.ajax({
						url: "php/ComprobacionLogin.php?usuario="+user+"&contrasena="+password,
						success: function(respuesta) {
							if(respuesta.estado === 1)
									{
										alert("OK");
									}
							else
									{
										alert("Error usuario y/o contraseña");
									}

						},
						error: function() {
						  console.log("No se ha podido obtener la información");
						}
					  });
	}
	else
	{
		alert("Debe ingresar usuario y contraseña");
	}
}