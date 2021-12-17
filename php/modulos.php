<?php
    include_once("system/connect.php");
?>
<!-- Módulos -->
<div class="container">
    <form class="form-group" action="php/inserirModulo.php">
        <fieldset>
            <legend>Cadastrar Módulos</legend> 
            <hr>
            <label class="mt-2" for="my-select">Selecione a disciplina</label>
                <div class="d-inline p-2">
                <select id="my-select" class="form-control mb-3" name="f_mod_disc_id" required>
                        <option>Selecione uma disciplina</option>
                        <?php
                            $sql = "SELECT * FROM tbDisciplinas";
                            $result = mysqli_query($conn, $sql);
                            while($row_result = mysqli_fetch_assoc($result)){?>
                                <option value="<?php echo $row_result['disc_id'];?>"> <?php echo $row_result['disc_nome'];?>
                                </option><?php
                            }
                        ?>
                    </select>
                    <label for="disc">Digite o nome do módulo </label>
                    <div class="input-group">
                        <input type="text" name="f_mod_nome" id="mod" class="form-control" placeholder="Digite nome do módulo..." aria-describedby="helpId" maxlength="150" size="49" required> 
                        <span class="btn btn-success" title="Editar módulos"><a href="index.php?link=32"><i class="bi bi-pencil font-whitesmoke"></i></a></span>
                    </div>
                </div>
            <div class="d-grid">
                <button class="btn btn-primary mb-3" type="submit" ><i class="bi bi-sd-card"></i> Salvar Módulo</button>    
            </div>

            <div class="d-grid">
                <a class="dropdown-item text-muted" href="index.php?link=27"><i class="bi bi-card-list"></i> Cadastrar Tópicos</a>
            </div>
        </fieldset>
    </form>
</div>