<?php
session_start();
//Cabeçalho
include "..//views/header.php";
?>
<div class="container mt-3">
  <div style="width:60%; margin:auto;">
    <h3>sessao_login_autenticado.php</h3>
    <?php
    
      if (!isset($_SESSION["autenticado"]) || $_SESSION["autenticado"] != true) {
        echo "Acesso não autorizado! <br />";
        echo "Por gentileza, faça seu login "."<a href=sessao_login.php>clicando aqui </a>.";
        // rodapé
        include "..//views/footer.php";
        exit();
      } else {
        echo "Você está logado como usuário: ".$_SESSION["usuario"];
          // rodapé
        include "..//views/footer.php";
        session_destroy();  // finaliza a sessão
      }
    ?>
	</div>
</div> 
