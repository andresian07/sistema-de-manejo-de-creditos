<div>
  <h1 class="text-center my-5">CLIENTES</h1>
  <a href="index.php?modulo=ClientesCrear" class="btn btn-primary">AGREGAR</a>

  <div
    class="table-responsive">
    <table
      class="table table-dark" id="miTabla">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">NOMBRE</th>
          <th scope="col">APELLIDO</th>
          <th scope="col">DOCUMENTO</th>
          <th scope="col">CIUDAD</th>
          <th>DIA</th>
          <th scope="col">ACCION</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $clientes = ClientesController::selectALL();

        foreach ($clientes as $key => $cliente):
        ?>
          <tr>
            <td><?= $cliente['id'] ?></td>
            <td><?= $cliente['nombre'] ?></td>
            <td><?= $cliente['apellido'] ?></td>
            <td><?= $cliente['documento'] ?></td>
            <td><?= $cliente['ciudad'] ?></td>
            <td><?= $cliente['dia'] ?></td>
            <td>
              <a href="index.php?modulo=clienteseditar&cualEditar=<?= $cliente['id'] ?>" class="btn btn-warning"><img src="imagenes/editar.png" alt="" srcset="" width="30px" height="30px"></a>
              <a href="index.php?eliminar=<?= $cliente['id'] ?>&modulo=eliminar" class="btn btn-danger"><img src="imagenes/borrar.png" alt="" srcset="" width="30px" height="30px"></a>
              <a href="index.php?modulo=verCliente&cualEditar=<?= $cliente['id'] ?>" class="btn btn-success"><img src="imagenes/ver.png" alt="" srcset="" width="30px" height="30px"></a>
              <!-- Button trigger modal -->
              <!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="verCliente(<?= $cliente['id'] ?>)">
                         VER CLIENTE
                        </button>-->

            </td>
          </tr>
        <?php endforeach ?>

      </tbody>
    </table>
  </div>

</div>

<script>
  function verCliente(id) {
    var ajax = new XMLHttpRequest();
    ajax.open('GET', 'ajax/AjaxClientes.php?id=' + id);
    ajax.send();

    ajax.onreadystatechange = function() {
      var json = JSON.parse(ajax.response);

      document.querySelector('#nombreCompleto').innerHTML = json.nombre + ' ' + json.apellido;
      document.querySelector('#documento').innerHTML = json.documento;
      document.querySelector('#ciudad').innerHTML = json.ciudad;
    }
  }
</script>

<!-- Modal -->
<div class="modal fade" id="miTabla" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="nombreCompleto">NOMBRE COMPLETO</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <ul>
          <li id="documento"></li>
          <li id="ciudad"></li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
