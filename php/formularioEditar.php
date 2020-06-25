<?php
$id = filter_input(0, 'id');
$nom = filter_input(0, 'nom');
$lim = trim(filter_input(0, 'lim'));
$adeudo = trim(filter_input(0, 'adeudo'));
?>
<link rel="stylesheet" href="../Css/estilo.css">
<div id='error' style="background: white"></div>
<title>Editar cliente</title>
<form name="formulario" id="formulario" action="editar.php" method="post" onsubmit="return enviarFormulario();">
    <label >id <?php echo $id; ?></label><br>  
    <input type="hidden"  name="idCliente" id="idCliente" value="<?php echo $id; ?>"><br>
    <label for="nomCliente">Nombre</label><br>
    <input  type="text" id="nomCliente" name="nomCliente" pattern="[a-zA-Z]+" min="0" maxlength="30" value="<?php echo $nom; ?>" required ><br>
    <label for="limCredito">Crédito</label><br>
    <input type="number" id="limCredito" name="limCredito" min="0"  maxlength="6" value="<?php echo $lim; ?>" required><br>
    <label for="adeudo">Adeudo</label><br>
    <input type="number" id="adeudo" name="adeudo"  value="<?php echo $adeudo; ?>" required><br><br>
    <button type="submit" class="btnGuardar" >Guardar</button>
    <a class="btnCancelar" href="../php/ver.php">Cancelar</a>
</form>
<script src="js/app.js"></script>

