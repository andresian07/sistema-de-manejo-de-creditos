<div>
    <h1 class="text-center my-5">CLIENTES CREAR</h1>

    <form action="index.php?modulo=ClientesCrear" method="post" class="m-auto w-50">
        <input type="hidden" name="CrearCliente">
        <div>
            <label for="nombre">NOMBRE</label>
            <input type="text" name="nombre" id="nombre" class="form-control mb-3">
        </div>
        <div>
            <label for="apellido">APELLIDO</label>
            <input type="text" name="apellido" id="apellido" class="form-control mb-3">
        </div>
        <div>
            <label for="documento">DOCUMENTO</label>
            <input type="text" name="documento" id="documento" class="form-control mb-3">
        </div>
        <div>
            <label for="ciudad">CIUDAD</label>
            <input type="text" name="ciudad" id="ciudad" class="form-control mb-3">
        </div>
        <div>
            <label for="dia">DIA</label>
            <input type="text" name="dia" id="dia" class="form-control mb-3">
        </div>
        <input type="submit" value="AGREGAR" class = "btn btn-primary w-100">
    </form>
</div>

<?php
if (isset($_POST['CrearCliente'])) 
{
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $documento = $_POST['documento'];
    $ciudad = $_POST['ciudad'];
    $dia = $_POST['dia'];

    $agregar = new CrearController();
    $agregar->insert($nombre,$apellido,$documento,$ciudad,$dia);
}
?>