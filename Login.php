<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include ("Pantalla.php");
    $vera = new Pantalla("ACCEDER","QG-Acceso Profesor",false);
        
     $vera->setcuerpo("<form action=\"Validador.php\" method=\"post\" name=\"frm\">
            <br>Ingrese usuario de ESPOL ( en serio, profesor, su usuario de Espol :) )<br>
            <input type=\"text\" name =\"USER\"/>
            <br>Ingrese contraseña(123)<br>
            <input type=\"password\" name =\"PASS\"/>
            <button type=\"submit\">
            Ingresar
            </button>
            
        </form>");
     $vera->mostrar();
    
    

?>