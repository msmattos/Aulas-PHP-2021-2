<?php
    $mysqli = new mysqli("localhost", "root", "", "meubanco");

   if (mysqli_connect_errno()) {
       printf('Erro de conexão: %s\n', mysqli_connect_error());
       exit();
    }
?>