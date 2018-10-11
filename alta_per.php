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
        <option value="preceptor">Preceptor</option>
     </select>
</form>
<div id="estudiante" style="display: none;">
    <h2>Si eres estudiante...</h2>
    <form action="abm_pe.php" method="post">
        <label>Nombre</label>
        <input type="text" name="nombre" />
        <p>Centro:<br/>
        <input type="text" name="centro" /></p>
        <input type="submit" name="send" value="Enviar" />
    </form>
</div>
<div id="docente" style="display: none;">
    <h2>Si eres docente...</h2>
    <form action="index.php" method="post">
        <p>Nombre:<br/>
        <input type="text" name="nombre" /></p>
        <p>Centro:<br/>
        <input type="text" name="centro" /></p>
        <input type="submit" name="send" value="Enviar" />
    </form>
</div>
<div id="directivo" style="display: none;">
    <h2>Si eres directivo...</h2>
    <form action="index.php" method="post">
        <p>Nombre:<br/>
        <input type="text" name="nombre" /></p>
        <p>Centro:<br/>
        <input type="text" name="centro" /></p>
        <input type="submit" name="send" value="Enviar" />
    </form>
</div>
<div id="preceptor" style="display: none;">
    <h2>Si eres preseptor...</h2>
    <form action="index.php" method="post">
        <p>Nombre:<br/>
        <input type="text" name="nombre" /></p>
        <p>Centro:<br/>
        <input type="text" name="centro" /></p>
        <input type="submit" name="send" value="Enviar" />
    </form>
</div>
</div>
</div>
</div>
</div>
