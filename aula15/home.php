<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <table width="100%">
    <tr style="background-color:#00FFFF">
      <td> Nome</td>
      <td> Endereço</td>
      <td> Email</td>
    </tr>
    <?php
    include('conexao.php');
    $sql="select * from funcionario";
    $pesq = $mysqli->query($sql); // executa consulta
    
    while ($ln = $pesq->fetch_assoc())  {
    print "
    <tr>
    <td> $ln[nome] </td> <td> $ln[endereco] </td> <td> $ln[email] </td>
    </tr>";
    }
    ?>
  </table>
</body>

</html>