<?php
    // 1)Inclui conexão
    include '../../system/connect.php';

    // 2)Pega os valores das variáveis
    $top_id = $_GET['f_top_id'];
    $top_nome = $_GET['f_top_nome'];
    $top_mod_id = $_GET['f_top_mod_id'];

    // 3) Cmd SQL
    $sql = "UPDATE tbTopico SET `top_nome` = '$top_nome', `top_mod_id` = $top_mod_id WHERE `top_id` = $top_id";

    // 4) Aplica o SQL no bd
    $EditaTop = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        
    // 5) volta para a página topico.php
    header('location:../../index.php?link=33');
?>