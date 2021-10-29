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
        
        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm /bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <!-- CSS projeto -->
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
        <div class="site">
            <!-- inclui o menu superior -->
            <?php   
                include 'php/topmenu.php';
            ?>
            <!-- inclui o corpo do site  -->
            <div class="base-geral">
                <?php 
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
                    
                    include $pag[$link];
                ?>  
            <?php include 'php/rodape.php'; ?>     
            </div>
        </div>
        <!-- inclui o rodapé -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
