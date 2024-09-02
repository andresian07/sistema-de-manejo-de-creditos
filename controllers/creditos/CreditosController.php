<?php

class CreditosController
{
    //SELECT TODOS LOS CREDITOS
	public static function selectCredits($id)
	{
		$respuesta = CreditosModel::selectCredits($id);
		return $respuesta;
	}
}