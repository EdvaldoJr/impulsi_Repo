<?php
    // 1)Inclui conexão
    include '../../system/connect.php';

    // 2)Pega os valores das variáveis
    $area_nome = $_GET['f_area_nome'];

    // 3) Cmd SQL
    $sql = "INSERT INTO `tbAreas` (`area_id`, `area_nome`) VALUES (NULL, '$area_nome')";

    // 4) Aplica o SQL no bd
    $insereArea = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    //  5) volta para a página topico.php
     header('location:../../index.php?link=25');
?>