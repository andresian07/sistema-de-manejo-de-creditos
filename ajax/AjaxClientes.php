<?php
require '../models/conexion.php';
require '../controllers/ClientesController.php';
require '../models/ClientesModel.php';


class AjaxClientes
{
    public function selectId($id)
    {
       $respuesta = ClientesController::selectId($id);
       echo json_encode($respuesta);
    }
}

$cliente = new AjaxClientes();
$cliente->selectId($_GET['id']);