<?php

class VerCreditosModel extends ConexionCreditos
{
//SELECT ALL CREDITOS
    public static function selectAllCredits()
    {
        $conexion = self::sql();
        $query = $conexion->query("SELECT * FROM creditos WHERE 1");
        return $query;
    }
}    