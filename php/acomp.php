<?php
  require_once "./connectBD.php";

  // Variáveis
  $dataAcomp = $_POST['dataAcomp'];
  $statusAcomp = $_POST['statusAcomp'];
  $obsAcomp = $_POST['obsAcomp'];
  $idRegistro = $_COOKIE["idREGISTRO"];

  // Botão
  $registrar = $_POST['btnReg'];
  
  if (isset($registrar)) {  
    // Acompanhamento        
    $sql = "INSERT INTO `acompanhamento` (`ACOMP_ID`, `REGISTRO_ID`, `DATA_`, `STATUS_`, `OBS`) VALUES (NULL, '".$idRegistro."', '".$dataAcomp."', '".$statusAcomp."', '".$obsAcomp."')";

    if ($conn->query($sql)) {         
      echo
      "<script language='javascript' type='text/javascript'>
        alert('Observação enviada com sucesso!');
        window.location.href='../busca.php';
      </script>";
    }
    else {
      echo
      "<script language='javascript' type='text/javascript'>
        alert('Erro!');
      </script>";
    }
    $conn->close();
  }
?>