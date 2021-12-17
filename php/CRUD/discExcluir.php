<?php
// 1)Inclui conexão
include '../../system/connect.php';

// 2)Pega o id para excluir o registro
$disc_id = $_GET['f_disc_id'];

// 3) Cmd SQL
$sql = "DELETE FROM tbDisciplinas  WHERE `disc_id` = $disc_id";

// 4) Aplica o SQL no bd
$excluirDisc = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    
//  5) volta para a página topico.php
  header('location:../../index.php?link=36');
?>