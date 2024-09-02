<?php

class ClientesController
{
    public static function selectALL()
    {
        $respuesta = ClientesModel::selectAll();
        return $respuesta;
    }

	//SELECT ALL FOR DAY
	public static function selectAllDay($dia)
	{
		$respuesta = ClientesModel::selectAllDay($dia);
		return $respuesta;
	}

	//SELECT CADA EL CLIENTE POR EL ID CREDITO
	public static function selectIdCredit($id)
	{
		$respuesta = CorregirController::selectIdCredit($id);
		return $respuesta;
	}
    
	
	public static function deleteCredit($id)
	{
		$respuesta = ClientesModel::deleteCredit($id);
		if ($respuesta == true) 
		{
			echo "<script>
					Swal.fire({
					title: 'BUEN TRABAJO!',
					text: 'Se elimino correctamente el credito!',
					icon: 'success'
		            }).then((result)=>{
					          if(result.value)
		                      {
							  window.location='index.php'
							  }
					});
				  </script>";
		} else {
			echo "<script>
					Swal.fire({
					title: 'ERROR!',
					text: 'Ne se elimino el credito!',
					icon: 'error'
		            }).then((result)=>{
					          if(result.value)
		                      {
							  window.location='index.php'
							  }
					});
				  </script>";
		}
	}

	public function deleteHistorial($id)
	{
		$resultado = ClientesModel::deleteHistorial($id);
		return $resultado;
	}

	

	public function updateCredit($id, $cliente_id, $monto, $saldo, $fecha)
	{
		$respuesta = ClientesModel::updateCredit($id, $cliente_id, $monto, $saldo, $fecha);
		if ($respuesta == true) {
			echo "<script>
					Swal.fire({
					title: 'BUEN TRABAJO!',
					text: 'Se hizo el abono correctamente!',
					icon: 'success'
		            }).then((result)=>{
					          if(result.value)
		                      {
							  window.location='index.php?modulo=Vercreditos'
							  }
					});
				  </script>";
		} else {
			echo "<script>
					Swal.fire({
					title: 'ERROR!',
					text: 'Ne se hizo el abono!',
					icon: 'error'
		            }).then((result)=>{
					          if(result.value)
		                      {
							  window.location='index.php'
							  }
					});
				  </script>";
		}
	}
	
}