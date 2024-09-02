<?php

class SelectAbonosController
{

//SELECT TODOS LOS ABONOS POR ID DE CREDITO
	public static function selectAbonos($id)
	{
		$respuesta = SelectAbonosModel::selectAbonos($id);
		return $respuesta;
	}
}