

<div>
    <h1 class="text-center">CORREGIR ABONO</h1>
    <?php
    if (!empty($_GET['cualCorregir'])) {
        $cliente = CorregirController::selectIdCredit($_GET['cualCorregir']);
        $historial = CorregirController::selectIdHistorial($_GET['abono']);
    }
    ?>
    <form action="index.php?modulo=corregir" method="post">
        <input type="hidden" name='id' value="<?= $cliente['id']?>">
        <input type="hidden" name='cliente_id' value="<?= $cliente['cliente_id']?>">
        <input type="hidden" name='historial_abono' value="<?= $historial['abono'] ?>">
        
        <div>
            <label for="nombre">MONTO</label>
            <input type="text" name="monto" id="monto" class="form-control mb-3" value="<?= $cliente['monto']?>" readonly>
        </div>
        <div>
            <label for="nombre">SALDO</label>
            <input type="text" name="saldo" id="saldo" class="form-control mb-3" value="<?= $cliente['saldo']
            ?>" readonly>
        </div>
        <div>
            <label for="nombre">FECHA</label>
            <input type="datetime-local" name="fecha" id="fecha" class="form-control mb-3">
        </div>
        <div>
            <label for="nombre">ABONO</label>
            <input type="number" name="abono" id="abono" class="form-control mb-3" required>
        </div>
        <div>
            <label for="accion">ACCION</label>
            <input type="acccion" name="accion" id="abono" class="form-control mb-3" required>
        </div>
        <input type="submit" value="ABONAR" class="btn btn-primary w-100">
    </form>
</div>

<?php

if (isset($_POST['cliente_id'])) {
    $id = $_POST['id'];
    $cliente_id = $_POST['cliente_id'];
    $monto = $_POST['monto'];
    $abono = $_POST['abono'];
    $fecha = $_POST['fecha'];
    $accion = $_POST['accion'];
    $historial_abono = $_POST['historial_abono'];
    $saldo = $_POST['saldo'] + $historial_abono;
    $saldo_nuevo = $saldo - $abono;

    $clientesController = new ClientesController();
    $clientesController->updateCredit($id, $cliente_id, $monto, $saldo_nuevo, $fecha);
    $AbonosController = new AbonosController();
    $AbonosController->insertAbono($id, $abono,$accion, $fecha);

    
    if ($saldo_nuevo <= 0 )
    {   
        $clientesController->deleteHistorial($id);
        $clientesController->deleteCredit($id);
    }

}

?>
