<?php 

include ("Pantalla.php");

$jugador=new Pantalla("USUARIO", "QG-Usuario",false);
$jugador->setcuerpo("<form action=\"Recibidas.php\" method=\"post\" name=\"frm\">
            <input type=\"text\" name =\"Nombre\"/>
            <button type=\"submit\">
            Ingrese su nombre completo
            </button> 
        </form>"); 
$jugador->mostrar();
?>
