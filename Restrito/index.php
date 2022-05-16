<?php include "../validar.php";?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Empresa</title>

  </head>
  <body>
    <div class="container">
      <div class="row"> 
        <div class="col">
         <div class="jumbotron">
          <h1 class="display-4"><strong>CRUD Create, Read, Update and Delete</strong></h1>
          <p class="lead">Isto é um sistema simplificado de cadastros. Base de estudos para criação de sistemas WEB com PHP e MySQL.</p>
          <hr class="my-4">
          <p>Acesse as funções!</p>
          <p class="lead">
          <a class="btn btn-primary btn-lg" href="cadastro.php" role="button">Cadastro</a>
          <a class="btn btn-primary btn-lg" href="pesquisa.php" role="button">Pesquisa</a>
          <a class="btn btn-danger btn-lg" href="../logout.php" role="button">Encerrar sessão</a>
          </p>
        </div>
      </div>
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