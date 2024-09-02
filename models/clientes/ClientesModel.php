<?php

class ClientesModel extends ConexionClientes
{
    //SELECT ALL
    public static function selectAll()
    {
        $conexion = self::sql();
        $query = $conexion->query("SELECT * FROM clientes WHERE 1");
        return $query;
    }

    //SELECT ALL FOR DAY
    public static function selectAllDay($dia)
    {
        $conexion = self::sql();
        $query = $conexion->query("SELECT * FROM clientes WHERE `dia` = $dia");
        return $query;
    }
    
  

  
    
    

 
   

    //DELET CREDITO FOR ID
    public static function deleteCredit($id)
    {
        $conexion = self::sql();
        $query = $conexion->query("DELETE FROM `creditos` WHERE `id` = $id");
        return $query;
    }

    //DELET CREDITO FOR ID
    public static function deleteHistorial($id)
    {
        $conexion = self::sql();
        $query = $conexion->query("DELETE FROM `historial` WHERE `historial_id` = $id");
        return $query;
    }

    //UPDATE CREDIT ID
    public static function updateCredit($id, $cliente_id, $monto, $saldo_nuevo, $fecha)
    {
        $conexion = self::sql();
        $query = $conexion->query("UPDATE `creditos` SET `cliente_id`='$cliente_id',`monto`='$monto',`saldo`='$saldo_nuevo',`fecha`='$fecha' WHERE `id` = $id");
        return $query;
    }

    //UPDATE CREDIT ID 
    public static function updateAbono($id,$historial_id,$abono,$accion,$fecha)
    {
       $conexion = self::sql();
       $query = $conexion->query("UPDATE `historial` SET `id`='$id',`historial_id`='$historial_id',`abono`='$abono',`accion`='$accion',`fecha`='$fecha' WHERE `id = $id" );
       return $query;
    }  
}
