<?php
    // Conexão
    include '../system/connect.php';

    // Módulos
    // 1) Pega as variáveis
    $mod = $_GET['f_mod'];
    $mod_disc = $_GET['f_mod_disc'];
    
    // 2) Comando SQL
    $sql1 = "INSERT INTO tbModulo (`mod_id`, `mod_nome`, `mod_disc_id`) VALUES (NULL, '$mod', '$mod_disc')";
    
    // 3) Aplica o SQL no bd
    $query_disc1 = mysqli_query($conn,$sql1);

    // volta para a página area.php
    header('location:../index.php?link=27')
?>
