<?php
    include_once("system/connect.php");
?>

<!-- Disciplinas -->
<div class="container">
    <form class="form-group" action="php/inserir.php">
        <fieldset>
            <legend>Cadastrar disciplinas</legend> 
            <hr>
            <label for="my-select">Selecione a área do conhecimento</label>
            <div class="row">
                <div class="d-inline  col-10">
                    <select id="my-select" class="form-control mb-3" name="f_disc_area" required>
                        <option value ="2"> Ciências Humanas e suas Tecnologias</option>
                        <option value ="3"> Ciências da Natureza e suas Tecnologias</option>
                        <option value ="4"> Linguagens, Códigos e suas Tecnologias</option>
                        <option value ="5"> Matemática e suas Tecnologias</option>
                    </select>
                    <label for="disc">Digite a disciplina</label>
                    <input type="text" name="f_disc" id="disc" class="form-control" placeholder="Ex: Português, Matemática, Física..." aria-describedby="helpId" maxlength="50" size="49" required>
                </div>
                <div class="d-inline  col-2">
                    <!-- Button trigger modal -->
                    <button title="Adcionar área" type="button" class="btn btn-primary d-inline" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="bi bi-plus-lg d-block"></i> </button>
                </div>
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary  my-3" type="submit" ><i class="bi bi-sd-card"></i> Salvar disciplina </button>    
            </div>
        </fieldset>
    </form>
    
    <!-- Áreas modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Área</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form-group" action="php/areaInserir.php" method="get">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="bi bi-map"></i></span>
                            </div>
                            <input class="form-control" type="text" name="f_area" id="area" placeholder="Digite a área do conhecimento..." aria-label="Digite a área do conhecimento..." aria-describedby="my-addon"  maxlength="40" size="39" required>
                        </div>
                        <div class="d-grid gap-2">
                            <input class="btn btn-primary  my-3" type="submit" value="Salvar">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <a class="dropdown-item text-muted" href="index.php?link=28"><i class="bi bi-box"></i> Módulos</a>
</div>