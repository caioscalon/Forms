<?php
  require_once "./connectBD.php";

  $nome = $_POST['usuario'];
  $senha = md5($_POST['senha']);
  $senha2 = md5($_POST['confirmarSenha']);
  $codigo = $_POST['codigo'];
  $cadastrar = $_POST['btnCad'];
    
  if(isset($cadastrar)) {
    $split = explode(' ', $nome);
    $primeiroNome = array_shift($split);
    $ultimoNome = $split[sizeof($split)-1];
    $usuario = strtolower($primeiroNome.'.'.$ultimoNome);

    $sql = "INSERT INTO `usuario` (`USUARIO_ID`, `NOME`, `SENHA`, `NOMEUSUARIO`, `TIPO`) VALUES (NULL, '".$nome."', '".$senha."', '".$usuario."', '".$codigo."');";

    if($conn->query($sql)){
      echo
      "<script language='javascript' type='text/javascript'>
        alert('Usuário cadastrado com sucesso!');
        window.location.href='../index.html';
      </script>";
    }
    else {
      echo
      "<script language='javascript' type='text/javascript'>
        alert('Erro!: ".$sql."');
      </script>";
    }
    $conn->close();
  }
?>