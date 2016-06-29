<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include ("Pantalla.php");
    $vera = new Pantalla("INICIO ESTUDIANTE","QG-Estudiante");
        
     $vera->setcuerpo("<form action=\"Validador.php\" method=\"post\" name=\"frm\">
            <input type=\"radio\" name=\"Tipo\" value=\"JUGAR\" checked=\"checked\" />Empezar juego<br>"
//            <input type=\"radio\" name=\"Tipo\" value=\"MIS_NOTAS\" /> Ver mis notas<br>
            ."<input type=\"text\" name =\"PIN\"/>
            <button type=\"submit\">
            Ir
            </button>
            
        </form>");
     $vera->mostrar();
    
    

?>
