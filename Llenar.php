<?php
session_start();
include ("Pantalla.php");
$str="<form action=\"Respuestas.php\" method=\"post\" name=\"frm\">
            FILA<br>"
            ."<input type=\"text\" name =\"fila\"/><br>
            Pregunta<br>
            <input type=\"text\" name =\"pregunta\"/><br>
            Opciones<br>
            <textarea name=\"opciones\" rows=\"2\" cols=\"30\"></textarea><br>
            <button type=\"submit\">
            Continuar
            </button>
            
        </form>";
        
$ver= new Pantalla("LLENAR","LLENADO");
$ver->setcuerpo($str);
$ver->mostrar();
