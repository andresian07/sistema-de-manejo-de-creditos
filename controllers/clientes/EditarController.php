<?php

class EditarController
{

public function update($id,$nombre,$apellido,$documento,$ciudad,$dia)
	{
		$respuesta = EditarModel::update($id,$nombre,$apellido,$documento,$ciudad,$dia);
		if ($respuesta == true) {
			echo "<script>
					Swal.fire({
					title: 'BUEN TRABAJO!',
					text: 'Se edito correctamente!',
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
					text: 'Ne se edito!',
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