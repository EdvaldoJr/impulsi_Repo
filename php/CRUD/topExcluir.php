<?php
// 1)Inclui conexão
include '../../system/connect.php';

// 2)Pega o id para excluir o registro
$top_id = $_GET['f_top_id'];

// 3) Cmd SQL
$sql = "DELETE FROM `tbTopico`  WHERE `top_id` = $top_id";

// 4) Aplica o SQL no bd
$excluirTop = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    
//  5) volta para a página topico.php
  header('location:../../index.php?link=33');
?>