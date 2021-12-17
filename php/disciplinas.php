<?php
    include_once("system/connect.php");
?>

<!-- Disciplinas -->
<div class="container">
    <form name="f1" class="form-group" action="php/CRUD/discInserir.php">
        <fieldset>
            <legend>Cadastrar disciplinas</legend> 
            <hr>
            <label for="my-select">Selecione a área do conhecimento</label>
            <div class="input-group mb-3">
                <select id="my-select" class="form-control" name="f_disc_area" required>
                    <option value ="2"> Ciências Humanas e suas Tecnologias</option>
                    <option value ="3"> Ciências da Natureza e suas Tecnologias</option>
                    <option value ="4"> Linguagens, Códigos e suas Tecnologias</option>
                    <option value ="5"> Matemática e suas Tecnologias</option>
                </select>
                <button class="btn btn-primary p-2" title="Adcionar disciplina" type="button"><a  href="index.php?link=25"><i class="bi bi-plus-lg d-block font-whitesmoke"></i></a></button>
            </div>
            <label for="disc">Digite a disciplina</label> <br>
                <input type="text" name="f_disc" id="disc" class="form-control" placeholder="Ex: Português, Matemática, Física..." aria-describedby="helpId" maxlength="50" size="49" required>
            <div class="d-grid gap-2">
                <button class="btn btn-primary my-3" type="submit" ><i class="bi bi-sd-card"></i> Salvar disciplina </button>    
            </div>
        </fieldset>
    </form>
    <a class="dropdown-item text-muted" href="index.php?link=28"><i class="bi bi-box"></i> Módulos</a>
    <a class="dropdown-item text-muted" href="index.php?link=27"><i class="bi bi-list-ul"></i> Tópicos</a>
    <a class="dropdown-item" href="index.php?link=35"><i class="bi bi-journal-check"></i> Seleciona área</a>
</div>