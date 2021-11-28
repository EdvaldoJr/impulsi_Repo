<?php
    // Conexão
    include '../system/connect.php';

    // Tópicos
    // 1) Pega as variáveis
    $topic = $_GET['f_topic'];
    $topic_mod = $_GET['f_topic_mod'];

    // 2) Comando SQL
    $sql = "INSERT INTO tbTopico (`top_id`, `top_nome`, `top_mod_id`) VALUES (NULL, '$topic', '$topic_mod')";

    // 3) Aplica o SQL no bd
    $query_disc = mysqli_query($conn,$sql);
    
    // Subtópicos
    // 1) Pega as variáveis
    $sub_topico = $_GET['f_sub_topico'];
    $topico = $_GET['f_topico'];
    
    // 2) Comando SQL
    $sql1 = "INSERT INTO tbSubtopico (`subt_id`, `subt_nome`, `subt_top-id`) VALUES (NULL, '$sub_topico', '$topico')";
    
    // 3) Aplica o SQL no bd
    $query_disc1 = mysqli_query($conn,$sql1);

    // volta para a página area.php
    header('location:../index.php?link=27')
?>
