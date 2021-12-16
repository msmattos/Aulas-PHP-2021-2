<?php
   //Cabeçalho
   include "..//views/header.php";
?>
<div class="container mt-3">
      <div style="width:60%; margin:auto;">
		<h3>sessao.php</h3>
<form action="criar_sessao.php" method="post">
    Digite o seu nome:
    <input type="text" name="campo_usuario" required />
    <input type="submit" value="Enviar" />
</form>
<?php
	// rodapé
	include "..//views/footer.php";
?>