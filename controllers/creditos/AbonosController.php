<?php

class AbonosController
{

//INSERT ABONO FOR CREDITO_ID
	public  function insertAbono($historial_id,$abono,$accion,$fecha)
	{
		$respuesta = AbonosModel::insertAbono($historial_id,$abono,$accion,$fecha);
		return $respuesta;
	}

    //UPDATE ABONOS
	public function updateAbono($id,$historial_id,$abono,$accion,$fecha)
	{
		$respuesta = ClientesModel::updateAbono($id,$historial_id,$abono,$accion,$fecha);
		if ($respuesta == true) {
			echo "<script>
					Swal.fire({
					title: 'BUEN TRABAJO!',
					text: 'Se corrigo correctamente el abono!',
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
					text: 'Ne se corrigio el abono!',
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