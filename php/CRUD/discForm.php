<?php
    // 1) Conexão
    include 'system/connect.php';
?>

<div class="container">
    <h1> Disciplinas </h1>
    <hr>
    <form class="form-group" action="php/CRUD/discInserir.php">
        <div class="input-group mb-3">
            <div class="form-floating">
                <select name="f_disc_area" id="AreasSelect" class="form-control"  required>
                    <option value ="2"> Ciências Humanas e suas Tecnologias</option>
                    <option value ="3"> Ciências da Natureza e suas Tecnologias</option>
                    <option value ="4"> Linguagens, Códigos e suas Tecnologias</option>
                    <option value ="5"> Matemática e suas Tecnologias</option>
                </select>
                <label for="AreasSelect">Selecione a área do conhecimento</label>
            </div>
            <button class="btn btn-primary p-2" title="Adcionar disciplina" type="button"><a  href="index.php?link=25"><i class="bi bi-plus-lg d-block font-whitesmoke"></i></a></button>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="disc" name="f_disc"   placeholder="Ex: Português, Matemática, Física..." aria-describedby="helpId" maxlength="50" size="49" required>
            <label for="disc"> Digite a disciplina</label> <br>
        </div>
        <div class="d-grid gap-2">
            <input name="btn_submit" type="submit" class="btn btn-primary my-2" value ="Enviar">    
        </div>
    </form>
    
    <!-- Lista de disciplinas -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Cód</th>
                <th scope="col">Disciplina</th>
                <th scope="col">Área</th>
                <th scope="col">Editar</th>
                <th scope="col">Apagar</th>
            </tr>
        </thead>
        <tbody>
            <!-- Recebe os campos da tabela do banco de dados -->
            <?php
                // 2) Selecão
                if(isset($_GET['btn_submit'])){
                    $area_id = $_GET['f_disc_area'];
                    echo "acionou!";
                }
                $sql="SELECT * FROM tbDisciplinas WHERE disc_area = '$area_id'";
                // 3) Execução
                $disc =mysqli_query ($conn, $sql);
                while($cols = mysqli_fetch_array($disc))
                {
                    // Pega os valores na tabela tbDisciplinas e joga nas variáveis
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

    <a class="dropdown-item text-muted" href="index.php?link=28"><i class="bi bi-box"></i> Módulos</a>
    <a class="dropdown-item text-muted" href="index.php?link=27"><i class="bi bi-list-ul"></i> Tópicos</a>
    <a class="dropdown-item" href="index.php?link=35"><i class="bi bi-journal-check"></i> Seleciona área</a>
        
</div>