<?php
    session_start();
    if(isset($_SESSION['tbUsuarioLoginId']));
    {
        unset($_SESSION['tbUsuarioLoginId']);
    }
    // Redireciona para a login
    header("Locatcion: login.php");
    die;
?>
<h1>Logout</h1>
