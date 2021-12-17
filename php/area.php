<!-- Áreas -->
<div class="container">
    <h1>Cadastrar área</h1>
    <hr>
    <form class="form-group" action="php/CRUD/areaInserir.php" method="get">
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-map"></i></span>
            <input class="form-control" type="text" name="f_area_nome" id="area" placeholder="Digite a área do conhecimento..." aria-label="Digite a área do conhecimento..." aria-describedby="my-addon"  maxlength="40" size="39" required>
            <span class="btn btn-success" title="Editar módulo"><a href="index.php?link=30"><i class="bi bi-pencil font-whitesmoke"></i></a></span>
        </div>
            <input class="btn btn-primary d-inline col-7 my-3" type="submit" value="Salvar">
            <button class="btn btn-danger d-inline col-4 my-3" type="button"> <i class="bi bi-x-lg"></i> Fechar</button>
    </form>
    <a class="dropdown-item" href="index.php?link=26"><i class="bi bi-journal-text"></i> Disciplinas</a>
</div> 