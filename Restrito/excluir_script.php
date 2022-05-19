<?php include "../validar.php";?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Exclusão de cadastro</title>

  </head>
  <body>
    <div class="container">
      <div class="row"> 
        <?php

        include "conexao.php";
        $id = $_POST['id'];
        //recebendo as variaveis vindas do post
        $nome = $_POST['nome'];


        $sql = "DELETE from `pessoas` WHERE cod_pessoa = $id";

        //executando o comando para passar as variaveis para dentro do banco de dados
        if (mysqli_query($conn, $sql)) {
          mensagem("$nome foi excluido com sucesso!", 'success');
        } else {
          mensagem("$nome NÃO excluido!", 'danger');
        }

        ?>
        <a href="pesquisa.php" class="btn btn-primary">Retornar</a>
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