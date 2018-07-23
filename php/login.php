<?php
  require_once "./connectBD.php";

  $nome = $_POST['usuario'];
  $senha = md5($_POST['senha']);
  $login = $_POST['btnLog'];
  
  if(isset($login)){
    $sql = "SELECT * FROM usuario WHERE NOMEUSUARIO = '$nome' AND SENHA = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows <= 0){
      echo
      "<script language='javascript' type='text/javascript'>
        alert('Login ou senha inválido!');
        window.location.href='../index.html';
      </script>";
      die();
    }else{
      $row = $result->fetch_assoc();        
      echo
      "<script language='javascript' type='text/javascript'>
        var cname = \"idLOgado\";
        var cvalue = ". $row["TIPO"]. ";
        var d = new Date();
        d.setTime(d.getTime() + (60*60*6000));
        var expires = \"expires=\"+ d.toUTCString();
        document.cookie = cname + \"=\" + cvalue + \";\" + expires + \";path=/\";;
        window.location.href='../busca.php';
      </script>";
      //header("Location:../index.html");
    }
    $conn->close();
      
  }
?>