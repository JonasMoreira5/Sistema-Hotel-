<!doctype html>
<html lang="pt-br" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Jonas Moreira">
    <title>Hotel & Pousada</title>
    <link rel="shortcut icon" href="assets\img\hotel-icone.png">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="assets/css/sidebars.css" rel="stylesheet">
</head>

<body>

    <div class="d-flex flex-nowrap bg-light-subtle">
        <!-- Conteúdo da barra lateral -->

        <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <!-- adicionar imagem da logo -->
                <img src="assets\img\hotel-logo.jpg" class="figure-img img-fluid rounded me-4" style="width: 100px; height: 100px" alt="">
                <span class="fs-4">Hotel & Pousada</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="?page=index.php" class="nav-link active" aria-current="page" href="?page=config.php">
                        <i class="bi bi-house-door me-2"></i>
                        Home
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-togle text-white" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="bi bi-person-badge me-2"></i>
                        Reserva
                    </a>
                    <ul class="dropdown-menu flex-column">
                        <li><a class="dropdown-item" href="?page=nova_reserva">Nova</a></li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link text-white" href="?page=listar_reserva">
                        <i class="bi bi-card-checklist me-2"></i>
                        Lista de Reservas
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown text-white" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="bi bi-person-circle me-2"></i>
                        Cliente
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?page=novo_cliente">Novo</a></li>
                        <li><a class="dropdown-item" href="?page=listar_cliente">Listar</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown text-white" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="bi bi-person-badge me-2"></i>
                        Quarto
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?page=novo_quarto">Novo</a></li>
                        <li><a class="dropdown-item" href="?page=listar_quarto">Listar</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown text-white" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="bi bi-bookmarks-fill me-2"></i>
                        Categoria
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?page=nova_categoria">Nova</a></li>
                        <!-- <li><a class="dropdown-item" href="?page=listar_categoria">Listar</a></li> -->
                    </ul>
                </li>

            </ul>
            <hr>
        </div>
        <div class="b-example-divider b-example-vr"></div>
        <script src="assets/js/bootstrap.bundle.min.js"></script>

        <div class="container">
            <!-- Conteúdo principal -->
            <div class="row">
                <div class="col mt-5">
                    <?php
                    include("config.php");
                    switch (@$_REQUEST["page"]) {
                        case "novo_cliente":
                            include("novo-cliente.php");
                            break;
                        case "listar_cliente":
                            include("listar-cliente.php");
                            break;
                        case "salvar_cliente":
                            include("salvar-cliente.php");
                            break;
                        case "editar_cliente":
                            include("editar-cliente.php");
                            break;
                        case "nova_categoria":
                            include("nova-categoria.php");
                            break;
                        case "listar_categoria":
                            include("listar-categoria.php");
                            break;
                        case "salvar_categoria":
                            include("salvar-categoria.php");
                            break;
                        case "editar_categoria":
                            include("editar-categoria.php");
                            break;
                        case "novo_quarto":
                            include("novo-quarto.php");
                            break;
                        case "listar_quarto":
                            include("listar-quarto.php");
                            break;
                        case "salvar_quarto":
                            include("salvar-quarto.php");
                            break;
                        case "editar_quarto":
                            include("editar-quarto.php");
                            break;
                        case "nova_reserva":
                            include("nova-reserva.php");
                            break;
                        case "listar_reserva":
                            include("listar-reserva.php");
                            break;
                        case "salvar_reserva":
                            include("salvar-reserva.php");
                            break;
                        case "editar_reserva":
                            include("editar-reserva.php");
                            break;
                        case "abrir-config":
                            include("configuracao.php");
                            break;
    
                        default:
                    ?>
                            <div class="row marcador align-items-center">
                                <div class="col mx-auto text-center">
                                    <figure class="figure">
                                        <h1>
                                            Hotel Hackathon 
                                        </h1>
                                        <img src="#" class="img-fluid rounded" style="width: 150px; height: 150px" alt="...">
                                    </figure>
                                </div>
                            </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
        <script src="assets/js/sidebars.js"></script>
</body>

</html>