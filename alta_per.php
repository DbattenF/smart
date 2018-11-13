<script type="text/javascript">
function mostrar(id) {
    if (id == "estudiante") {
        $("#estudiante").show();
        $("#docente").hide();
        $("#directivo").hide();
        $("#preceptor").hide();
    }

    if (id == "docente") {
        $("#estudiante").hide();
        $("#docente").show();
        $("#directivo").hide();
        $("#preceptor").hide();
    }

    if (id == "directivo") {
        $("#estudiante").hide();
        $("#docente").hide();
        $("#directivo").show();
        $("#preceptor").hide();
    }

    if (id == "preceptor") {
        $("#estudiante").hide();
        $("#docente").hide();
        $("#directivo").hide();
        $("#preceptor").show();
    }
}
</script>
<div id="capa_d"> 
<div class="container">
<div class="row" >
<div class="col-sm-6" > 
<form action="index.php" method="post">
    Rol: 
    <select id="status" name="rol" onChange="mostrar(this.value);">
    	<option selected="selected" disabled="disabled">Seleccione...</option>
        <option value="estudiante">Estudiante</option>
        <option value="docente">Docente</option>
        <option value="directivo">Directivo</option>
     </select>
</form>
<div id="estudiante" style="display: none;">
    <h2>Rellenar para estudiante</h2>
    <form action="abm_pe.php" method="post">
        <input type="text" name="txtRol" value="estudiante" style="display: none;">
        <label>Nombre</label>
        <input type="text" name="txtNombre"><br>
        <label>Apellido</label>
        <input type="text" name="txtApellido"><br>
        <label>Sexo</label><br>
        <input type="radio" name="txtSexo" value="Masculino">Masculino<br>
        <input type="radio" name="txtSexo" value="Femenino">Femenino<br>
        <label>Email</label>
        <input type="email" name="txtEmail"><br>
        <label>Curso</label>
        <select name="txtCurso">
            <option selected="selected" disabled="disabled">Seleccione...</option>
            <option value="1">Grado 1</option>
            <option value="2">Grado 2</option>
            <option value="3">Grado 3</option>
            <option value="4">Grado 4</option>
            <option value="5">Grado 5</option>
        </select><br>
        <label>Usuario</label>
        <input type="text" name="txtuser"><br>
        <label>Contraseña</label>
        <input type="text" name="txtpasswd"><br>
        <input type="submit" name="submit">
    </form>
</div>
<div id="docente" style="display: none;">
    <h2>Si eres docente...</h2>
    <form action="abm_pe.php" method="post">
        <input type="text" name="txtRol" value="docente" style="display: none;">
        <label>Nombre</label>
        <input type="text" name="txtNombre" /></p>
        <label>Apellido</label>
        <input type="text" name="txtApellido" /></p>
        <label>Telefono</label>
        <input type="tel" name="txtTelefono" /></p>
        <label>Direccion</label>
        <input type="text" name="txtDireccion" /></p>
        <label>Curso</label>
        <select name="txtCurso">
            <option selected="selected" disabled="disabled">Seleccione...</option>
            <option value="1">Grado 1</option>
            <option value="2">Grado 2</option>
            <option value="3">Grado 3</option>
            <option value="4">Grado 4</option>
            <option value="5">Grado 5</option>
        </select><br>
        <label>Email</label>
        <input type="email" name="txtEmail" /></p>
        <label>Usuario</label>
        <input type="text" name="txtuser" /></p>
        <label>Contraseña</label>
        <input type="text" name="txtpasswd" /></p>
        <input type="submit" name="send" value="Enviar" />
    </form>
</div>
<div id="directivo" style="display: none;">
    <h2>Si eres directivo...</h2>
    <form action="abm_pe.php" method="post">
        <input type="text" name="txtRol" value="directivo" style="display: none;">
        <label>Nombre</label>
        <input type="text" name="txtNombre" /></p>
        <label>Apellido</label>
        <input type="text" name="txtApellido" /></p>
        <label>Telefono</label>
        <input type="tel" name="txtTelefono" /></p>
        <label>Direccion</label>
        <input type="text" name="txtDireccion" /></p>
        <label>Email</label>
        <input type="email" name="txtEmail" /></p>
        <label>Usuario</label>
        <input type="text" name="txtuser" /></p>
        <label>Contraseña</label>
        <input type="text" name="txtpasswd" /></p>
        <input type="submit" name="send" value="Enviar" />
    </form>
</div>
</div>
</div>
</div>
</div>
