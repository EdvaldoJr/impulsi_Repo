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
                <!-- Inserir -->
                <form action="php/cadastro.php" method="get">
                    <select id="my-select" class="form-control py-2" name="f_subt_top_id" required>
                        <option>Escolha um tópico:</option>
                        <?php
                            $sql = "SELECT * FROM tbTopico";
                            $result = mysqli_query($conn, $sql);
                            while($row_result = mysqli_fetch_assoc($result)){?>
                                <option value="<?php echo $row_result['top_id'];?>"> <?php echo $row_result['top_nome'];?>
                                </option><?php
                            }
                        ?>
                    </select>
                    <input class="form-control my-2" type="text" name="f_subt_nome" maxlength="70" required placeholder="Digite um sub-tópico...">
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary my-2 d-block" type="submit" title="Inserir sub-título" ><i class="bi bi-plus-lg"></i> Inserir subtópico</button>
                    </div> 
                </form>
                <br>
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
                            <th scope="row"><input class="pb-2" type="text" name ="f_subt_id" maxlength="11" size="4" readonly="true"  value="<?php echo $subt_id; ?>"></th>
                            <td class=""><input class="pb-2" type="text" name ="f_subt_nome" maxlength="70"             value="<?php echo $subt_nome; ?>"></td>
                            <td class=""><input class="pb-2" type="text" name ="f_subt_top_id" maxlength="11" size="4" value="<?php echo $subt_top_id; ?>"></td>
                            <td class="text-center">
                                <button type="submit" title="Editar sub-tópico" class="btn btn-success"><i class="bi bi-arrow-repeat"></i></button>
                            </td>
                        </form>
                        <!-- Excluir -->
                        <td class="text-left">
                            <form action="php/excluirSubtopico.php" method="get">
                            <input type="hidden" name="f_subt_id_del" value="<?php echo $subt_id; ?>">
                                <button type="submit" title="Apagar sub-tópico" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                            </form>    
                        </td>
                    </tr>
                    <?php }; ?>
                </tbody>
            </table>
    </fieldset>
    <a class="dropdown-item text-muted" href="index.php?link=28"><i class="bi bi-journal-text"></i> Cadastrar módulo</a>    
    <a class="dropdown-item text-muted" href="index.php?link=27"><i class="bi bi-list-ul"></i> Cadastrar tópico</a>
</div>