<?php

class EliminarController
{
     //DELET FOR ID
	 public function delete($id)
	 {
		$respuesta = EliminarModel::delete($id);
		if ($respuesta == true) 
		{
			echo "<script>
					Swal.fire({
					title: 'BUEN TRABAJO!',
					text: 'Se elimino correctamente!',
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
					text: 'Ne se elimino!',
					icon: 'error'
		            }).then((result)=>{
					          if(result.value)
		                      {
							  window.location='index.php'
							  }
					});
				  </script>";# code...
		}
	 }

}