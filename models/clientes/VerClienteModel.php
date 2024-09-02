
<?php

class VerClienteModel extends ConexionClientes
{

//SELECT FOR ID CLIENTE
    public static function selectId($id)
    {
        $conexion = self::sql();
        $query = $conexion->query("SELECT * FROM `clientes` WHERE `id` = $id")->fetch_assoc();
        return $query;
    }
}
