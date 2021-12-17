<?php
    // 1)Conexão
    include_once("system/connect.php");
    
    // 1)Seleção
    $sql= "SELECT * FROM tbAreas";

    // 1)Aplicação    
    $areas = mysqli_query($conn,$sql) or die(mysqli_error($conn));
?>

<!-- Sub-tópico -->
<div class="container">
    <fieldset>
        <legend> Editar áreas </legend>
            <hr>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">cód</th>
                        <th scope="col">Área</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Apagar</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Faz o php receber os campos da tabela do banco de dados -->
                    <?php
                        while($cols = mysqli_fetch_array($areas))
                        {
                            $area_id = $cols['area_id'];
                            $area_nome = $cols['area_nome'];
                    ?> 
                            <tr>
                                <!-- Editar -->
                                <form action="php/CRUD/areaEditar.php" method="get" >
                                    <th scope="row"><input class="pb-2" type="text" name ="f_area_id" maxlength="11" size="4"   value="<?php echo $area_id; ?>"></th>
                                    <td class=""><input class="pb-2" type="text" name ="f_area_nome" maxlength="40"             value="<?php echo $area_nome; ?>"></td>
                                    <td class="text-center">
                                        <button type="submit" title="Editar área" class="btn btn-success"><i class="bi bi-arrow-repeat"></i></button>
                                    </td>
                                </form>
                                <!-- Excluir -->
                                    <td class="text-left">
                                        <form action="php/CRUD/areaExcluir.php" method="get">
                                        <input type="hidden" name="f_area_id" value="<?php echo $area_id; ?>">
                                            <button type="submit" title="Apagar área" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                        </form>    
                                    </td>
                            </tr>
                    <?php }; ?>
                </tbody>    
            </table>
    </fieldset>
    <a class="dropdown-item" href="index.php?link=26"><i class="bi bi-journal-text"></i> Disciplinas</a>
    <a class="dropdown-item text-muted" href="index.php?link=25"><i class="bi bi-arrow-left"></i> Voltar</a>
</div>

