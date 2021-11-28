<?php
// 1)Inclui conexão
include '../system/connect.php';

// 2)Pega os valores das variáveis

$subt_id = $_GET['f_subt_id'];
$subt_nome = $_GET['f_subt_nome'];
$subt_top_id = $_GET['f_subt_top_id'];

// 3) Cmd SQL
$sql = "UPDATE tbSubtopico SET `subt_nome` = '$subt_nome', `subt_top-id` = '$subt_top_id' WHERE `subt_id` =$subt_id";

// 4) Aplica o SQL no bd
$EditaSubTopico = mysqli_query($conn, $sql);
    
 // 5) volta para a página topico.php
  header('location:../index.php?link=29')

?>