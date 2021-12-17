<?php
// 1) Conexão
include '../../system/connect.php';

// 2) Pega o valor das variáveis
$get_area = $_GET['f_area_id'];


// 3) Seleção
$sql= "SELECT * FROM tbDisciplinas WHERE disc_area = $get_area";
$sqlAreas = "SELECT * FROM tbAreas";

// 4) Aplicação    
$discPorAreas = mysqli_query($conn, $sql);
$areas = mysqli_query($conn, $sqlAreas);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  
  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  
  <!-- CSS projeto -->
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <div class="container">
        <h1>Disciplinas por áreas</h1>
         <table class="table table-striped">
            <!-- Cabeçalho -->
            <thead>
                <tr>
                    <th scope="col">Cód</th>
                    <th scope="col">Disciplina</th>
                    <th scope="col">Área</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Apagar</th>
                </tr>
            </thead>
            <!-- Corpo da tabela -->
            <tbody>
                <!-- Recebe os campos da tabela do banco de dados -->
                <?php
                    while($cols = mysqli_fetch_array($discPorAreas))
                    {
                        // Pega os valores no bd e joga nas variáveis
                        $disc_id = $cols['disc_id'];
                        $disc_nome = $cols['disc_nome'];
                        $disc_area = $cols['disc_area'];
                ?> 
                    <tr>
                        <!-- Editar -->
                        <form action="discEditar.php" method="get" >
                            <th scope="row"><input class="pb-2" type="text" name ="f_disc_id" maxlength="11" size="4"  required readonly="true" value="<?php echo $disc_id; ?>"></th>
                            <td class=""><input class="pb-2" type="text" name ="f_disc_nome" maxlength="50"            required          value="<?php echo $disc_nome; ?>"></td>
                            <td class=""><input class="pb-2" type="text" name ="f_disc_area" maxlength="40"  size="4"  required          value="<?php echo $disc_area; ?>"></td>
                            <td class="text-center"><button type="submit" title="Editar disciplina" class="btn btn-success"><i class="bi bi-arrow-repeat"></i></button></td>
                        </form>
                        <!-- Excluir -->
                        <td class="text-left">
                            <form action="php/CRUD/discExcluir.php" method="get">
                            <input type="hidden" name="f_disc_id" value="<?php echo $disc_id; ?>">
                                <button type="submit" title="Apagar disciplina" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                            </form>    
                        </td>
                    </tr>
                <?php }; ?>
            </tbody>    
        </table>
        <a class="dropdown-item text-muted" href="../../index.php?link=35"><i class="bi bi-journal-check"></i> Seleciona área</a>
    </div>
</body>
</html>


