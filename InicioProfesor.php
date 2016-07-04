<?php
@session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include ("Pantalla.php");

    $vera = new Pantalla("INICIO PROFESOR","QG-Profesor",false);
    $_SESSION["cuestionario"]=array();
     $_SESSION["pinG"]=0;
     $_SESSION["puntaje"]="";
     $vera->setcuerpo("<form action=\"Validador.php\" method=\"post\" name=\"frm\">
            <b>Ver Puntajes<br></b>
            Ingrese PIN de la sesión<br>
            <input type=\"text\" name =\"PINP\"/>
            <button type=\"submit\">
            Ir
            </button>
            </form>
            <form action=\"ValProfesor.php\" method=\"post\" name=\"frm\">
            <b>Crear Preguntas<br></b>
            <button type=\"submit\">
            Crear
            </button>
        </form>");
     $vera->mostrar();
