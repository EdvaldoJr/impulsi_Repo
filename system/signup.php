<?php
    session_start();
    include("system/connect.php");
    include("system/functions.php");

    if($_SERVER['REQUEST_METHOD']==POST)
    {
        // Recebe o nome do usuário e a senha
        $user_name = $_POST['tbUsuarioNome'];
        $password = $_POST['tbUsuarioSenha'];

        // Verifica se o usuário e a senha foram digitadas
        if(!is_numeric($user_name) && !empty($user_name) && !empty($password) )
        {
            // Cria um número aleatório 
            $user_id = random_num(20);
            
            // Salve no banco de dados
            $query = "insert into tbUsuarios (tbUsuarioLoginId, tbUsuarioNome, tbUsuarioSenha) values ('$user_id', '$user_name', '$password')";
            
            // Salva a query
            mysqli_query($conn, $query);
            
            // Redireciona para a login page
            header("Location: system/login.php");
            die;
        }else
        {
            echo "Por favor, entre com informações válidas!";
        }
    }
    
?>
<div class="container col-lg-4 bg-black-color font-cinza-claro">
    <h1>Sign-up</h1>
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
        <a href="index.php?link=21">Login</a> 
    </form>  
 </div>     