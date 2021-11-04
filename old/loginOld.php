<?php
    session_start();

    include("system/connect.php");
    include("system/functions.php");

    if($_SERVER['REQUEST_METHOD'] == POST)
    {
        // Recebe o nome do usuário e a senha
        $user_name = $_POST['tbUsuarioNome'];
        $password = $_POST['tbUsuarioSenha'];

        // Verifica se o usuário e a senha foram digitadas
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            // Read from database: Verifica se o usuário já existe
            $query = "select * from tbUsuarios where tbUsuarioNome= '$user_name' limit 1";
            
            // pega o resultado da query
            $result = mysqli_query($conn, $query);
            
            // verifica a senha
            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['tbUsuarioSenha']===$password)
                    {
                        // Se tudo ok, redireciona para a login page
                        $_SESSION['user_id'] = $user_data['tbUsuarioLoginId'];
                        header("Location: index.php");
                        die;
                    }   
                }
            }
            echo "Usuário ou senha errada!";
            
        }else
        {
            echo "Usuário ou senha errada!";
        }
    }
?>

<div class="container col-lg-4 bg-black-color font-cinza-claro">
    <h1>Login</h1>
    <form method="post">
        <div class="form-group mb-2 col-lg-6">
            <label for="clienteEmail"> e-mail</label> 
            <input id="clienteEmail" type="email" class="form-control"  placeholder="Seu email...">
        </div>    
        <div class="form-group mb-2 col-lg-4">
            <label for="clienteNome"> Senha</label> 
            <input id="clienteSenha" type="password" class="form-control"  placeholder="Sua senha...">
        </div>
        <div class="col-auto my-1">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
        <a href="index.php?link=23">Inscreva-se.</a> 
    </form>  
 </div>     