<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include ("Pantalla.php");
    
    $vera = new Pantalla("INICIO","QuizGame",false);
        
     $vera->setcuerpo("<form action=\"Validador.php\" method=\"post\" name=\"frm\">
            <input type=\"radio\" name=\"TipoSesion\" value=\"ESTUDIANTE\"/>Estudiante<br>
             <input type=\"radio\" name=\"TipoSesion\" value=\"PROFESOR\"/>Profesor<br>
            <button type=\"submit\">
            Ir
            </button>
            
        </form>");
     $vera->mostrar(); 