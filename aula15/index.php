<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .borda-tabela-1{
      border: 1px solid;
    }
  </style>
</head>

<body>
  <table width = "100%" class="borda-tabela-1" >
    <tr>
    <td>
    <table width = "100%">
      <tr> 
      <td width=20%>
      <table width = "100%" class="borda-tabela-1">
        <tr> <td>Menu de Opções </td></tr>
        <tr> <td><a href="index.php?link=1"> home</a></td></tr>
        <tr> <td><a href="index.php?link=2">Inserir</a></td></tr>
        <tr> <td><a href="index.php?link=3">Alterar </a></td></tr>
        <tr> <td><a href="index.php?link=5">Excluir </a></td></tr>
        <tr> <td><a href="index.php?link=7">Consulta </a></td></tr>
      </table>
      </td>
      <td>   	
      <table width = "100%">  
        <tr><td>
        <?php
        if(!empty($_GET['link']))
          $link=$_GET['link'];
        $pag[1]="home.php";
        $pag[2]="formcliente.php";
        $pag[3]="selecionaalterar.php";
        $pag[4]="formeditar.php";
        $pag[5]="selecionaexclur.php";
        $pag[6]="formexcluir.php";
        $pag[7]="consulta.php";
        if(!empty($link))
        {   
          if (file_exists($pag[$link])){ 
            include $pag[$link]; 
          }
          else
          { 
            print "Página não foi encontrada"; }
          }
        ?>
        </td></tr>
      </table>
    </table>
    </td>
    </tr>
  </table>
</body>

</html>
