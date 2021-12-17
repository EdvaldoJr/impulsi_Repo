<?php
    // 1)Conexão
        include_once("system/connect.php");
    
    // 2)Seleção
        $sql= "SELECT * FROM tbDisciplinas WHERE disc_area = 2";

    // 3)Aplicação    
        $disc = mysqli_query($conn,$sql) or die(mysqli_error($conn));
?>

<!-- Sub-tópico -->
<div class="container">
    <fieldset>
        <legend> Editar disciplinas </legend>
        <hr>
        <!-- Áreas -->
        <form  name=search_form method="get" action="index.php?link=34">
            <div class="input-group">
                <select  id="my-select" class="form-control " name="f_area_id">
                    <option value="">Áreas do conhecimento</option>
                    <?php
                        $sql = "SELECT * FROM tbAreas";
                        $result = mysqli_query($conn, $sql);
                        while($row_result = mysqli_fetch_assoc($result))
                        {?>
                            <option value="<?php echo $row_result['area_id'];?>"> <?php echo $row_result['area_nome'];?> </option>
                        <?php } ?>
                </select>    
                <input class="btn btn-primary" type="submit" value="Selecionar área">
            </div>
        </form>
    </fieldset>
    <a class="dropdown-item" href="../../index.php?link=31"><i class="bi bi-journal-text"></i> Disciplinas</a>
    <!-- <a class="dropdown-item text-muted" href="index.php?link=25"><i class="bi bi-arrow-left"></i> Voltar</a> -->
 </div>