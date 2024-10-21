<?php 
    if (!empty($_POST['fecha_inicial']))
    {
        $fechaInicial = $_POST['fecha_inicial'];
        $fechaFinal = $_POST['fecha_final'];

        $mostrarDatos = datosMorososController::selectEntreFechas($fechaInicial,$fechaFinal);
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
                <?php
                foreach ($mostrarDatos as $mostrar):
                ?>
                  <tr>
                    <td><?=$mostrar['id'] ?></td>
                    <td><?=$mostrar['historial_id'] ?></td>
                    <td><?=$cliente['abono'] ?></td>
                </tr>     
               <?php endforeach ?>
            </tbody>
        </table>
    </div>
    