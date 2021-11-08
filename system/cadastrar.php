<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IMPULSI - Cadastrar</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <!-- CSS do login -->
  <link rel="stylesheet" href="../css/login.css">

</head>
<body class='bg-img-login'>
    <style>
      input[id="nome"]{
        border-bottom-left-radius: 0px;
        border-bottom-right-radius: 0px;
      }
      input[id="whatsapp"]{
        border-radius: 0px;
    
      }
      input[type="email"]{
        border-radius: 0px;
        
      }
      input[type="password"]{
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
        border-top: 0px;
      }
    </style>
    <div style="max-width: 400px; margin:auto" class="container text-center bg-glass">
      <form style="max-width: 400px; margin:auto">
        <img class="mt-2 mb-2" src="img/logo-impulsi-hor-transp-w.png">
        <h1 class="h3 font-weight-normal font-whitesmoke">cadastrar</h1>
        
        <div class="form-group">
          <label class="sr-only" for="nome"></label>
          <input type="text" class="form-control" name="nome" id="nome" placeholder="nome..." required autofocus>
          
          <label class="sr-only" for="whatsapp"></label>
          <input type="phone" class="form-control" name="whatsapp"  id="whatsapp" placeholder=" whatsapp...">
          
          <label class="sr-only" for="email">email</label>
          <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="email...">
          
          <label class="sr-only" for="password"></label>
          <input type="password" class="form-control" name="password" id="password" placeholder="senha...">
          
          <small class="text-muted">Já possui cadastro? <a href="index.php?link=21">entrar</a> </small>  
          <label class="text-muted mt-2" for="Lembre-me">Lembre-me</label>
          <input type="checkbox" name="Lembre-me"value="Lembre-me"> 
        </div>
        <a class="btn btn-primary btn-lg btn-block mt-2 mb-2" href="#" role="button">Iniciar</a>
        <small>
            <input type="checkbox" name="termos" id=""><a class="text-muted" href=""> Concordo com os termos de servicos.</a>
        </small>
      </form>
    </div>
</body>
</html>