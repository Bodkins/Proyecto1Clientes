var id = document.getElementById('idCliente');
var nombre = document.getElementById('nomCliente');
var limite = document.getElementById('limCredito');
var adeudo = document.getElementById('adeudo');
var error = document.getElementById('error');
error.style.color = 'red';

function enviarFormulario() {
    var mensajesError = ["Verifica los datos ingresados, recuerda que el id debe estar entre 0001 y 9999, y los campos de limite y adeudo admiten como maximo 6 digitos no negativos"];
    console.log(id.value);
    if (id.value.toString() === '0000') {
        error.innerHTML = mensajesError.join(', ');
        return false;
    }
    if (limite.value > 999999 || limite.value <= "-1") {
        error.innerHTML = mensajesError.join(', ');
        return false;
    }
    if (adeudo.value > 999999 || adeudo.value < 0) {
        error.innerHTML = mensajesError.join(', ');
        return false;
    }
}



