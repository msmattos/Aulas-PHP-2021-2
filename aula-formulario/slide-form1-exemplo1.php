<?php
#Formulários
//Cabeçalho
include "..//views/header.php";
?>
<div class="container mt-3">
   <div style="width:60%; margin:auto;">
      <h4> Formulário</h4>
      <hr>
      <form action="slide-form1-recebe-ex1.php" method="POST" class=" row g-3">
         <p>Digite seu email:
            <input type="text" name="email" required>
         </p>
         <p>
            <input type="submit" value="Enviar!" name="enviar">
         </p>
      </form>
   </div>
</div>
<?php
// rodapé
include "..//views/footer.php";
?>