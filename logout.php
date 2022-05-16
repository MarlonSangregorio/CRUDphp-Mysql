<?php
session_start();
session_destroy();//destroi sessão
header("location: index.php?msg=Até Logo!")//local de retorno após destruir
?>