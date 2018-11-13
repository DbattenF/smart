<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Registro de usuarios con PHP y Ajax</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/stylesheet.css" />
		<script src="bootstrap/js/functions.ajax.js"></script>
    </head>
    <body>
	<div id="allContent"><table cellpadding="0" cellspacing="0" border="0" height="100%" width="100%"><tr><td align="center" valign="middle" height="100%" width="100%">
         
        <div id="alertBoxes"></div>
        <span class="loginBlock"><span class="inner">
    
	    
        <form method="post" action="">
        <table cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td>Dni</td>
                <td><input type="text" name="rec_dni" id="rec_dni" /></td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td><input type="text" name="rec_nombre" id="rec_nombre" /></td>
            </tr>
            <tr>
                <td>Apellido</td>
                <td><input type="text" name="rec_apellido" id="rec_apellido" /></td>
            </tr>
            <tr>
                <td>Nombre del alumno</td>
                <td><input type="text" name="rec_nom_alum" id="rec_nom_alum" /></td>
            </tr>
            <tr>
                <td>Apellido del alumno</td>
                <td><input type="text" name="rec_apel_alum" id="rec_apel_alum" /></td>
            </tr>
            <tr>
                <td>Telefono</td>
                <td><input type="text" name="rec_telefono" id="rec_telefono" /></td>
            </tr>
            <tr>
                <td>Direccion</td>
                <td><input type="text" name="rec_direccion" id="rec_direccion" /></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="rec_email" id="rec_email" /></td>
            </tr>
            <tr>
                <td>Usuario</td>
                <td><input type="text" name="rec_username" id="rec_username" /></td>
            </tr>
            <tr>
                <td>Contraseña</td>
                <td><input type="password" name="rec_userpass" id="rec_userpass" /></td>
            </tr>
            <tr>
                <td colspan="2" align="right"><span class="timer" id="timer"></span><button id="rec_userbttn">Registrar</button></td>
            </tr>
        </table>
    </form>

         
        </span></span>
         
    </td></tr></table></div></body>
</html>
