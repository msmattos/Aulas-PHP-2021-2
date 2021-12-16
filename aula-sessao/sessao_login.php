<?php
   //Cabeçalho
   include "..//views/header.php";
?>
<div class="container mt-3">
      <div style="width:60%; margin:auto;">
		<h3>sessao_login.php</h3>
<body>
  <form action="registra_sessao_login.php" method="post">
    Digite o seu nome:
    <input type="text" name="campo_usuario" required/><br>
    Digite sua senha: 
    <input type="password" name="campo_senha" required/><br>
    <input type="submit" value="Autenticar" />
  </form>
  <?php
	// rodapé
	include "..//views/footer.php";
?>