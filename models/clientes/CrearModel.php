<?php
class CrearModel extends ConexionClientes
{
    //INSERT 
    public static function insert($nombre,$apellido,$documento,$ciudad,$dia)
    {
        $conexion = self::sql();
        $query = $conexion->query("INSERT INTO `clientes`(`nombre`, `apellido`, `documento`, `ciudad`, `dia`) VALUES ('$nombre','$apellido','$documento','$ciudad','$dia')");
        return $query;
    }
}