<?php 
    if (!empty($_GET['cualCredito'])) {
        $cliente = CrearCreditoController::selectId($_GET['cualCredito']);
    }
    
    ?>
<div>
    <h1 class="text-center">CREAR CREDITO</h1>
    <form action="index.php?modulo=crearCredito" method="post">
    <input type="hidden" name="crearCredito">
        <div>
            <label for="nombre">CLIENTE ID</label>
            <input type="text" name="cliente_id" id="cliente_id" class="form-control mb-3" value="<?=$cliente['id']?>" readonly>
        </div>
        <div>
            <label for="nombre">MONTO</label>
            <input type="text" name="monto" id="monto" class="form-control mb-3">
        </div>
        <div>
            <label for="nombre">SALDO</label>
            <input type="text" name="saldo" id="saldo" class="form-control mb-3">
        </div>
        <div>
            <label for="nombre">FECHA</label>
            <input type="datetime-local" name="fecha" id="fecha" class="form-control mb-3">
        </div>
        <input type="submit" value="CREAR" class = "btn btn-primary w-100">
    </form>

</div>

<?php 
if (isset($_POST['crearCredito'])) {
    $cliente_id = $_POST['cliente_id'];
    $monto = $_POST['monto'];
    $saldo = $_POST['saldo'];
    $fecha = $_POST['fecha'];

    $crear = new CrearCreditoController();
    $crear->insertCredito($cliente_id, $monto, $saldo, $fecha);
}
?>
