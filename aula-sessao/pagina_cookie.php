<?php
  if (!isset($_COOKIE["visitCounter"])) {
    $visitas = 1;
    setcookie("visitCounter", $visitas, time()+86400 * 10); // 86400 = 1 dia
  } else {
    $_COOKIE["visitCounter"]++;
    $visitas = $_COOKIE["visitCounter"];
    setcookie("visitCounter", $visitas, time()+86400 * 10);
  }
  include "..//views/header.php";
?>
<div class="container mt-3">
  <div style="width:60%; margin:auto;">
    <h3>pagina_cookie.php</h3>
    <?php
      echo "Número de visitas ".$visitas;  
    ?>
	</div>
</div> 
<?php
// rodapé
include "..//views/footer.php";
?>