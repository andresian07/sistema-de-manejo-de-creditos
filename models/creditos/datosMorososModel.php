<?php 

class datosMorososModel extends ConexionCreditos
{
    public static function selectEntreFechas($fechaInicial,$fechaFinal)
    {
        $conexion = self::sql();
        $stm = $conexion->query("SELECT * FROM `historial`  WHERE `fecha` BETWEEN '$fechaInicial' AND '$fechaFinal' AND `abono` = 0")->fetch_all(MYSQLI_ASSOC);
        return $stm;
}

}