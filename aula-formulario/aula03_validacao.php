<?php
#Formulários
//Cabeçalho
include "..//views/header.php";
?>
	<div class="container mt-3">
    <div style="width:60%; margin:auto;">
			<h3>Exibição dos testes e variações de codificação como ilustrativo de possibilidades de uso</h3>
			<?php
				$teste_nome = isset($_GET["nome"]);  // testar se tem a variável
				$teste_estado = isset($_GET["estado"]);
				$teste_profissao = isset($_GET["profissao"]);
	    			
				$opt3 = isset($_GET["opt3"]);// pode-se definir a variável de teste para depois usar no "if", vejam no final do código
				$opt4 = isset($_GET["opt4"]);
				$opt5 = isset($_GET["opt5"]);
				$nome       = $_GET["nome"];
				$estado     = $_REQUEST["estado"];//uma alternativa é usar a supervariável $_REQUEST
				$profissao  = $_REQUEST["profissao"];
			?>
			<b>Exibe 1 (um) se existe o objeto. Vejam o teste a seguir.</b><br>
			Testa se tem o objeto "nome": <?=$teste_nome?><br> 
			Testa se tem o objeto "estado": <?=$teste_estado?><br>
			Testa se tem o objeto "profissao": <?=$teste_profissao?><br>
			
			<h3>Dados pessoais:</h3>
			Nome: <?=$nome?><br>
			Estado (UF): <?=$estado?><br>
			Profissão: <?=$profissao?><br>	
			Sexo:
			<?php
				if (isset($_GET["sexo"])) 
						{ echo $_GET["sexo"];}
			?><br>				
				<h3>Preferência: </h3>
			<?php			
				if (!empty($_GET["opt1"]))  
						{ echo $_GET["opt1"] . "<br />";}    
				if (!empty($_GET["opt2"]))
						{ echo "dança <br>";}
				if (!empty($opt3))  //outra forma de codificar
						{ print "música <br>";}//outra forma de comando para exibir um texto no navegador
				if (!empty($opt4))
						{ print "livros<br>";}
				if (!empty($opt5))
					{ print "carros<br>";} 			
			?>
		</div>
	</div>
<?php
	// rodapé
	include "..//views/footer.php";
?>
