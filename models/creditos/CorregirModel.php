<?php

class CorregirModel extends ConexionCreditos
{


//SELECT ID FOR CREDITO
    public static function selectIdCredit($id)
    {
        $conexion = self::sql();
        $query = $conexion->query("SELECT * FROM `creditos` WHERE `id` = $id")->fetch_assoc();
        return $query;
    }

    //SELECT FOR ID CLIENTE
    public static function selectIdHistorial($id)
    {
        $conexion = self::sql();
        $query = $conexion->query("SELECT * FROM `historial` WHERE `id` = $id")->fetch_assoc();
        return $query;
    }
    
}