<?php
    $host = "localhost"; 
    $user = "root";
    $pass = "";
    $bd = "bd_impulsi";
    
    if($conn = mysqli_connect($host, $user, $pass, $bd))
    {
        echo "conectou!";
        // die("Falha na conexão!");
    }
?>