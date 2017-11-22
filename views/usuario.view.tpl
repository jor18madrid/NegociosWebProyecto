
<h1>Nuevo Usuario</h1>
<pre>
<form action="index.php?page=usuario" method="post" id=agregarUsuario>

<input type="text" name="txtNombre" value="{{txtNombre}}" placeholder="Nombre Completo" id="txtNombre">
<input type="text" name="txtMail" value="{{txtMail}}" placeholder="Correo Electronico" id="txtMail">
<input type="password" name="txtPswd" value="{{txtPswd}}" placeholder="Contraseña" id="txtPswd" >
<input type="password" name="txtPswdConf" value="{{txtPswdConf}}" placeholder="Confirmar Contraseña" id="txtPswdConf" >

<input type="submit" name="btnGuardar" value="Guardar" id="btnGuardar">
</form>
</pre>
