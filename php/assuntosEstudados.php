<?php
    include "system/connect.php";

    $v_disc = $_POST["f_disc"];
    $v_area = $_POST["f_area"];

    // Comando SQL
    $sql = "INSERT INTO `tbDisciplinas` (`disc_id`, `disc_nome`, `disc_area`) VALUES (NULL,'$v_disc', '$v_area')";
    // Executa comando SQL

    $result = mysqli_query($conn, $sql);

    $linhas = mysqli_affected_rows($conn);

    if($linhas==1){
        echo "<br> Registro gravado com sucesso!";
    }else{
        echo "<br> Falha na gravação do registro!";
    }

    // Fecha conexão
    mysqli_close($conn);
?>

<head>
    <link rel="stylesheet" href="css/assuntosEstudados.css">
</head>

<body>
    <div class="container">
        <h1>Cadastrar disciplinas</h1>     
        <form name="f_disciplina" action="php/teste.php" method="get">
            <div class="form-group">
                <label for="disc_nome">Disciplina</label>
                <input name="f_disc" id="disc_nome" class="form-control mb-2" type="text"  placeholder="disciplina" maxlength="50" size="10" required>
            </div>
            <div class="form-group">
                <label for="area">Área</label>
                <select name="f_area" id="area" class="form-select" aria-label="Default select example"  maxlength="50" required>
                    <option value="1"> Ciências Humanas e suas Tecnologias</option>
                    <option value="2"> Ciências da Natureza e suas Tecnologias</option>
                    <option value="3"> Linguagens, Códigos e suas Tecnologias</option>
                    <option value="4"> Matemática e suas Tecnologias</option>
                </select>
            </div>
            <div class="btns d-grid gap-2 mt-3">
                <input class="btn btn-primary" type="submit" value="Enviar">
            </div>
        </form>
    </div>
</body>