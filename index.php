<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Impulsi</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
        <!-- Bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
   
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-dark"><img class="img-fluid" src="img/logo-impulsi-hor-transp-w.png" alt=""> </div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="bi bi-book"></i> Cursos</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="bi bi-calendar-day"></i> Agenda</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="bi bi-pen"></i> ENEM</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="bi bi-people"></i> Concursos</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="bi bi-chat-text"></i> Comentários</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="bi bi-card-checklist"></i> Estudos</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle"><i class="bi bi-text-indent-right"> Menu</i></button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item"><a><i class="bi bi-bootstrap-fill">  Bootstrap 5</i></a></li>
                                <li class="nav-item active"><a class="nav-link" href="#!"><i class="bi bi-house"></i> Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!"><i class="bi bi-link-45deg"></i> Link</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-person-square"></i> Perfil</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!"><i class="bi bi-box-arrow-in-right"></i> Entrar</i></a>
                                        <a class="dropdown-item" href="#!"><i class="bi bi-stack"></i> Meus planos</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!"><i class="bi bi-box-arrow-left"></i> Sair</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                
                <!-- Page content-->
                <div class="container-fluid">
                    <img class="img-fluid col-12" src="img/banner.png" alt="Banner superior">
                    <h1 class="mt-4">Simple Sidebar</h1>
                    <p>
                        <!-- alt="..." on <img> element -->
                            The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
                    <p>
                        Make sure to keep all page content within the
                        <code>#page-content-wrapper</code>
                        . The top navbar is optional, and just for demonstration. Just create an element with the
                        <code>#sidebarToggle</code>
                        ID which will toggle the menu when clicked.
                    </p>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
