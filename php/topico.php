<?php
    // 1)Conexão
    include_once("system/connect.php");
    
    // 1)Seleção
    $sql= "SELECT * FROM tbSubtopico";

    // 1)Aplicação    
    $sub_topicos = mysqli_query($conn,$sql)

?>

<!-- Tópicos -->
<div class="container">
    <form class="form-group" action="php/inserirTopico.php">
        <fieldset class="scheduler-border">
            <legend class="scheduler-border">Tópicos</legend> 
            <hr>
                <label for="my-select">Selecione o Módulo</label>
                <select id="my-select" class="form-control mb-3 " name="f_topic_mod" required>
                    <option>Selecione um módulo</option>
                        <?php
                            $sql = "SELECT * FROM tbModulo";
                            $result = mysqli_query($conn, $sql);
                            while($row_result = mysqli_fetch_assoc($result))
                            {?>
                                <option value="<?php echo $row_result['mod_id'];?>"> <?php echo $row_result['mod_nome'];?>
                                </option>
                            <?php
                            }
                        ?>
                </select>
                
                <label for="topic">Digite o nome do tópico </label>
                <input type="text" name="f_topic" id="topic" class="form-control mb-2" placeholder="Digite um tópico..." aria-describedby="helpId" maxlength="150" size="69" required>
                
            <div class="d-grid gap-2">
                <button class="btn btn-primary  my-3" type="submit" ><i class="bi bi-sd-card"></i> Salvar tópico </button>    
            </div>
    </form>
    <a class="dropdown-item text-muted" href="index.php?link=28"><i class="bi bi-journal-text"></i> Cadastrar módulo</a>    
    <a class="dropdown-item text-muted" href="index.php?link=29"><i class="bi bi-list-nested"></i> Cadastrar sub-tópicos</a>
</div>