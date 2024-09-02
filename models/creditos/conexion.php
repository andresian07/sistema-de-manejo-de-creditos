<?php

class ConexionCreditos
{
    public static function sql()
    {
        $conexion = new mysqli('localhost','root','','cobro');
        return $conexion;
    }
}