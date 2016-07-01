<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include ("Pantalla.php");
    $vera = new Pantalla("ACCEDER","QG-Acceso Profesor");
        
     $vera->setcuerpo("<form action=\"Validador.php\" method=\"post\" name=\"frm\">
            <br>Ingrese usuario de ESPOL ( en serio Espol :) )<br>
            <input type=\"text\" name =\"USER\"/>
            <br>Ingrese contraseña<br>
            <input type=\"text\" name =\"PASS\"/>
            <button type=\"submit\">
            Ingresar
            </button>
            
        </form>");
     $vera->mostrar();
    
    

?>