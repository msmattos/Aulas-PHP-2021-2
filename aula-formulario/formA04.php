<?php
#Formulários
//Cabeçalho
include "..//views/header.php";
?>
<div class="container mt-3">
  <div style="width:60%; margin:auto;">
    <form action="aula04_validacao.php" method="post">
        <p> 
          <b>Nome: </b> <input type="text" name="txtnome" maxlength="40" required>
        </p>
        <p> 
          <b>Email: </b> <input type="email" name="txtemail" maxlength="40" required>
        </p>
        <div>
          <input type="submit" name="enviar" value="Enviar dados">    
        </div> 
    </form>
  </div>
</div>
<?php
// rodapé
include "..//views/footer.php";
?>
