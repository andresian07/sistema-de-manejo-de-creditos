<?php

class VerClienteController
{
public static function selectId($id)
	{
		$respuesta = VerClienteModel::selectId($id);
		return $respuesta;
	}
}