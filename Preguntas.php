<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Pregunta{
    public $fila;
    public $pregunta;
    public $respuesta;
    public $opciones=array();
    
    function __construct($fila,$pregunta,$respuesta,$opciones){
        $this->fila=$fila;
        $this->pregunta=$pregunta;
        $this->respuesta=$respuesta;
        $this->opciones=$opciones;
    }
}
