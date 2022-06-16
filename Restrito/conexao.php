<link rel="stylesheet" href="style.css">

<?php
   $server = "localhost";//local do meu server
   $user = "root";//root, esse usuario pode ser mudado
   $pass = "";//senha
   $bd = "empresa";//banco de dados

      //quando o login tem susesso a funçao abaixo indica se ela testa
   //verdadeira ou falso)

   if( $conn = mysqli_connect($server, $user, $pass, $bd) ){
     //echo " Conectado com sucesso!";
   } else {
     echo " Erro de conexão!";
   }

//funcão para mostrar 

function mensagem($texto, $tipo) {
  echo "<div class='alert alert-$tipo' role='alert'>
  $texto
</div>";
}

//=======FUNCOES DA TABELA DE PESQUISA ========//

function mostra_data($data) {
  $d = explode('-', $data);
  $escreve = $d[2] . "/" .$d[1] . "/" . $d[0];
  return $escreve;
}



?>
