<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        @session_start();//inicas la sesion  usas la variable  
        print_r($_SESSION["preguntas"]);  
        echo"<br/>";
        echo"<br/>";
        echo"<br/>";
        print_r($_SESSION["fila"]);  
        ?>
    </body>
</html>
