<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!--Bootstrap JS-->
    <script src="js/bootstrap.js" defer></script>
    <!--Bootstrap ICON-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!--Estilos-->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>BLOG M&D</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark shadow">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-list"></i>
                </button>
                <h1 id="title_name">BLOG M&D</h1>
            </div>
        </nav>

        <div class="modal true" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-light" id="exampleModalLabel"><i class="icon_menu bi bi-list"></i> MENU</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul class="lista_base list-group list-group-flush">
                            <a href="#">
                                <li class="menu_lista group-item"><i class="bi bi-house-fill"></i>
                                    Início</li>
                            </a>
                            <hr>
                            <a href="#">
                                <li class="menu_lista group-item"><i class="bi bi-search"></i>
                                    Consulta</li>
                            </a>
                            <hr>
                            <a href="#">
                                <li class="menu_lista group-item"><i class="bi bi-person-plus-fill"></i>
                                    Adicionar</li>
                            </a>
                            <hr>
                            <a href="#">
                                <li class="menu_lista group-item"><i class="bi bi-person-lines-fill"></i>
                                    Alterar</li>
                            </a>
                            <hr>
                            <a href="#">
                                <li class="menu_lista group-item"><i class="bi bi-person-x-fill"></i>
                                    Excluir</li>
                            </a>
                            <hr>
                            <a href="#">
                                <li class="menu_lista group-item"><i class="bi bi-gear-fill"></i>
                                    Configurações</li>
                            </a>
                            <hr>
                            <a href="#">
                                <li class="menu_lista group-item"><i class="bi bi-box-arrow-left"></i>
                                    Sair</li>
                            </a>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


    </header>