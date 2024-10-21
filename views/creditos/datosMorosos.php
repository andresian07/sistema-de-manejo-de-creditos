<div>
    <h1 class="text-center my-5">datos personas morosas </h1>

    <form action="index.php?modulo=TablaMorosos" method="post" class="m-auto w-50">
        <div>
            <label for="nombre">fecha inicial</label>
            <input type="datetime-local" name="fecha_inicial" id="nombre" class="form-control mb-3" placeholder="ingrese la fecha inicial">
        </div>
        <div>
            <label for="apellido">fecha final</label>
            <input type="datetime-local" name="fecha_final" id="apellido" class="form-control mb-3" placeholder="ingrese la fecha final">
        </div>
        <input type="submit" value="BUSCAR" class = "btn btn-primary w-100">
    </form>
</div>

<?php

