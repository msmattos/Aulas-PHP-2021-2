<?php
    session_start();
   //Cabeçalho
   include "..//views/header.php";
?>
<div class="container mt-3">
      <div style="width:60%; margin:auto;">
		<h3>valida_sessao.php</h3>
<?php  // verifica se o usuário tem acesso sistema
   if ($_SESSION["usuario"]=="Fulano") {
      echo "Bem vindo " . $_SESSION["usuario"];
   } else {
      echo "Usuário não autorizado. ";
      echo "<a href=sessao.php> Informe outro usuário</a>";  
   }
?>
<?php
	// rodapé
	include "..//views/footer.php";
?>