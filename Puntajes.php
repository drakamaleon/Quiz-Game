<?php

include ("Pantalla.php");
include ("Jugador.php");

    session_start();
    if($_SESSION["puntaje"]==""){
        $_SESSION["puntaje"]="Otro";
        $ver = new Pantalla("PUNTUACIONES","QG-Puntuacion",false);
        
     $ver->setcuerpo("<form action=\"Puntajes.php\" method=\"post\" name=\"frm\">
            <input type=\"radio\" name=\"Usar\" value=\"PUNTAJES\" checked=\"checked\" /> PUNTAJES<br>
            <input type=\"radio\" name=\"Usar\" value=\"TOP10\" /> TOP 10<br>
           <input type=\"submit\" name =\"ENVIAR\"/>
            
    </form>");
     $ver->mostrar();
    }
    else{
        $_SESSION["puntaje"]="";
        $fp = fopen($_SESSION["pinP"]."P", "r");
        $tipo = $_POST["Usar"];
        
        $fila1=array();
        $fila2=array();
        $i=0;
        $j=0;
        $total=array();
        $total2=array();
        while(!feof($fp)) {
            $linea = fgets($fp);
            $dividido = explode(";", $linea);
            
            if($dividido[2]==1){
                array_push($fila1, new Jugador($dividido[0], $dividido[1]));
                array_push($total,$dividido[1]);
            }
            elseif($dividido[2]==2){
                array_push($fila2, new Jugador($dividido[0], $dividido[1]));
                array_push($total2,$dividido[1]);
            }
            
        }
        
        $promedio1= array_sum($total)/count($total);
        $promedio2= array_sum($total2)/count($total2);
        $ver = new Pantalla($tipo,"QG-".$tipo."",true);
        $C1=count($fila1);
        $C2=count($fila2);
        if($tipo =="TOP10"){
            function orden($a,$b){
                if ($a->puntaje == $b->puntaje) {
                return 0;
                }
                return ($a->puntaje > $b->puntaje) ? -1 : 1;
            }
            usort($fila1, "orden");
            usort($fila2, "orden");
            
            if($C1>10){
                $C1=10;
            }
            if($C2>10){
                $C2=10;
            }
        }
    function crearPromedios($ob,$lista,$numero,$promedio,$C){
        $titulo=$ob->tituloI."FILA ".$numero." PROMEDIO(".$promedio.")"."\"".$ob->tituloD."\n<ul>\n";
        
        $ob->cuerpo= $ob->cuerpo.$titulo;
        for ($i = 0; $i < $C; $i++){
            $jug =$lista[$i];
            $jugP="<li><pre>".$jug->nombre."\t".$jug->puntaje."</pre></li>\n";
            $ob->cuerpo=$ob->cuerpo.$jugP;
        }
        $ob->cuerpo=$ob->cuerpo."</ul></div>\n";
    }
        crearPromedios($ver,$fila1, 1,$promedio1,$C1);
        crearPromedios($ver,$fila2, 2,$promedio2,$C2);
        $ver->mostrar();
        }
