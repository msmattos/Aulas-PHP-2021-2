<?php
#Formulários
	//Cabeçalho
	include "..//views/header.php";
?>
<div class="container mt-3">
	<div style="width:60%; margin:auto;">
		<form  action="aula03_validacao.php" method="get" >
			Nome: <input type = "text" name = "nome" required> <br><br>
			Estado:
			<select name = "estado">
				<option value="">Selecione</option>
				<option value="AC">Acre</option>
				<option value="AL">Alagoas</option>
				<option value="AP">Amapá</option>
				<option value="AM">Amazonas</option>
				<option value="BA">Bahia</option>
				<option value="CE">Ceará</option>
				<option value="DF">Distrito Federal</option>
				<option value="ES">Espirito Santo</option>
				<option value="GO">Goiás</option>
				<option value="MA">Maranhão</option>
				<option value="MS">Mato Grosso do Sul</option>
				<option value="MT">Mato Grosso</option>
				<option value="MG">Minas Gerais</option>
				<option value="PA">Pará</option>
				<option value="PB">Paraíba</option>
				<option value="PR">Paraná</option>
				<option value="PE">Pernambuco</option>
				<option value="PI">Piauí</option>
				<option value="RJ">Rio de Janeiro</option>
				<option value="RN">Rio Grande do Norte</option>
				<option value="RS">Rio Grande do Sul</option>
				<option value="RO">Rondônia</option>
				<option value="RR">Roraima</option>
				<option value="SC">Santa Catarina</option>
				<option value="SP">São Paulo</option>
				<option value="SE">Sergipe</option>
				<option value="TO">Tocantins</option>
			</select><br>
			Sexo: <br>
			<input type="Radio" name="sexo" value = "Masculino"  > Masculino 
			<input type="Radio" name="sexo" value = "Feminino"> Feminino <br>
			Profissão:
			<select name = "profissao">
			<option value="programador"> Programador </option>
			<option value="designer"> Designer </option>
			<option value="engenheiro"> Engenheiro </option>
			<option value="médico"> Médico </option>
			</select><br>
			Preferências<br>
			<input type="checkbox" name="opt1" value = "esporte" checked> Esporte <br>
			<input type="checkbox" name="opt2" value = "dança"> Dança <br>
			<input type="checkbox" name="opt3" value = "música"> Música <br>
			<input type="checkbox" name="opt4" value = "livros"> Livros <br>
			<input type="checkbox" name="opt5" value = "carros"> Carros <br>

			<input type ="submit" value = "enviar">
			<input type ="reset" value = "limpar">
		</form>
	</div>
</div>
<?php
// rodapé
include "..//views/footer.php";
?>
