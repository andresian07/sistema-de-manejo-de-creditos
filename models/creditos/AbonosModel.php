<?php

class AbonosModel extends ConexionCreditos
{

//INSERT ABONO
    public static function insertAbono($historial_id,$abono,$accion,$fecha)
    {
        $conexion = self::sql();
        $query = $conexion->query("INSERT INTO `historial`(`historial_id`, `abono`,`accion`, `fecha`) VALUES ('$historial_id','$abono','$accion','$fecha')");
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