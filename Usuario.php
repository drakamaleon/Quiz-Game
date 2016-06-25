<?php 

include ("Pantalla.php");

$jugador=new Pantalla("USUARIO", "QG-Usuario");
$jugador->setcuerpo("<form action=\"Recibidas.php\" method=\"post\" name=\"frm\">
            <input type=\"text\" name =\"Nombre\"/>
            <button type=\"submit\">
            Ingrese su nombre de usuario
            </button> 
        </form>"); 
$jugador->mostrar();
?>
