<?php
    // 1)Conexão
        include_once("system/connect.php");
        
    //  2) Seleção
    // $area_id = $_GET['f_area_id'];
    $area_id = 5;
    $sql="SELECT * FROM tbDisciplinas WHERE disc_area = '$area_id'";

    //  3) aplicação
        $disc = mysqli_query($conn,$sql) or die(mysqli_error($conn));
?>

<div class="container">
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
                while($cols = mysqli_fetch_array($disc))
                {
                    // Pega os valores no bd e joga nas variáveis
                    $disc_id = $cols['disc_id'];
                    $disc_nome = $cols['disc_nome'];
                    $disc_area = $cols['disc_area'];
            ?> 
                <tr>
                    <!-- Editar -->
                    <form action="php/CRUD/discEditar.php" method="get" >
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
</div>
