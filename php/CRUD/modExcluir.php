<?php
// 1)Inclui conexão
include '../../system/connect.php';

// 2)Pega o id para excluir o registro
$mod_id = $_GET['f_mod_id'];

// 3) Cmd SQL
$sql = "DELETE FROM tbModulo  WHERE `mod_id` = $mod_id";

// 4) Aplica o SQL no bd
$excluirMod = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    
//  5) volta para a página topico.php
  header('location:../../index.php?link=28');
?>