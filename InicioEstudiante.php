<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include ("Pantalla.php");
    $vera = new Pantalla("INICIO ESTUDIANTE","QG-Estudiante",false);
        
     $vera->setcuerpo("<form action=\"Validador.php\" method=\"post\" name=\"frm\">
            <input type=\"radio\" name=\"Tipo\" value=\"JUGAR\" checked=\"checked\" />Empezar juego<br>Ingrese PIN<br>"
            ."<input type=\"text\" name =\"PINE\"/>
            <button type=\"submit\">
            Ir
            </button>
            
        </form>");
     $vera->mostrar();
    
    

?>
