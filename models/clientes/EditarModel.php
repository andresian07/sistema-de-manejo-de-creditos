
<?php

class EditarModel extends ConexionClientes
{
//UPDATE FOR ID
    public static function update($id, $nombre, $apellido, $documento, $ciudad,$dia)
    {
        $conexion = self::sql();
        $query = $conexion->query("UPDATE `clientes` SET `id`='$id',`nombre`='$nombre',`apellido`='$apellido',`documento`='$documento',`ciudad`='$ciudad',`dia`='$dia' WHERE `id` = $id");
        return $query;
    }
}