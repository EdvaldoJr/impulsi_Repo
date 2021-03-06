<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Impulsi</title>
        <!-- Font awesome -->
        <script src="https://kit.fontawesome.com/61b4823e22.js" crossorigin="anonymous"></script>
        
        <!-- Font: Archivo Black  -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
        
        <!-- Font: Yantramanav  -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
        <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Yantramanav:wght@100&display=swap" rel="stylesheet">
        
        <!-- Font: Open Sans  -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Open+Sans:wght@300&family=Yantramanav:wght@100&display=swap" rel="stylesheet">




        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
        
        <!-- Bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        
        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm /bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <!-- CSS projeto -->
        <link rel="stylesheet" href="style.css">
        
    </head>
    <!-- corpo do site -->
    <body>
        <div class="site">
            <div class="base-geral">
                <?php 
                    // inclui o menu superior
                    include 'php/topmenu.php';
                    include 'php/sidebar.php';
                    
                    // atribui os links as p??ginas
                    $link= isset($_GET["link"])?$_GET["link"]:1;
                    $pag[1]="php/home.php";
                    $pag[2]="php/cursos.php";
                    $pag[3]="php/painelDoAluno.php";
                    $pag[4]="php/roteiroEstudos.php";
                    $pag[5]="php/agenda.php";    
                    $pag[6]="php/meusPlanos.php";
                    $pag[7]="php/outrosConcursos.php";
                    $pag[8]="php/editalVerticalizado.php";
                    $pag[9]="php/planoEstudos.php";
                    $pag[10]="php/enemResolvido.php";
                    $pag[11]="php/disciplinas.php";
                    $pag[12]="php/videoAulas.php";
                    $pag[13]="php/assuntosEstudados.php";
                    $pag[14]="php/tiraDuvidas.php";
                    $pag[15]="php/simulados.php";
                    $pag[16]="php/correcaoProvas.php";
                    $pag[17]="php/provasAnteriores.php";
                    $pag[18]="php/exerciciosResolvidos.php";
                    $pag[19]="php/bancoProvas.php";
                    $pag[20]="php/clientes.php";
                    $pag[21]="system/login.php";
                    $pag[22]="system/logout.php";
                    $pag[23]="system/signup.php";
                    $pag[24]="system/cadastrar.php";
                    $pag[25]="php/area.php";
                    $pag[26]="php/disciplinas.php";
                    $pag[27]="php/topico.php";
                    $pag[33]="php/CRUD/topCRUD.php";
                    $pag[28]="php/modulos.php";
                    $pag[29]="php/subtopico.php";
                    $pag[30]="php/CRUD/areaCRUD.php";
                    $pag[31]="php/CRUD/discCRUD.php";
                    $pag[32]="php/CRUD/modCRUD.php";
                    $pag[34]="php/CRUD/discPorArea.php";
                    $pag[35]="php/CRUD/discArea.php";
                    $pag[36]="php/CRUD/discForm.php";

                    
                    // verifica se o arquivo existe; se n??o existir joga para home.
                    if(file_exists($pag[$link])){
                        include $pag[$link];
                    }else{
                        include 'php/home.php';
                    }
                    
                    // inclui o rodap??
                    include 'php/rodape.php';
                ?>  
            </div>
        </div>
        <!-- inclui o rodap?? -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
            $('img[usemap]').rwdImageMaps();
        </script>
        <script>
            let toggleServ = document.querySelector('.toggleServ');
            let menuServ   = document.querySelector('.menuServ');
            toggleServ.onclick = function(){
                menuServ.classList.toggleServ('active')
            }
        </script>
    </body>
</html>
