<?php
// 1)Inclui conexão
include '../../system/connect.php';

// 2)Pega os valores das variáveis

$area_id = $_GET['f_area_id'];
$area_nome = $_GET['f_area_nome'];

// 3) Cmd SQL
$sql = "UPDATE `tbAreas` SET `area_nome` = '$area_nome' WHERE `area_id` = $area_id";

// 4) Aplica o SQL no bd
$EditaArea = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    
 // 5) volta para a página topico.php
  header('location:../../index.php?link=30');
?>
