<div>
    <h1 class="text-center my-5">CREDITOS</h1>
</div>

<?php
if (!empty($_GET['cualCredito'])) {
    $cliente = CreditosController::selectCredits($_GET['cualCredito']);
}
?>
<div class="table-responsive">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">CLIENTE ID</th>
                <th scope="col">MONTO</th>
                <th scope="col">SALDO</th>
                <th scope="col">FECHA</th>
                <th scope="col">ABONO</th>
                <th scope="col">HISTORIAL</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($cliente as $key => $cliente) :
            ?>
                <tr>
                    <td><?= $cliente['id'] ?></td>
                    <td><?= $cliente['cliente_id'] ?></td>
                    <td><?= $cliente['monto'] ?></td>
                    <td><?= $cliente['saldo'] ?></td>
                    <td><?= $cliente['fecha'] ?></td>
                    <td><a href="index.php?modulo=ClienteAbono&cualAbono=<?= $cliente['id'] ?>" class="btn btn-success">ABONO</a></td>
                    <td><a href="index.php?modulo=ClienteHistorial&cualAbono=<?= $cliente['id'] ?>" class="btn btn-primary">HISTORIAL</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>