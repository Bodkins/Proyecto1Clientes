<?php ?>
<link rel="stylesheet" href="Css/estilo.css">
<h1>Agregar cliente</h1>
<div id="error"></div>
<title>Agregar cliente</title>
<form name="formulario" id="formulario" action="php/agregar.php" method="post" onsubmit="return enviarFormulario();">
    <label for="idCliente">id</label><br>  
    <input type="text" id="idCliente" name="idCliente" minlength="4" maxlength="4"  required><br>
    <label for="nomCliente">Nombre</label><br>
    <input type="text" id="nomCliente" name="nomCliente" maxlength="30" pattern="[a-zA-Z]+" required ><br>
    <label for="limCredito">Crédito</label><br>
    <input type="number" id="limCredito" name="limCredito" maxlength="6" required><br>
    <label for="adeudo">Adeudo</label><br>
    <input type="number" id="adeudo" name="adeudo" maxlength="6" required><br>
    <button type="submit" class="btnGuardar" >Guardar</button>
    <a class="btnCancelar" href="index.php">Cancelar</a>
</form>
<script src="js/app.js"></script>

