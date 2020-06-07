var btn = document.querySelector("#acceder")

function cargarPedido()
{
    document.write('Login exitoso!<br><br> En la Fecha: ');
    document.write(Date());
    document.write('<br><INPUT type=button value="Back" onclick=location.reload()>');
}

function loadDoc()
{
let URL = "https://solversbox.com/sandbox/paradigmas/PHP/ComprobacionLogin.php";

let request = new XMLHttpRequest();

request.open("GET", URL);
// "comprobacionLogin.php?usuario="+usuario+"contrasena="+contrasena, true

request.responseType = "json";
request.send();

request.onload = function loadDoc()
    {
        let respuesta = request.response;
        console.log(respuesta);
    }
}

btn.addEventListener("click", cargarPedido, loadDoc);


var btn = document.querySelector("#registrarse")

function register()
{
    document.write('<h4 align="left">Ingrese los datos solicitados par dar de alta el nuevo usuario</h4><br>');
    document.write('<P align="left">Usuario:    <INPUT type=text name=login><br><br><P align="left"> Clave: <INPUT type=password name=password> <br><br><P align="left">Reingrese la Clave: <INPUT type=password name=passwordv> <br><br><P align="left">MAIL:    <INPUT type=text name=mail> <br><br>');
    document.write('<br><INPUT onclick=alert("Alta exitosa!") type=button value=OK>'); 
    document.write('" "<INPUT type=button value="Back" onclick=location.reload()>');
}

btn.addEventListener("click", register);


