<?php
    // Conexão
    include '../system/connect.php';

    // Disciplinas
    // 1) Pega as variáveis
    $disc= $_GET['f_disc'];
    $area= $_GET['f_disc_area'];

    // 2) Comando SQL
    $sql = "INSERT INTO tbDisciplinas (`disc_id`, `disc_nome`, `disc_area`) VALUES (NULL, '$disc', '$area')";

    // 3) Aplica o SQL no bd
    $query_disc = mysqli_query($conn,$sql);

    // volta para a página area.php
    header('location:../index.php?link=26')
?>
