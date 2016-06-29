<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include ("Pantalla.php");
    $vera = new Pantalla("INICIO PROFESOR","QG-Profesor");
        
     $vera->setcuerpo("<form action=\"Validador.php\" method=\"post\" name=\"frm\">
            <input type=\"radio\" name=\"Tipo\" value=\"PUNTAJES\" />Ver Puntajes<br>
            <pre>Ingrese PIN de la sesión</pre>
            <input type=\"text\" name =\"PIN\"/>
            <button type=\"submit\">
            Ir
            </button>
            
        </form>");
     $vera->mostrar();
