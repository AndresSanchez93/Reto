<?php
  
    class Conectar{
        public static function conexion(){
            $host= "localhost";
            $usuario = "root";
            $clave = "";
            $db = "bdreto";
            $conexion = new mysqli($host,$usuario,$clave,$db,"3308");
            return $conexion;
        }

    }


?>