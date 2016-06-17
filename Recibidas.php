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
        session_register("puntaje");
        session_register("nombre");
        $_SESSION["nombre"]= $_POST["Nombre"];
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
        
        <form action="Guardar.php" method="post" name="n">
            <button type="submit">
            Terminar
            </button>
            
        </form>
    </body>
</html>
