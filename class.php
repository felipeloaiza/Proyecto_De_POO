<?php

class Loguin{


    public $user="";
    public $password="";
    public $usu="felipe@autonoma.edu.co";
    public $pass="1234";
    public $Area="Profesor";
    public $Area2="Alumno";
    public $cadena="True";
    public $cadena2="false";

    function entrarDatos($variable1,$variable2){
        $this->user = $variable1;
        $this->password = $variable2;
    }

    function loguear(){

        $us = $this->usu;
        $ps = $this->pass;
        

        $us = $this->usu;
        $ps = $this->pass;
       

        if (($us === '$usu') && ($ps === '$pass')) {
            return $this->cadena;
        }
        else {
            return $this->cadena2;
        }
    }
}