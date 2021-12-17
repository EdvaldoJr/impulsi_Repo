<?php
    // 1)Conexão
        include_once("system/connect.php");
    
    // 1)Seleção
        $sql= "SELECT * FROM tbTopico";

    // 1)Aplicação    
        $topico = mysqli_query($conn, $sql) or die(mysqli_error($conn));
?>

<!-- Sub-tópico -->
<div class="container">
    <fieldset>
        <legend> Editar tópicos </legend>
            <hr>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Cód</th>
                        <th scope="col">Tópico</th>
                        <th scope="col">Cód Mód</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Apagar</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Faz o php receber os campos da tabela do banco de dados -->
                    <?php
                        while($cols = mysqli_fetch_array($topico))
                        {
                            $top_id = $cols['top_id'];
                            $top_nome = $cols['top_nome'];
                            $top_mod_id = $cols['top_mod_id'];
                    ?> 
                        <tr>
                            <!-- Editar -->
                            <form action="php/CRUD/topEditar.php" method="get" >
                                <th scope="row"><input class="pb-2" type="text" name ="f_top_id" maxlength="11" size="4"  required readonly="true" value="<?php echo $top_id; ?>"></th>
                                <td class=""><input class="pb-2" type="text" name ="f_top_nome" maxlength="150"            required          value="<?php echo $top_nome; ?>"></td>
                                <td class=""><input class="pb-2" type="text" name ="f_top_mod_id" maxlength="40"  size="4"  required          value="<?php echo $top_mod_id; ?>"></td>
                                <td class="text-center">
                                    <button type="submit" title="Editar tópico" class="btn btn-success"><i class="bi bi-arrow-repeat"></i></button>
                                </td>
                            </form>
                            <!-- Excluir -->
                            <td class="text-left">
                                <form action="php/CRUD/topExcluir.php" method="get">
                                <input type="hidden" name="f_top_id" value="<?php echo $top_id; ?>">
                                    <button type="submit" title="Apagar tópico" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                </form>    
                            </td>
                        </tr>
                    <?php }; ?>
                </tbody>    
            </table>
    </fieldset>
    <a class="dropdown-item text-muted" href="index.php?link=27"><i class="bi bi-arrow-left"></i> Voltar</a>
    <!-- <a class="dropdown-item text-muted" href="index.php?link=25"><i class="bi bi-arrow-left"></i> Voltar</a> -->
</div>