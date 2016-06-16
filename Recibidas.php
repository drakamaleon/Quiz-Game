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
        $nombre = $_POST["Nombre"];
        @session_start();//inicas la sesion  usas la variable 
        $_SESSION["puntaje"]=0;
        print_r($_SESSION["preguntas"]);  
        echo"<br/>";
        echo"<br/>";
        echo"<br/>";
        echo($_SESSION["fila"]);
        echo "</br>";
        echo $nombre;
        echo "</br>";
        echo ($_SESSION["puntaje"]);
        ?>
    </body>
</html>
