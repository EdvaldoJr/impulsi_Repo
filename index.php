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
        <!-- insere os arquivos do cabeçalho, conteúdo e rodapé -->
        <div>

            <?php 
                $link= isset($_GET["link"])?$_GET["link"]:1;
                $pag[1]="php/home.php";
                $pag[2]="php/painelDoAluno.php";
                $pag[3]="php/roteiroEstudos.php";
                $pag[4]="php/agenda.php";    
                $pag[5]="php/meusPlanos.php";
                $pag[6]="php/outrosConcursos.php";
                
                echo "<pre>";
                print_r($pag);
    
                echo "a página é: ". $pag[$link];
                ?>  
        </div>
        <?php   
            include 'php/topmenu.php';
            include 'php/conteudo.php';
            include 'php/rodape.php';
        ?>     
        
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
