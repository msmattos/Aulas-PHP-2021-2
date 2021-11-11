
<?php
#Formulários
   //Cabeçalho
   include "..//views/header.php";
?>
   <div class="container mt-3">
      <div style="width:60%; margin:auto;">
         <h4> Formulário</h4>
         <hr>
         <form action="recebe.php" method="POST" class=" row g-3">
            <div class="form-group col-md-6">
               <label for="id_nome" class="control-label">Nome</label>
               <input type="text" name="nome" id="id_nome" class="col-md-6 form-control" required> 
            </div>
            <div class="form-group col-md-6">
               <label for="id_email" class="control-label">Digite o seu email</label>
               <input type="email" name="email" id="id_email"  class="col-md-6 form-control" required> 
            </div>            
            <p><button class="btn btn-primary">Enviar!</button></p>
         </form>
      </div>
   </div>
<?php
   // rodapé
   include "..//views/footer.php";
?>