<!--Tela de Login -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="Restrito/css/bootstrap.min.css" rel="stylesheet">

    <title>Empresa</title>

    <style>
      body {
        margin-top: 15%;
        background-image: url("https://i.pinimg.com/originals/12/b2/3a/12b23a7752e8a7a4464c1ff5e596237f.gif");
      }


      .display-4{
        color: rgb(104, 0, 241);
        margin-bottom: 1rem;
        font-family: monospace;
        text-align: center;      
      }

      .jumbotron {
        background: rgb(30,30,30);
        padding: 2rem;
        border-radius: 1rem;
      }
      </style>
      

  </head>
  <body>
    <div class="container">
      <div class="row"> 
      <div class="col-2"></div>
        <div class="col-8">
         <div class="jumbotron">
          <h1 class="display-4">Login Úsuario</h1>



          <!--FORMULARIO DE LOGIN -->
          <form action="index.php" method="POST">
  <!-- user input -->
  <div class="form-outline mb-4">
    <input type="text" id="form1Example1" placeholder="Nome de Úsuario" class="form-control" name="login"/>
    <label class="form-label" for="form1Example1"></label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form1Example2" placeholder="Senha" class="form-control" name="senha"/>
    <label class="form-label" for="form1Example2"></label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
    </div>

    <div class="col">
    </div>
  </div>

  <!-- Submit button -->
  <center><button type="submit" class="btn btn-primary btn-block">Iniciar Sessão</button></center>
          </form>
          <!--Respostas Do Site -->

          <?php

          function mensagem($texto, $tipo) {
            echo "<div class='alert alert-$tipo' role='alert'>
            $texto
          </div>";
          }

          if (isset($_POST['login'])) {//Se o POST forem setados, é porque ele mandou via POST
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            //Recebi os dados Login e senha


            if($login === "Marlon" and $senha === "0321"){
              session_start();
              $_SESSION['login'] = "Marlon";//$SESSION variavel global
              header("location: Restrito");//encaminhando o usuario para a index do restrito
            } else {

              echo "<br>";
              mensagem("<center>Úsuario ou senha inválido!</center>",'danger');
            }
          }
          ?>





        </div>
      </div>
      <div class="col-2"></div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>