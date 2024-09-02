<?php

class CrearController
{
 //INSERT CLIENTE
 public function insert($nombre,$apellido,$documento,$ciudad,$dia)
 {
     $respuesta = CrearModel::insert($nombre,$apellido,$documento,$ciudad,$dia);
     if ($respuesta == true) 
     {
         echo "<script>
                 Swal.fire({
                 title: 'BUEN TRABAJO!',
                 text: 'Se creo correctamente!',
                 icon: 'success'
                 }).then((result)=>{
                           if(result.value)
                           {
                           window.location='index.php?modulo=clientes'
                           }
                 });
               </script>";
     } else {
         echo "<script>
                 Swal.fire({
                 title: 'ERROR!',
                 text: 'Ne se creo!',
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