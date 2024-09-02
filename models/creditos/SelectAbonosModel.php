<?php

class SelectAbonosModel extends ConexionCreditos
{

//SELECT HISTORIAL ABONOS POR CREDITO
    public static function selectAbonos($id)
    {
        $conexion = self::sql();
        $query = $conexion->query("SELECT * FROM `historial` WHERE `historial_id` = $id")->fetch_all(MYSQLI_ASSOC);
        return $query;
    }

}