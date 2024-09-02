<?php

class VerCreditosController
{

//SELECT ALL CREDITOS
	public static function selectAllCredits()
	{
        $respuesta = VerCreditosModel::selectAllCredits();
		return $respuesta;
	}
}