<?php
    // Conexão
    include '../system/connect.php';

    // Módulos
    // 1) Pega as variáveis
    $mod_nome = $_GET['f_mod_nome'];
    $mod_disc_id = $_GET['f_mod_disc_id'];
    
    // 2) Comando SQL
    $sql = "INSERT INTO tbModulo (`mod_id`, `mod_nome`, `mod_disc_id`) VALUES (NULL, '$mod_nome', '$mod_disc_id')";
    
    // 3) Aplica o SQL no bd
    $InsereMod = mysqli_query($conn,$sql);

    // volta para a página area.php
    header('location:../index.php?link=27')
?>
