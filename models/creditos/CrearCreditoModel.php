<?php

class CrearCreditoModel extends ConexionCreditos
{

//SELECT FOR ID CLIENTE
    public static function selectId($id)
    {
        $conexion = self::sql();
        $query = $conexion->query("SELECT * FROM `clientes` WHERE `id` = $id")->fetch_assoc();
        return $query;
    }

     //INSERT CREDITO
     public static function insertCredito($cliente_id, $monto, $saldo, $fecha)
     {
         $conexion = self::sql();
         $query = $conexion->query("INSERT INTO `creditos`(`cliente_id`, `monto`, `saldo`, `fecha`) VALUES ('$cliente_id','$monto','$saldo','$fecha')");
         return $query;
     }
}