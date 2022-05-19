<?php include "../validar.php";?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Pesquisar</title>

  </head>
  <body>
    <?php

    //verificando se a variavel existe

      $pesquisa = $_POST['busca'] ?? '';

    include "conexao.php";

    $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";

    $dados = mysqli_query($conn, $sql);

    ?>


    <div class="container">
      <div class="row"> 
        <div class="col">

        <h1>Pesquisar</h1>

        <!--BARRA DE NAVEGAÇÃO E BOTAO BUSCAR/PESQUISAR-->
        
        <nav class="navbar">
          <form class="form-inline" action="pesquisa.php" method="POST">
          <input class="form-control mr-sm-2" type="search" placeholder="Nome" aria-label="Search" name="busca" autofocus>
          <br>
          <button class="btn btn-outline-success my-2 my-sm-2" 
          type="submit">Pesquisar</button>
          
       </form>
       </nav>

       <!--TABELA-->

       <table class="table table-hover">
  <thead><!--cabeçalho da tabela-->
    <tr><!--linha da tabela-->
      <th scope="col">Nome</th><!--colunas da tabela-->
      <th scope="col">Endereço</th>
      <th scope="col">Telefone</th>
      <th scope="col">Email</th>
      <th scope="col">Data de Nascimento</th> 
      <th scope="col">Funções</th> 
    </tr>
  </thead>
  <tbody>

  <?php

while ($linha = mysqli_fetch_assoc($dados)) {//percorrendo o vetor 
  $cod_pessoa = $linha['cod_pessoa'];
  $nome = $linha['nome'];
  $endereco = $linha['endereco'];
  $telefone = $linha['telefone'];
  $email = $linha['email'];
  $data_nascimento = $linha['data_nascimento'];
  $data_nascimento = mostra_data($data_nascimento);

  echo"
  <tr>
     <th scope='row'>$nome</th>
     <td>$endereco</td>
     <td>$telefone</td>
     <td>$email</td>
     <td>$data_nascimento</td>
     <td>
     <a href='cadastro_edit.php?id=$cod_pessoa' class='btn btn-success btn-sm'>Editar</a>
     <a href='#' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#confirmar'
     onclick=" . '"' ."pegar_dados($cod_pessoa, '$nome')" .'"' . ">Excluir</a> 
     
     </td>
  </tr>";
}
?>

              <!--onclick="pegar_dados($id, '$nome')"-->
              <!--Putaria do PHP, que linguagem horrivel!!! -->

  </tbody>
</table>

       <br>
         <a href="index.php" class="btn btn-info">Voltar para o início</a>
        </div>
      </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="confirmar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong>Excluir Cadastro</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="excluir_script.php" method="POST">
        <p>Deseja excluir <b id="nome_pessoa">nome pessoa</b>?</p>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
         <input type="hidden" name="id" id="cod_pessoa" value="">
         <input type="hidden" name="nome" id="nome_pessoa_1" value="">
         <input type="submit" class="btn btn-danger" value = "Confirmar">
       </form>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript"> 

function pegar_dados(id, nome){
  document.getElementById('nome_pessoa'). innerHTML = nome;
  document.getElementById('cod_pessoa'). value = id;
  document.getElementById('nome_pessoa_1'). value = nome;
}
</script>

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