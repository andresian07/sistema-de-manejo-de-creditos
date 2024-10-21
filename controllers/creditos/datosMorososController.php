<?php

class datosMorososController
{
    public static function selectEntreFechas($fechaInicial,$fechaFinal)
    {
        $respuesta = datosMorososModel::selectEntreFechas($fechaInicial,$fechaFinal);
        return $respuesta;
        header("location:index.php?modulo=tablaMorosos");
    }
}