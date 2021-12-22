<?php
#Formulários
//Cabeçalho
include "..//views/header.php";
?>
<div class="container">
  <?php
  $email = $_POST["email"];
  $nome = $_POST["nome"];
  echo "Olá ".$nome."!<br> E-mail passado no <i>form</i>: ".$email;
  ?>
</div>
<!-- Button trigger modal -->
<div class="container mt-2">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Visualizar o código
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Código necessário para receber os dados</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <?php 
          echo '
          &#60;&#63 php<br>
                  $email = $_POST["email"];<br>
                  $nome = $_POST["nome"];<br>
                  echo "Olá ".$nome."!<br> E-mail passado no <i>form</i>: ".$email;
          <br>&#63&#62'
          ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
        </div>
      </div>
  </div>
</div>
<?php
// rodapé
include "..//views/footer.php";
?>