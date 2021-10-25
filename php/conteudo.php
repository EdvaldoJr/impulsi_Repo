<!-- conteúdo -->
<main>
  <!-- side bar -->
  <button class="btn btn-Dark btn-sidebar" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
      <i class="btn-sidebar bi bi-arrow-bar-right"></i>
  </button>
  <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar" aria-labelledby="offcanvasExampleLabel bg-dark">
    <div class="offcanvas-header">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="img/favicon-16x16.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>mdo</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="#">Novo projeto...</a></li>
        <li><a class="dropdown-item" href="#">Configurações</a></li>
        <li><a class="dropdown-item" href="#">Perfil</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sair</a></li>
      </ul>
      <h5 class="offcanvas-title justify-content-lg-start" id="iidebarLabel">Perfil</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
      <div class="offcanvas-body">
        <div class="list-group list-group-flush">
          <a class="mat list-group-item list-group-item-action list-group-item-light p-2" href="#!"><img src="icons/atom-solid.svg" alt="Fisica" class="bi" width="30" height="24"> Física</a>
          <a class="mat list-group-item list-group-item-action list-group-item-light p-2" href="#!"><img src="icons/flask-solid.svg" alt="Quimica" class="bi" width="30" height="24"> Química</a>
          <a class="mat list-group-item list-group-item-action list-group-item-light p-2" href="#!"><img src="icons/subscript-solid.svg" alt="Matemática" class="bi" width="30" height="24"> Matemática</a> 
          <a class="mat list-group-item list-group-item-action list-group-item-light p-2" href="#!"><i class="bi bi-skip-backward"></i> História</a>
          <a class="mat list-group-item list-group-item-action list-group-item-light p-2" href="#!"><i class="bi bi-compass"></i> Geografia</a>
          <a class="mat list-group-item list-group-item-action list-group-item-light p-2" href="#!"><img src="icons/circle-question-solid.svg" alt="Matemática" class="bi" width="30" height="24"> Filosofia</a> 
          <a class="mat list-group-item list-group-item-action list-group-item-light p-2" href="#!"><i class="bi bi-chat-quote"></i> Português</a>
          <a class="mat list-group-item list-group-item-action list-group-item-light p-2" href="#!"><i class="bi bi-book"></i> Literatura</a>
          <a class="mat list-group-item list-group-item-action list-group-item-light p-2" href="#!"><i class="bi bi-translate"></i> Inglês</a>
          <a class="mat list-group-item list-group-item-action list-group-item-light p-2" href="#!"><i class="bi bi-pencil-square"></i> Redação</a>
        </div>
          
        <div class="dropdown mt-3">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
                Dropdown button
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
      </div>
  </div>
  
  <section class="container intro d-flex bg-amarelo-claro">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/carousel1.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Primeiro ano</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
      <div class="carousel-item">
        <img src="img/carousel2.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block cinza-claro">
          <h5>Segundo ano</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/carousel3.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block cinza-claro">
          <h5>Terceiro ano</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>  
  </section>

  <section class="container planos container bg-whitesmoke">
    <h2>Nossos Planos</h2>
    <div class="row">
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card">
          <img src="img/card1.png" alt="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Plano 1</h5>
            <p class="card-text">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum optio molestias error iure sunt voluptates ipsa deleniti eveniet, vero exercitationem qui at nulla eos a reprehenderit cum minus dicta atque.
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card">
          <img src="img/card2.png" alt="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Plano 2</h5>
            <p class="card-text">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum optio molestias error iure sunt voluptates ipsa deleniti eveniet, vero exercitationem qui at nulla eos a reprehenderit cum minus dicta atque.
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card">
          <img src="img/card3.png" alt="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Plano 3</h5>
            <p class="card-text">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum optio molestias error iure sunt voluptates ipsa deleniti eveniet, vero exercitationem qui at nulla eos a reprehenderit cum minus dicta atque.
            </p>
          </div>
        </div>
    </div>
  </section>

  <section class="metodo container bg-unique-color-dark font-whitesmoke py-2">  
    <div class="col-12 col-md-6 col-lg-4">
      <h2>1) Método</h2>
      <p>Aprenda a estudar</p>
      <ul>
        <li><a href="">Gestão de tempo</a></li>
        <li><a href="">Organização de conteúdos</a></li>
        <li><a href="">Roteiro de estudos</a></li>
        <li><a href="">Definição de metas diárias e mensais</a></li>
        <li><a href="">Plano de estudos</a></li>
        <li><a href="">Checklist de assuntos estudados</a></li>
        <li><a href="">Revisão periódica</a></li>
        <li><a href="">Método Fyemman</a></li>
      </ul>
    </div>   
  </section>

  <section class="material container bg-marrom-escuro font-whitesmoke py-2">    
    <h2>2) Material didático</h2>
    <p>Aproveite o material gratuito!!!</p>
    <ul>
      <li><a href="">Temas mais cobrados</a></li>
      <li><a href="">Edital verticalizado</a></li>
      <li><a href="">Exercícios resolvidos</a></li>
      <li><a href="">Simulados</a></li>
      <li><a href="">Vídeo aulas</a></li>
      <li><a href="">Video resoluções</a></li>
      <li><a href="">PDF</a></li>
      <li><a href="">Banco de provas</a></li>
    </ul>  
  </section>

  <section class="concursos container bg-special-color-dark titulo-special-color py-2">  
    <div class="col-12 col-md-6 col-lg-4">
      <h2>3) Team</h2>
      <p>Estude com doutores</p>
    </div>   
  </section>
  
  <section class="depoimentos container bg-elegant-color-dark font-whitesmoke py-2">
    <div class="col-12 col-md-6 col-lg-4">
      <h2>4) Depoimentos</h2>
      <p>Veja quem foi aprovado!!!</p>
    </div>   
  </section>

  <section class="servicos container subtitul-laranja-color font-whitesmoke py-2">
    <div class="col-12 col-md-6 col-lg-4">
      <h2>5) Nossos serviços</h2>
      <p>Estude da forma correta</p>
      <ul>
        <li><a href="">Mentorias</a></li>
        <li><a href="">Cursos</a></li>
      </ul>
    </div>   
  </section>

  <section class="concursos container bg-cinza-morno font-whitesmoke py-2">  
    <div class="col-12 col-md-6 col-lg-4">
      <h2>7) Próximos concursos</h2>
      <p>ENEM 2021</p>
    </div>   
  </section>
  
  <section class="concursos container bg-elegant-color-dark font-whitesmoke py-2">  
    <div class="col-12 col-md-6 col-lg-4">
      <h2>8) Tire suas dúvidas</h2>
      <p>Contatos</p>
    </div>   
  </section>
    
</main>