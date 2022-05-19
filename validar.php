<?php
session_start();
if(isset($_SESSION['login'])) {//Se a variavel login foi criada no index então...
  $user = $_SESSION['login'];//o úsuario tera acesso a sessão
}else {//caso não...
  session_destroy();
  header("location: ../index.php?msg=Você não pode entrar aqui!");
  //o úsuario sera expulso da sessão e voltara para a aba de login ("index")
}
?>