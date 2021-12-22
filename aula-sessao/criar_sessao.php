<?php
session_start();
//Cabeçalho
include "..//views/header.php";
?>
<div class="container mt-3">
  <div style="width:60%; margin:auto;">
    <h3>criar_sessao.php</h3>
    <?php   
        $_SESSION["usuario"] = $_POST["campo_usuario"];
        echo "Sessão criada para usuário " . $_SESSION["usuario"] . "<br />";
        echo "<a href=valida_sessao.php> Verifica Acesso</a>";    
    ?>
	</div>
</div> 
<?php
// rodapé
include "..//views/footer.php";
?>