<div>
    <h1 class="text-center my-5">HISTORIAL DEL CREDITO</h1>
</div>

<?php
if (!empty($_GET['cualAbono'])) {
    $cliente = SelectAbonosController::selectAbonos($_GET['cualAbono']);
}
?>
<div class="table-responsive">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">ABONO</th>
                <th scope="col">FECHA</th>
                <th>ACCION</th>
                <th>CORREGIR</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($cliente as $key => $cliente) :
            ?>
                <tr>
                    <td><?= $cliente['abono'] ?></td>
                    <td><?= $cliente['fecha'] ?></td>
                    <td><?=$cliente['accion']?></td>
                    <td>
                        <a href="index.php?modulo=corregir&cualCorregir=<?=$cliente['historial_id']?>&abono=<?=$cliente['id']?>" class="btn btn-danger">CORREGIR</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>