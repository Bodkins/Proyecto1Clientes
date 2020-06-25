<?php
$id = filter_input(0, 'idCliente');
$nom = filter_input(0, 'nomCliente');
$lim = filter_input(0, 'limCredito');
$ade = filter_input(0, 'adeudo');
$arch = fopen('datos.dat', 'r+');
$m = filesize('datos.dat') / 46;
$n = 0;
while ($n < $m) {
    $cad = fread($arch, 46);
    $idB = substr($cad, 0, 4);
    
    if ($idB == $id) {
        $ex = true;
    }
    $n++;
}
if ($ex) {
    echo "<script>
                alert('El id que intentas ingresar ya se encuentra registrado, prueba con otro');
                window.location= '../formularioAgregar.php'
    </script>";
} else {
    fclose($arch);
    $datos = substr($id, 0, 4) . substr($nom . "                                ", 0, 30) . substr($lim . "      ", 0, 6) . substr($ade . "      ", 0, 6);

    $arch = fopen('datos.dat', 'a');
    fwrite($arch, $datos);
    fclose($arch);
    echo "<script>
                alert('Cliente agregado con éxito');
                window.location= '../index.php';
    </script>";
}
