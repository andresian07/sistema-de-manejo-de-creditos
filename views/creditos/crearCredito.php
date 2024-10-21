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
            <input type="text" name="cliente_id" id="cliente_id" class="form-control mb-3" value="<?= $cliente['id'] ?>" readonly>
        </div>
        <div>
            <label for="monto">MONTO</label>
            <select name="monto" id="monto" class="form-control mb-3">
                <?php
                //en este caso devemos generar la etiqueta number_format($i) por fuera
                // ya que le etiqueta opcion no puestra los valores que estan value 
                // Generar montos de 100000 hasta 1000000 en incrementos de 100000
                for ($i = 100000; $i <= 1000000; $i += 100000): ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php endfor; ?>
            </select>
        </div>
        <div>
            <label for="nombre">FECHA</label>
            <input type="datetime-local" name="fecha" id="fecha" class="form-control mb-3">
        </div>
        <input type="submit" value="CREAR" class="btn btn-primary w-100">
    </form>

</div>

<?php
if (isset($_POST['crearCredito'])) {
    $cliente_id = $_POST['cliente_id'];
    $monto = $_POST['monto'];
    $saldo = $monto + ($monto * 28) / 100;
    $fecha = $_POST['fecha'];

    $crear = new CrearCreditoController();
    $crear->insertCredito($cliente_id, $monto, $saldo, $fecha);
}
?>