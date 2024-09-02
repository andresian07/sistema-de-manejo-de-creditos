<?php

class CreditosModel extends ConexionCreditos
{


//SELECT FOR ID TODOS LOS CREDITOS DE UN CLIENTE
    
    #en este caso usamos fetch_all(MYSQLI_ASSOC) cuando tenemos mas de un array
    #ejemplo tenemos mas de un credito, si tuvieramos un solo credito seria suficiente con fetch_assoc()
    public static function selectCredits($id)
    {
        $conexion = self::sql();
        $query = $conexion->query("SELECT * FROM `creditos` WHERE `cliente_id` = $id")->fetch_all(MYSQLI_ASSOC);
        return $query;
    }
}