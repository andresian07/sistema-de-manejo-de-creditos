<div>
    <h1 class="text-center my-5">CREDITOS</h1>
    <div
        class="table-responsive"
    >
        <table
            class="table table-dark" id="miTabla"
        >
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">CLIENTE ID</th>
                    <th scope="col">MONTO</th>
                    <th scope="col">SALDO</th>
                    <th scope="col">FECHA</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                 $creditos = ClientesController::selectAllCredits();

                 foreach ($creditos as $key => $credito):
                ?>
                  <tr>
                    <td><?=$credito['id'] ?></td>
                    <td><?=$credito['cliente_id'] ?></td>
                    <td><?=$credito['monto'] ?></td>
                    <td><?=$credito['saldo'] ?></td>
                    <td><?=$credito['fecha'] ?></td>
                </tr>
                <?php endforeach ?>
                
            </tbody>
        </table>
    </div>
    
</div>

