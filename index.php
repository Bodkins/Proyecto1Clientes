<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" href="Css/estilo.css">
        <style>
            *{
                background: #0c3866 ;
            }
            h1{
                font-family: sans-serif;
                font-weight: lighter;
                color: white;
                font-size: 2em;
            }
        </style>
    </head>
    <body>
        <h1 style="font-size: 100px">Clientes</h1>
        <p>
            Esta página esta creada con el objetivo de crear, editar y eliminar clientes, para crear uno es posible con solo dar al botón agregar cliente, así mismo se pueden ver los clientes que ya están agregados.
        </p>
        <nav>
            <a href="formularioAgregar.php">Agregar clientes</a>
            <a class="cliente" href="php/ver.php" style="margin-left: 400px" >Ver clientes</a>
        </nav>
    </body>
</html>
