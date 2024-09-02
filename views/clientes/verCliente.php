<?php 
    if (!empty($_GET['cualEditar'])) {
        $cliente = VerClienteController::selectId($_GET['cualEditar']);
    }
    
    ?>
  <div
        class="table-responsive"
    >
        <table
            class="table table-dark" id="miTabla"
        >
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">APELLIDO</th>
                    <th scope="col">DOCUMENTO</th>
                    <th scope="col">CIUDAD</th>
                    <th scope="col">DIA</th>
                    <th scope="col">CREDITO</th>
                </tr>
            </thead>
            <tbody>
                  <tr>
                    <td><?=$cliente['id'] ?></td>
                    <td><?=$cliente['nombre'] ?></td>
                    <td><?=$cliente['apellido'] ?></td>
                    <td><?=$cliente['documento'] ?></td>
                    <td><?=$cliente['ciudad'] ?></td>
                    <td><?=$cliente['dia'] ?></td>
                    <td>
                        <a href="index.php?modulo=ClientesCredito&cualCredito=<?=$cliente['id'] ?>" class="btn btn-danger">creditos</a>
                        <a href="index.php?modulo=crearCredito&cualCredito=<?=$cliente['id'] ?>" class="btn btn-primary">crear creditos</a>
                    </td>
                </tr>     
            </tbody>
        </table>
    </div>
    