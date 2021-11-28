<?php
    // 1)Conexão
    include_once("system/connect.php");
    
    // 1)Seleção
    $sql= "SELECT * FROM tbSubtopico";

    // 1)Aplicação    
    $sub_topicos = mysqli_query($conn,$sql)
?>


<!-- Sub-tópico -->
<div class="container">
    <fieldset>
        <legend> Cadastrar sub-tópico</legend>
            <hr>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">cód</th>
                        <th scope="col">Sub-tópico</th>
                        <th scope="col">Tópico</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Apagar</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Faz o php receber os campos da tabela do banco de dados -->
                    <?php
                        while($cols = mysqli_fetch_array($sub_topicos)){
                            $subt_id= $cols['subt_id'];
                            $subt_nome = $cols['subt_nome'];
                            $subt_top_id = $cols['subt_top-id'];
                    ?> 
                    <tr>
                        <!-- Editar -->
                        <form action="php/editarSubtopico.php" method="get" >
                            <th scope="row"><input class="pb-2" type="text" name ="f_subt_id" maxlength="11" size="4"   value="<?php echo $subt_id; ?>"></th>
                            <td class=""><input class="pb-2" type="text" name ="f_subt_nome" maxlength="70"             value="<?php echo $subt_nome; ?>"></td>
                            <td class=""><input class="pb-2" type="text" name ="f_subt_top_id" maxlength="11" size="4" value="<?php echo $subt_top_id; ?>"></td>
                            <td class="text-center">
                                <button type="submit" title="Editar sub-título" class="btn btn-success"><i class="bi bi-arrow-repeat"></i></button>
                            </td>
                        </form>
                        <!-- Excluir -->
                        <td class="text-left">
                            <form action="php/excluirSubtopico.php" method="get">
                            <input type="hidden" name="f_subt_id_del" value="<?php echo $subt_id; ?>">
                                <button type="submit" title="Apagar sub-título" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                            </form>    
                        </td>
                    </tr>
            <?php }; ?>
            <tr>
                <!-- Inserir -->
                <form action="php/cadastro.php" method="get">
                    <td></td>
                    <td><input class="p-2" type="text" name="f_subt_nome" maxlength="70" required></td>
                    <td>
                        <select id="my-select" class="form-control" name="f_subt_top_id" required>
                            <option>Topico:</option>
                            <?php
                                $sql = "SELECT * FROM tbTopico";
                                $result = mysqli_query($conn, $sql);
                                while($row_result = mysqli_fetch_assoc($result)){?>
                                    <option value="<?php echo $row_result['top_id'];?>"> <?php echo $row_result['top_nome'];?>
                                    </option><?php
                                }
                            ?>
                        </select> 
                    </td>
                    <td></td>
                    <td><button type="submit" title="Inserir sub-título" class="btn btn-primary"><i class="bi bi-plus-lg d-block"></i></button></td>
                </form>
            </tr>
        </tbody>
        </table>
    </fieldset>
    <a class="dropdown-item text-muted" href="index.php?link=28"><i class="bi bi-journal-text"></i> Cadastrar módulo</a>    
    <a class="dropdown-item text-muted" href="index.php?link=27"><i class="bi bi-list-ul"></i> Cadastrar tópico</a>
</div>