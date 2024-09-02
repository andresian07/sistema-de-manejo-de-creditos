<div>
    <h1 class="text-center my-5">CLIENTES EDITAR</h1>
    <?php 
    if (!empty($_GET['cualEditar'])) {
        $cliente = VerClienteController::selectId($_GET['cualEditar']);
    }
    
    ?>
 
    <form action="index.php?modulo=clienteseditar" method="post" class="m-auto w-50">
        <input type="hidden" name="EditarCliente">
        <input type="hidden" name='id' value="<?=$cliente['id']?>">
        <div>
            <label for="nombre">NOMBRE</label>
            <input type="text" name="nombre" id="nombre" class="form-control mb-3" value="<?=$cliente['nombre'] ?>">
        </div>
        <div>
            <label for="apellido">APELLIDO</label>
            <input type="text" name="apellido" id="apellido" class="form-control mb-3" value="<?=$cliente['apellido'] ?>">
        </div>
        <div>
            <label for="documento">DOCUMENTO</label>
            <input type="text" name="documento" id="documento" class="form-control mb-3" value="<?=$cliente['documento'] ?>">
        </div>
        <div>
            <label for="ciudad">CIUDAD</label>
            <input type="text" name="ciudad" id="ciudad" class="form-control mb-3" value="<?=$cliente['ciudad'] ?>">
        </div>
        <div>
            <label for="ciudad">DIA</label>
            <input type="text" name="dia" id="dia" class="form-control mb-3" value="<?=$cliente['dia'] ?>">
        </div>
        <input type="submit" value="EDITAR" class = "btn btn-primary w-100">
    </form>
</div>


<?php 
if (isset($_POST['id']) ) 
{
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $documento = $_POST['documento'];
    $ciudad = $_POST['ciudad'];
    $dia = $_POST['dia'];

    $editar = new EditarController();
    $editar->update($id,$nombre,$apellido,$documento,$ciudad,$dia);
}
?>
