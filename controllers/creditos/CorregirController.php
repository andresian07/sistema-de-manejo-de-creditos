<?php

class CorregirController
{

//SELECT CADA EL CLIENTE POR EL ID CREDITO
	public static function selectIdCredit($id)
	{
		$respuesta = CorregirModel::selectIdCredit($id);
		return $respuesta;
	}

    //SELECT ID CLIENTE HISTORAL
	public static function selectIdHistorial($id)
	{
		$respuesta = CorregirModel::selectIdHistorial($id);
		return $respuesta;
	}
    
}