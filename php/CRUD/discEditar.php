<?php
    // 1)Inclui conexão
    include '../../system/connect.php';

    // 2)Pega os valores das variáveis
    $disc_id = $_GET['f_disc_id'];
    $disc_nome = $_GET['f_disc_nome'];
    $disc_area = $_GET['f_disc_area'];
    
    

    // 3) Cmd SQL
    $sql = "UPDATE tbDisciplinas SET `disc_nome` = '$disc_nome', `disc_area` = '$disc_area' WHERE `disc_id` = $disc_id";
   
    
    // 4) Aplica o SQL no bd
    $EditaDisc = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        
    // 5) volta para a página topico.php
    header('location: ../../index.php?link=36');
?>
