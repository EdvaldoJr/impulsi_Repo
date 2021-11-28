<?php
    // 1)Inclui conexão
    include '../system/connect.php';

    // 2)Pega os valores das variáveis
    $subt_id = $_GET['f_subt_id_del'];

    // 3) Cmd SQL
    $sql = "DELETE FROM tbSubtopico WHERE `subt_id` =$subt_id";

    // 4) Aplica o SQL no bd
    $ExcluiSubTopico = mysqli_query($conn, $sql);
        
    // 5) volta para a página topico.php
    header('location:../index.php?link=29')
?>