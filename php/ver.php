<html >
    <head>
        <title>Clientes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Css/estilo.css">
        <style>
            *{
                background-color: white;
            }
            td{
                color: black;
                border-bottom: 2px solid #49c0b6;
                padding-left: 40px;
                text-align: center;
                font-family: sans-serif;
                font-weight: 100;
            }
            th{
                padding-left: 20px;
                padding-right: 20px;
                color: black;
                border-bottom: 2px solid #49c0b6; 
                font-size: 20px;
            }
            button{
                margin: 0 20px 0 0;
            }
            table{
                text-align: center;
                margin-left: 20px;
                width:  100%;
            }
            h2{
                margin-left: 20px;
                font-size: 30px;
            }
        </style>
    </head>
    <body >
        <h2>Clientes</h2>
        <table class="tabla" >
            <thead>
                <tr>
                    <th>id</th> 
                    <th>Nombre</th>
                    <th>Límite de crédito</th>
                    <th>Adeudo</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $arch = fopen('datos.dat', 'r');
                    $n = 0;

                    $m = filesize('datos.dat') / 46;

                    while ($n < $m) {
                        $cad = fread($arch, 46);
                        $id = trim(substr($cad, 0, 4));
                        $nom = trim(substr($cad, 4, 30));
                        $lim = substr($cad, 34, 6);
                        $adeudo = substr($cad, 40, 6);
                        ?>
                        <td><?php print($id); ?></td>
                        <td><?php print($nom); ?></td>
                        <td><?php print($lim); ?></td>
                        <td><?php print($adeudo) ?></td>
                        <td>
                            <div class="btnAccion">
                                <form action="formularioEditar.php" method="post">
                                    <input type="hidden" name="id"  value="<?php print($id); ?>">
                                    <input type="hidden" name="nom"  value="<?php print($nom); ?>">
                                    <input type="hidden" name="lim"  value="<?php print($lim); ?>">
                                    <input type="hidden" name="adeudo"  value="<?php print($adeudo); ?>">
                                    <button type="submit" style="margin-left:  -60px"  class="btnEditar">Editar</button>
                                </form>
                                <form action="eliminar.php" method="post">
                                    <input type="hidden" name="id"  value="<?php print($id); ?>">
                                    <input type="hidden" name="nom"  value="<?php print($nom); ?>">
                                    <input type="hidden" name="lim"  value="<?php print($lim); ?>">
                                    <input type="hidden" name="adeudo"  value="<?php print($adeudo); ?>">
                                    <button type="submit" style="margin-left:  -60px" class="btnEliminar">Eliminar</button> 
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php
                    $n++;
                }
                ?>
            </tbody>
        </table>
        <a class="agregarVer" href="../formularioAgregar.php">Agregar </a>
        <script src="../js/app.js"></script>
    </body>
</html>