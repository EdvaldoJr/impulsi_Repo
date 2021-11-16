<!-- conteúdo -->
<main>
  <!--1) Carousel -->
  <section class="container intro d-flex justify-content-center">
    <div id="IntroCarousel" class="carousel slide" data-bs-ride="carousel">
      <!-- indicadores dos slides -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#IntroCarousel" data-bs-slide-to="0" aria-label="Slide 1" class="active" aria-current="true" ></button>
        <button type="button" data-bs-target="#IntroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#IntroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
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
      <!-- btn anterior -->
      <button class="carousel-control-prev" type="button" data-bs-target="#IntroCarousel" data-bs-slide="prev">
        <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
        <i class="bi bi-chevron-compact-left"></i>  
        <span class="visually-hidden" >Previous</span>
      </button>
      <!-- btn seguinte -->
      <button class="carousel-control-next" type="button" data-bs-target="#IntroCarousel" data-bs-slide="next">
        <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
        <i class="bi bi-chevron-compact-right"></i>  
        <span class="visually-hidden">Next</span>
      </button>
    </div>  
  </section>

  <!--2) Planos -->
  <section class="planos container pb-2 mb-3 mt-3 section-light">
    <head>
      <h1 class="titulo-dark">Nossos Planos</h1>
      <h3 class="subtitulo-dark">Estude conosco!</h3>
    </head>
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

  <!--3) Metodologia -->
  <section class="metodo container mb-3 section-dark ">  
    <div class="col-12">
      <head>
        <h1 class="titulo-light pt-2">Conheça nossa métodologia</h1> 
        <h3 class="subtitulo-light">Aprenda a estudar</h3>
      </head>  
      <div class="container corpo-texto-dark">
        <div class="row align-items-start">
          <div class="col corpo-texto-light">
            <article>
              <p>
                O impulsi utiliza duas metodologias inovadoras de aprendizagem:
              </p>
            </article>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active" aria-current="true""> Método Feymman</a>
                <a href="#" class="list-group-item list-group-item-action"> PBL(Problem based learning)</a>
                <!-- <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">A disabled link item</a> -->
            </div>
          </div>
          <div class="col texto">
            <div class="accordion" id="accordionMetodo">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <i class="bi bi-hourglass-split"> Gestão de tempo</i> 
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionMetodo">
                <div class="accordion-body">
                  <strong> Otimize seu tempo </strong> organizando sua rotina de estudos para melhorar a eficiência do aprendizado.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <i class="bi bi-newspaper"> Plano de estudos</i> 
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionMetodo">
                <div class="accordion-body">
                  <strong>Defina metas de estudos.</strong> Saiba onde quer chegar com um plano de estudos eficiente, cobrindo todo o programa em cada matéria!
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <i class="bi bi-list-check"> Checklist de estudos</i> 
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionMetodo">
                <div class="accordion-body">
                  <strong>Saiba o que falta estudar</strong> e quais os assuntos mais importantes.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <i class="bi bi-arrow-clockwise"> Revisão periódica</i> 
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionMetodo">
                <div class="accordion-body">
                  <strong>Fixe seu aprendizado!</strong> Revisões espaçadas para consolidar o aprendizado.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                <i class="bi bi-pencil-square"> Simulados</i>
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionMetodo">
                <div class="accordion-body">
                  <strong>Teste seu aprendizado </strong> com as questões do ENEM e dos melhores vestibulares do país.
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
      <br>
      <!-- botão saiba mais -->
      <div class="d-grid">
        <button class="btn btn-primary" type="button">Saiba mais <i class="bi bi-arrow-right-circle"></i></button>
      </div>
    </div>
    <hr>
  </section>

  <!--4) Objetivos -->
  <section class="objetivos container mb-3 section-light">
    <h1 class="titulo-dark">Defina seus objetivos</h1>
    <h3 class="subtitulo-dark"> Aonde você quer chegar?</h3>
    <div class="container">
      <svg version="1.1" viewBox="0 0 409.9 201.3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <image width="409.9" height="201.3" preserveAspectRatio="none" xlink:href="img/Objetivos.png"/>
        <g fill-opacity="0">
          <!-- 1 -->
          <a xlink:title="O que eu quero?" xlink:href="#">
            <ellipse cx="157.5" cy="152.2" rx="28.22" ry="27.91"/>
          </a>
          <!-- 2 -->
          <a xlink:title="O que fazer?" xlink:href="#">
            <ellipse cx="298.4" cy="125.3" rx="23.48" ry="24.88"/>
          </a>
          <!-- 3 -->
          <a xlink:title="Qual metologia seguir?" xlink:href="#">
            <ellipse cx="116.1" cy="90.85" rx="19.83" ry="20.6"/>
          </a>
          <!-- 4 -->
          <a xlink:title="Plano de estudos" xlink:href="#">
            <ellipse cx="214.6" cy="72.87" rx="14.5" ry="15.43"/>
          </a>
          <!-- 5 -->
          <a xlink:title="Gestão de tempo" xlink:href="#">
            <ellipse cx="148.8" cy="55.19" rx="12.68" ry="12.37"/>    
          </a>
          <!-- 6 -->
          <a xlink:title="Revisão de conteúdo" xlink:href="#">
            <ellipse cx="251.2" cy="55.04" rx="9.635" ry="9.17"/>  
          </a>
          <!-- 7 -->
          <a xlink:title="Universidade" xlink:href="#">
            <rect x="336.7" y="38.14" width="56.12" height="52.4"/>
          </a>
        </g>
      </svg>
      <div class="d-grid">
        <button class="btn btn-primary" type="button">Saiba mais <i class="bi bi-arrow-right-circle"></i></button>
      </div>
    </div>
  </section>

  <!--5) Material -->
  <section class="material container section-color-blue">   
    <head>
      <h1 class="titulo-light">Material didático</h1>
      <h3 class="subtitulo subtitulo-light">Nosso material</h3>
    </head>
    <div class="row justify-content-around corpo-texto-light">
      <!-- Card Temas + cobrados -->
      <div class="maincontainer col-5 col-sm-6 col-md-2  p-2 m-2 justify-content-center">
        <div class="thecard">
          <div class="thefront">
            <head>
              <img class="imgMat" src="img/files.svg" alt="">
            </head>
            <footer>
              <h5>Temas + cobrados </h5>
            </footer>
          </div>
          <div class="theback">Trás</div>
        </div>
      </div>

      <!-- Card Edital verticalizado -->
      <div class="maincontainer col-5 col-sm-6 col-md-2  p-2 m-2 justify-content-center">
        <div class="thecard">
          <div class="thefront">
            <head>
              <img class="imgMat" src="img/file-arrow-up.svg" alt="">
            </head>
            <footer>
              <h5>Edital verticalizado </h5>
            </footer>
          </div>
          <div class="theback">Trás</div>
        </div>
      </div>

      <!-- Card Exercício resolvidos -->
      <div class="maincontainer col-5 col-sm-6 col-md-2  p-2 m-2 d-flex justify-content-center">
        <div class="thecard">
          <div class="thefront">
            <head>
              <img class="imgMat" src="img/pencil-square.svg" alt="">
            </head>
            <footer>
              <h5> Exercícios resolvidos </h5>
            </footer>
          </div>
          <div class="theback">Trás</div>
        </div>
      </div>

      <!-- Card Simulados -->
      <div class="maincontainer col-5 col-sm-6 col-md-2  p-2 m-2 ustify-content-center">
        <div class="thecard">
          <div class="thefront">
            <head>
              <img class="imgMat" src="img/back.svg" alt="">
            </head>
            <footer>
              <h5> Simulados </h5>
            </footer>
          </div>
          <div class="theback">Trás</div>
        </div>
      </div>
    </div>  
      
    <div class="row justify-content-around corpo-texto-light">
      <!-- Card Vídeo aulas -->
      <div class="maincontainer col-5 col-sm-6 col-md-2 p-2 m-2 ustify-content-center">
        <div class="thecard">
          <div class="thefront">
            <head>
              <img class="imgMat" src="img/person-video.svg" alt="">
            </head>
            <footer>
              <h5> Video aulas </h5>
            </footer>
          </div>
          <div class="theback">Trás</div>
        </div>
      </div>
      
      <!-- Card Vídeo resoluções -->
      <div class="maincontainer col-5 col-sm-6 col-md-2 p-2 m-2 ustify-content-center">
        <div class="thecard">
          <div class="thefront">
            <head>
              <img class="imgMat" src="img/person-video2.svg" alt="">
            </head>
            <footer>
              <h5> Video resoluções </h5>
            </footer>
          </div>
          <div class="theback">Trás</div>
        </div>
      </div>

      <!-- Card PDF -->
      <div class="maincontainer col-5 col-sm-6 col-md-2 p-2 m-2 ustify-content-center">
        <div class="thecard">
          <div class="thefront">
            <head>
              <img class="imgMat" src="img/file-pdf.svg" alt="">
            </head>
            <footer>
              <h5> PDF </h5>
            </footer>
          </div>
          <div class="theback">Trás</div>
        </div>
      </div>

      <!-- Banco de provas -->
      <div class="maincontainer col-5 col-sm-6 col-md-2 p-2 m-2 ustify-content-center">
        <div class="thecard">
          <div class="thefront">
            <head>
              <img class="imgMat" src="img/server.svg" alt="">
            </head>
            <footer>
              <h5> Banco de provas </h5>
            </footer>
          </div>
          <div class="theback">Trás</div>
        </div>
      </div>
    </div>
    
    <div class="d-grid gap-2 p-3">
      <button class="btn btn-primary mb-1" type="button">Saiba mais <i class="bi bi-arrow-right-circle"></i></button>
    </div>
    <hr>
  </section>

  <!--6) Team -->
  <section class="team container section-light">  
    <div class="col-12">
      <head>
        <h1 class="titulo-dark">Team</h1>
        <h3 class="subtitulo-dark">Estude com doutores</h3>
      </head>
    </div>
    <div class="d-grid gap-2 p-3">
      <button class="btn btn-primary mb-1" type="button">Saiba mais <i class="bi bi-arrow-right-circle"></i></button>
    </div>
  </section>
  
  <!--7) Depoimentos -->
  <section class="depoimentos container section-dark">
    <hr>
    <div class="col-12">
      <head>
        <h1 class="titulo-light">Depoimentos</h1>
        <h3 class="subtitulo-light" >Veja os aprovados!!!</h3>
      </head>
    </div>
    <div class="d-grid gap-2 p-3">
        <button class="btn btn-primary mb-1" type="button">Saiba mais <i class="bi bi-arrow-right-circle"></i></button>
      </div>
    <hr>
  </section>

  <!--8) Serviços -->
  <section class="servicos container section-light">
    <div class="col-12 col-md-12 col-lg-12">
      <head>
        <h1 class="titulo-dark">Nossos serviços</h1>
        <h3 class="subtitulo-dark">Estude da forma correta!</h3>
      </head>  
        <ul>
          <li><a href="">Mentorias</a></li>
          <li><a href="">Cursos</a></li>
          <li><a href="">Central de dúvidas</a></li>
          <li><a href="">Diagnóstico pedagógico</a></li>
          <li><a href="">Plano de estudos</a></li>
          <li><a href="">Simulados</a></li>
        </ul>
    <div class="d-grid gap-2 p-3">
      <button class="btn btn-primary mb-1" type="button">Saiba mais <i class="bi bi-arrow-right-circle"></i></button>
    </div>
  </section>

  <!--9) Concursos -->
  <section class="concursos container section-dark">
  <hr>  
    <head>
      <h1 class="titulo-light">Próximos concursos</h1>
      <h3 class="subtitulo-light">Saia na frente!</h3>
    </head>
    <div class="d-grid gap-2 p-3">
        <button class="btn btn-primary mb-1" type="button">Saiba mais <i class="bi bi-arrow-right-circle"></i></button>
      </div>
    <hr>   
  </section>
  
  <!--10) Dúvidas -->
  <section class="duvidas container section-light">  
    <head class="col-12 col-md-12 col-lg-12">
      <h1 class="titulo-dark">O que você precisa saber!</h1>
      <h3 class="subtitulo-dark">Tire suas dúvidas!</h3>
    </head>
    <div class="d-grid gap-2 p-3">
      <button class="btn btn-primary mb-1" type="button">Saiba mais <i class="bi bi-arrow-right-circle"></i></button>
    </div>
  </section>
    
</main>