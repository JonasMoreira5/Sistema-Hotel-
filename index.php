<!doctype html>
<html lang="pt-br" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Jonas Moreira">
    <title>Hotel SI</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

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

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
        z-index: 1500;
    }
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/css/sidebars.css" rel="stylesheet">
</head>

<body>
    <main class="d-flex flex-nowrap">
        <!-- <h1 class="visually-hidden">Sidebars examples</h1> -->
        <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
            <a href="?page=config.php"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi pe-none me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
                <span class="fs-4">Hotel SI</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page" href="?page=config.php">
                        <i class="bi bi-house-door me-2"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <i class="bi bi-wrench-adjustable me-2"></i>
                        Reservar
                    </a>
                </li>
                <li>
                    <a href="?page=listar-reserva" class="nav-link text-white" href="">
                        <i class="bi bi-card-checklist me-2"></i>
                        Lista de Reservas
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown text-white" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="bi bi-person-badge me-2"></i>
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
                        <i class="bi bi-person-badge me-2"></i>
                        Categoria
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?page=novo_quarto">Novo</a></li>
                        <li><a class="dropdown-item" href="?page=listar_quarto">Listar</a></li>
                    </ul>
                </li>
            </ul>

            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="img" width="32" height="32" class="rounded-circle me-2">
                    <strong>Admin</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="#">Configurações</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sair</a></li>
                </ul>
            </div>
            <div class="b-example-divider b-example-vr"></div>
    </main>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
          include("config.php");
          switch($_REQUEST["page"]){
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
                  
              default:
                ?>
                <div class="row marcador align-items-center">
                    <div class="col mx-auto text-center">
                        <figure class="figure">
                            <img src="assets\img\logo.png" class="figure-img img-fluid rounded" alt="...">
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