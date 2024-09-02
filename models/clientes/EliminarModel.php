<?php

class EliminarModel extends ConexionClientes
{

//DELET FOR ID
    public static function delete($id)
    {
        $conexion = self::sql();
        $query = $conexion->query("DELETE FROM `clientes` WHERE `id` = $id");
        return $query;
    }
}