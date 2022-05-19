<?php include "../validar.php";?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    

    <link rel="stylesheet" href="style.css">

    <title>Cadastro</title>

  </head>
  <body>
    <div class="container">
      <div class="row"> 
        <div class="col">
        <h1 class ="display-4">Cadastro de usuário</h1>
        
         <!--Inicio do Formulario-->
         <!-- o action indica para onde os dados do form sera encaminhado! -->
        <div class="col-8">
         <form action="cadastro_script.php" method="POST">

           <!--Nome do úsuario-->
         <div class="mb-3">
           

          <label for="nome" class="form-label">Nome completo</label>
          <input type="text" class="form-control" name="nome" required>
           </div>

            <!--Endereço do úsuario-->
           <div class="mb-3">

          <label for="endereco" class="form-label">Endereço</label>
          <input type="text" class="form-control" name="endereco">
           </div>

            <!--Telefone do úsuario-->
           <div class="mb-3">

          <label for="telefone" class="form-label">Telefone</label>
          <input type="text" class="form-control" name="telefone">
           </div>

           <!--Email do úsuario-->
            <div class="mb-3">

          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" name="email">
           </div>

           <!--Data nascimento do úsuario-->
           <div class="mb-3">

          <label for="data" class="form-label">Data de nascimento</label>
          <input type="date" class="form-control" name="data_nascimento">
           </div>

          <!--Botão de submit(enviar)-->

           <div class="mb-3">

          <input type="submit" class="btn btn-success" name="botao">
            </div>
           </div>
         </form>
         <a href="index.php" class="btn btn-info">Voltar para o início</a>
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