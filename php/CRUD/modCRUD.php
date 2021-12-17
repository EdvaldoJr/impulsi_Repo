<?php
    // 1)Conexão
        include_once("system/connect.php");
    
    // 1)Seleção
        $sql= "SELECT * FROM tbModulo";

    // 1)Aplicação    
        $modulo = mysqli_query($conn,$sql) or die(mysqli_error($conn));
?>

<!-- Sub-tópico -->
<div class="container">
    <fieldset>
        <legend> Editar módulos </legend>
            <hr>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Cód</th>
                        <th scope="col">Módulo</th>
                        <th scope="col">Cód Disc</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Apagar</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Faz o php receber os campos da tabela do banco de dados -->
                    <?php
                        while($cols = mysqli_fetch_array($modulo))
                        {
                            $mod_id = $cols['mod_id'];
                            $mod_nome = $cols['mod_nome'];
                            $mod_disc_id = $cols['mod_disc_id'];
                    ?> 
                        <tr>
                            <!-- Editar -->
                            <form action="php/CRUD/modEditar.php" method="get" >
                                <th scope="row"><input class="pb-2" type="text" name ="f_mod_id" maxlength="11" size="4"  required readonly="true" value="<?php echo $mod_id; ?>"></th>
                                <td class=""><input class="pb-2" type="text" name ="f_mod_nome" maxlength="150"            required          value="<?php echo $mod_nome; ?>"></td>
                                <td class=""><input class="pb-2" type="text" name ="f_mod_disc_id" maxlength="40"  size="4"  required          value="<?php echo $mod_disc_id; ?>"></td>
                                <td class="text-center">
                                    <button type="submit" title="Editar módulo" class="btn btn-success"><i class="bi bi-arrow-repeat"></i></button>
                                </td>
                            </form>
                            <!-- Excluir -->
                            <td class="text-left">
                                <form action="php/CRUD/modExcluir.php" method="get">
                                    <input type="hidden" name="f_mod_id" value="<?php echo $mod_id; ?>">
                                    <button type="submit" title="Apagar módulo" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                </form>    
                            </td>
                        </tr>
                    <?php }; ?>
                </tbody>    
            </table>
    </fieldset>
    <a class="dropdown-item" href="index.php?link=26"><i class="bi bi-journal-text"></i> Disciplinas</a>
    <a class="dropdown-item text-muted" href="index.php?link=28"><i class="bi bi-arrow-left"></i> Voltar</a>
</div>
