<?php 

//lo mejor es verificar poe empty para que nadie pueda mandar un dato vacio ya que 
//con isset podrian mandar la variable asi este vacia
if (!empty($_GET['eliminar'])) {
    $eliminar = new EliminarController();
    $eliminar->delete($_GET['eliminar']);
}
    
?>