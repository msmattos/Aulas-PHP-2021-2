<?php
#Formulários
//Cabeçalho
include "..//views/header.php";
?>
<div class="container mt-3">
	<div style="width:60%; margin:auto;">
		<h3>Recebendo os dados</h3>
		<?php
			$mostra = true;
			// quantidade mínima de caracteres
			$tam_nome = strlen($_POST['txtnome']);
			$nome = $_POST['txtnome'];
			if (($tam_nome <3) || ($tam_nome > 64)) {
				echo "o campo nome deve ter entre 3 e 64 caracteres <br />" ;
				$mostra = false;
			}
			// quantidade mínima de caracteres email
			$tam_email = strlen($_POST['txtemail']);
			$email =  $_POST['txtemail'];
			if (($tam_email <5) || ($tam_email > 64)) {
					$mostra = false;
				echo "o campo e-mail deve ter entre 5 e 64 caracteres <br />" ;
			}
			if ($mostra) {
					echo "Nome: $nome  E-mail: $email";             
			}
			echo "<br /> <a href='formA04.php'> Voltar </a>"
		?>
	</div>
</div>
<?php
	// rodapé
	include "..//views/footer.php";
?>