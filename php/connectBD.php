<?php
  // Variáveis
  $servername = "localhost";
  $username = "forms_user";
  $password = "L5xzCW4U";
  $dbname = "sms_forms";

  // Criar conexão
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Verificar conexão
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 
?>