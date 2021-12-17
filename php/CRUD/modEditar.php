<?php
    // 1)Inclui conexão
    include '../../system/connect.php';

    // 2)Pega os valores das variáveis
    $mod_id = $_GET['f_mod_id'];
    $mod_nome = $_GET['f_mod_nome'];
    $mod_disc_id = $_GET['f_mod_disc_id'];

    // 3) Cmd SQL
    $sql = "UPDATE tbModulo SET `mod_nome` = '$mod_nome', `mod_disc_id` = '$mod_disc_id' WHERE `mod_id` = $mod_id";

    // 4) Aplica o SQL no bd
    $EditaMod = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        
    // 5) volta para a página topico.php
    header('location:../../index.php?link=36');
?>