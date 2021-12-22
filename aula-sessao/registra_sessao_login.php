<?php
  session_start();
  if ($_POST["campo_usuario"]=="Brasil" && $_POST["campo_senha"] == "abc123")
  {   
  $_SESSION["usuario"] = $_POST["campo_usuario"];
  $_SESSION["senha"]  =  $_POST["campo_senha"];
  $_SESSION["autenticado"] = true;
  echo "Sessão criada com sucesso";
}  
else {
  echo "usuário não autorizado...";
} 
header("location: ../aula-sessao/sessao_login_autenticado.php");
?>