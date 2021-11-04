<?php
    function check_login($conn)
    {
        // verifica se a sessão existe
        if(isset($_SESSION['tbUsuarioLoginId']))
        {
            $id = $_SESSION['tbUsuarioLoginId'];
            // seleciona o usuário
            $query = "select * from tbUsuarios where tbUsuarioLoginId= $id limit 1";
            // recebe o resultado da consulta
            $result = mysqli_query($conn, $query);
            // checa se o resultado é positvo
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                return $user_data;
            }
        }
        // redirect to login
        header("Location: system/login.php");
        die;
    }

    function random_num($lenth)
    {
        $text = "";
        if ($lenth < 5)
        {
            $lenth = 5;
        }
        // Cria uma variável aletória entre 4 e $lenth
        $len = rand(4, $lenth);
        
        for ($i=0; $i < $len ; $i++)
        { 
            $text .=rand(0,9);
        }
        return $text;
    }
?>
