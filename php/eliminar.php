<?php
$arch = fopen('datos.dat', 'r');
$id = filter_input(0, 'id');
$n = 0;
$m = filesize('datos.dat') / 46;
while ($n < $m) {
    $cad = fread($arch, 46);
    $idB = substr($cad, 0, 4);
    if ($idB == $id) {
        $reg = $n;
        echo "entra";
    }
    $n++;
}
fclose($arch);
$s = filesize('datos.dat');
if ($s == 1) {
    unlink('datos.dat');
} else {
    $l1 = $reg * 46;
    $l2 = $s - $l1 - 46;
    $arch = fopen('datos.dat', 'r');
    if ($l1 > 0) {
        $d1 = fread($arch, $l1);
    }
    fseek($arch, 46, SEEK_CUR);
    if ($l2 > 0) {
        $d2 = fread($arch, $l2);
    }
    fclose($arch);
    $arch = fopen('datos.dat', 'w');
    if ($l1 > 0) {
        fwrite($arch, $d1);
    }
    if ($l2 > 0) {
        fwrite($arch, $d2);
    }
    fclose($arch);
}
header('Location:ver.php');

