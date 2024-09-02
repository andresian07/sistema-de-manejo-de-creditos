<?php

class CrearCreditoController
{
public static function selectId($id)
	{
		$respuesta = CrearCreditoModel::selectId($id);
		return $respuesta;
	}

    public function insertCredito($cliente_id, $monto, $saldo, $fecha)
	{
		$respuesta = CrearCreditoModel::insertCredito($cliente_id, $monto, $saldo, $fecha);
		if ($respuesta == true) {
			echo "<script>
					Swal.fire({
					title: 'BUEN TRABAJO!',
					text: 'Se creo el credito correctamente!',
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
					text: 'Ne se creo el credito!',
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