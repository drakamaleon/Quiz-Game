<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include ("Pantalla.php");

    $vera = new Pantalla("INICIO PROFESOR","QG-Profesor");
     $_SESSION["puntaje"]="";
     $vera->setcuerpo("<form action=\"Validador.php\" method=\"post\" name=\"frm\">
            <input type=\"radio\" name=\"Tipo\" value=\"PUNTAJES\" checked= \"checked\" />Ver Puntajes<br>
            <pre>Ingrese PIN de la sesión</pre>
            <input type=\"text\" name =\"PINP\"/>
            <button type=\"submit\">
            Ir
            </button>
            
        </form>");
     $vera->mostrar();
