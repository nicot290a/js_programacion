function go()
{
    if (document.form.login.value == 'usuario' && document.form.password.value =='clave123')
        { 
            document.write('Login exitoso!<br><br> En la Fecha :');
            document.write(Date());
            document.write('<br><INPUT type=button value="Back" onclick=location.reload()>');
        } 
    else    
        { 
            alert("Porfavor ingrese, nombre de usuario y contraseÃ±a correctos."); 
        } 
} 
function register()
{
    document.write('<h4 align="left">Ingrese los datos solicitados par dar de alta el nuevo usuario</h4><br>');
    document.write('<P align="left">Usuario:    <INPUT type=text name=login><br><br><P align="left">Clave: <INPUT type=password name=password> <br><br><P align="left">Reingrese la Clave: <INPUT type=password name=passwordv> <br><br><P align="left">MAIL:    <INPUT type=text name=mail>');
    document.write('<br><INPUT onclick=alert("Alta exitosa!") type=button value=OK>'); 
    document.write('" "<INPUT type=button value="Back" onclick=location.reload()>');
}