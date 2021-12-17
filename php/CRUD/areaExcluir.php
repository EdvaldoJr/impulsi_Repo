<?php
// 1)Inclui conexão
include '../../system/connect.php';

// 2)Pega o id para excluir o registro
$area_id = $_GET['f_area_id'];

// 3) Cmd SQL
$sql = "DELETE FROM `tbAreas`  WHERE `area_id` = $area_id";

// 4) Aplica o SQL no bd
$excluirArea = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    
//  5) volta para a página topico.php
  header('location:../../index.php?link=30');
?>