<?php
//MODELS/clientes
require_once "models/clientes/conexion.php";
require_once "models/clientes/ClientesModel.php";
require_once "models/clientes/CrearModel.php";
require_once "models/clientes/EditarModel.php";
require_once "models/clientes/VerClienteModel.php";

//CONTROLLERS/clientes
require_once "controllers/clientes/ClientesController.php";
require_once "controllers/clientes/CrearController.php";
require_once "controllers/clientes/EditarController.php";
require_once "controllers/clientes/VerClienteController.php";

//MODELS/creditos
require_once "models/creditos/conexion.php";
require_once "models/creditos/AbonosModel.php";
require_once "models/creditos/CorregirModel.php";
require_once "models/creditos/CrearCreditoModel.php";
require_once "models/creditos/CreditosModel.php";
require_once "models/creditos/SelectAbonosModel.php";
require_once "models/creditos/VerCreditosModel.php";
require_once "models/creditos/datosMorososModel.php";


//CONTROLLERS/creditos
require_once "controllers/creditos/AbonosController.php";
require_once "controllers/creditos/CorregirController.php";
require_once "controllers/creditos/CrearCreditoController.php";
require_once "controllers/creditos/CreditosController.php";
require_once "controllers/creditos/SelectAbonosController.php";
require_once "controllers/creditos/VerCreditosController.php";
require_once "controllers/creditos/datosMorososController.php";
?>
<!doctype html>
<html lang="en">

<head>
    <title>MI COBRO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <!--sweetalert-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="container bg-secondary">
    <header>
        <!-- place navbar here -->
        <nav class="nav justify-content-center  ">
            <a href="index.php"><img src="imagenes/Logo c.png" alt="" width="50px" height="50px" class="rounded-circle"></a>
            <a class="nav-link active" href="index.php?modulo=inicio" aria-current="page">INICIO</a>
            <a class="nav-link" href="index.php?modulo=clientes">CLIENTES</a>
            <a class="nav-link" href="index.php?modulo=DatosMora">PERSONAS EN MORA</a>
        </nav>
    </header>
    <main>
        <!--CONTROLADOR FRONTAL-->
        <?php
        $modulo = isset($_GET['modulo']) ? $_GET['modulo'] : 'inicio';

        switch ($modulo) {
            case 'clientes':
                include_once "views/clientes/clientes.php";
                break;

            case 'ClientesCrear':
                include_once "views/clientes/crear.php";
                break;

            case 'clienteseditar':
                include_once "views/clientes/editar.php";
                break;

            case 'creditos':
                include_once "views/creditos/creditos.php";
                break;

            case 'Vercreditos':
                include_once "views/creditos/Vercreditos.php";
                break;

            case 'inicio':
                include_once "views/inicio.php";
                break;

            case 'eliminar':
                include_once "views/clientes/eliminar.php";
                break;

            case "verCliente":
                include_once "views/clientes/verCliente.php";
                break;

            case "dia":
                include_once "views/clientes/dia.php";
                break;



            case 'ClientesCredito':
                include_once "views/creditos/creditos.php";
                break;

            case 'ClienteAbono':
                include_once "views/creditos/abonos.php";
                break;

            case 'crearCredito':
                include_once "views/creditos/crearCredito.php";
                break;

            case 'ClienteHistorial':
                include_once "views/creditos/historial.php";
                break;
            
            case 'corregir';
            include_once "views/creditos/corregir.php";
            break;

            case 'DatosMora';
            include_once "views/creditos/datosMorosos.php";
            break;

            case 'TablaMorosos';
            include_once "views/creditos/tablaMorosos.php";
            break;
        }
        ?>
    </main>

    <footer class="p-3 text-center">
        <!-- place footer here -->
        <h3>CREADO POR ANDRES ZULUAGA</h3>
    </footer>

    <!-- jQuery (requerido para DataTables) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <script>
    $(document).ready(function() {
        $('#miTabla').DataTable({
            // Puedes agregar configuraciones adicionales aquí si lo deseas
            paging: true, // Habilita la paginación
            searching: true, // Habilita la búsqueda
            ordering: true, // Habilita la ordenación de columnas
            info: true // Muestra información sobre la tabla (ej. "Mostrando 1 a 10 de 57 entradas")
        });
    });
</script>

</body>

</html>