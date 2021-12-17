<?php
    // Conexão
    include '../system/connect.php';

    // Recebe os dados que foram digitados no formulário
    $area= $_GET['f_area'];

    // SQL comand
    $sql = "INSERT INTO tbAreas (`area_id`, `area_nome`) VALUES (NULL, '$area')";

    // Aplica o SQL no bd
    $query_areas = mysqli_query($conn,$sql) or die(mysqli_error($conn));
    
    // volta para a página area.php
    header('location:index.php?link=25')
?>
<h1>Inserir área</h1>