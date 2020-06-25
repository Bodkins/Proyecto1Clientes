<?php

$arch = fopen('datos.dat', 'r+');
$id = filter_input(0, 'idCliente');
$nom = filter_input(0, 'nomCliente');
$lim = filter_input(0, 'limCredito');
$ade = filter_input(0, 'adeudo');
$n = 0;
$m = filesize('datos.dat') / 46;

while ($n < $m) {
    $cad = fread($arch, 46);
    $idB = substr($cad, 0, 4);
    if ($idB == $id) {
        $reg = $n;
    }
    $n++;
}
fseek($arch, $reg * 46);
fseek($arch, -46, SEEK_CUR);
$datos = substr($id, 0, 4) . substr($nom . "                                ", 0, 30) . substr($lim . "      ", 0, 6) . substr($ade . "      ", 0, 6);
fwrite($arch, $datos);
fclose($arch);
header('Location:ver.php');
