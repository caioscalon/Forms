<?php
  require_once "./connectBD.php";

  $assunto = $_POST['assunto'];
  $numero = $_POST['numero'];
  $dataReg = $_POST['dataReg'];
  $url = $_POST['url'];
  $resumo = $_POST['resumo'];
  $resolve = $_POST['resolve'];
  $recurso = $_POST['recurso'];
  $consideracoes = $_POST['consideracoes'];
  $entrega = $_POST['entrega'];
  $acompanhamento = $_POST['acompanhamento'];
  $idRegistro = $_COOKIE["idREGISTRO"];

  $registrar = $_POST['btnReg'];
  
  // Tipo
  if(isset($_POST['optradio'])){
    $tipoReg = $_POST['optradio'];
  }

  if(isset($registrar)){             
    $sql = "UPDATE `registro` SET TIPO = '".$tipoReg."', ASSUNTO = '".$assunto."', NUMERO = '".$numero."', DATA_ = '".$dataReg."', URL_ = '".$url."', RESUMO = '".$resumo."', OBJETO = '".$resolve."', RECURSO = '".$recurso."', CONSIDERACAO = '".$consideracoes."', RECEPTOR = '".$entrega."', ACOMPANHAMENTO = '".$acompanhamento."' WHERE REGISTRO_ID = '".$idRegistro."'";

    if($conn->query($sql)){

      // Superintendências
      if(isset($_POST['sup'])) {
        foreach ($_POST['sup'] as $value)
        {
          switch ($value)
          {
            case "coordMun":
              $aux1 = "SELECT COUNT(SUP_ID) FROM superintendencia WHERE NOME = 'Coordenadoria Municipal do Sistema de Atenção às Urgências' AND REGISTRO_ID = ".$idRegistro."";

              $aux2 = $conn->query($aux1);

              if ($aux2->num_rows == 0)
                $sql = "INSERT INTO `superintendencia` (`SUP_ID`, `REGISTRO_ID`, `NOME`) VALUES (NULL, '".$idRegistro."', 'Coordenadoria Municipal do Sistema de Atenção às Urgências')";

            break;
            
            case "ouvidSMS":
              $sql = "INSERT INTO `superintendencia` (`SUP_ID`, `REGISTRO_ID`, `NOME`) VALUES (NULL, '".$idRegistro."', 'Ouvidoria da Secretaria Municipal de Saúde')";
            break;
            
            case "supAcoes":
              $sql = "INSERT INTO `superintendencia` (`SUP_ID`, `REGISTRO_ID`, `NOME`) VALUES (NULL, '".$idRegistro."', 'Superintendência de Ações em Saúde')";
            break;

            case "supAdm":
              $sql = "INSERT INTO `superintendencia` (`SUP_ID`, `REGISTRO_ID`, `NOME`) VALUES (NULL, '".$idRegistro."', 'Superintendência de Administração em Saúde')";
            break;

            case "supAssist":
              $sql = "INSERT INTO `superintendencia` (`SUP_ID`, `REGISTRO_ID`, `NOME`) VALUES (NULL, '".$idRegistro."', 'Superintendência de Assistência Farmacêutica, Insumos e Nutrição')";
            break;

            case "supAtSec":
              $sql = "INSERT INTO `superintendencia` (`SUP_ID`, `REGISTRO_ID`, `NOME`) VALUES (NULL, '".$idRegistro."', 'Superintendência de Atenção Secundária')";
            break;

            case "supAtTerc":
              $sql = "INSERT INTO `superintendencia` (`SUP_ID`, `REGISTRO_ID`, `NOME`) VALUES (NULL, '".$idRegistro."', 'Superintendência de Atenção Terciária')";
            break;

            case "supPlan":
              $sql = "INSERT INTO `superintendencia` (`SUP_ID`, `REGISTRO_ID`, `NOME`) VALUES (NULL, '".$idRegistro."', 'Superintendência de Planejamento e Finanças')";
            break;
            
            case "supReg":
              $sql = "INSERT INTO `superintendencia` (`SUP_ID`, `REGISTRO_ID`, `NOME`) VALUES (NULL, '".$idRegistro."', 'Superintendência de Regulação')";
            break;

            case "supVig":
              $sql = "INSERT INTO `superintendencia` (`SUP_ID`, `REGISTRO_ID`, `NOME`) VALUES (NULL, '".$idRegistro."', 'Superintendência de Vigilância em Saúde')";
            break;

            default: 
            break;
          }
          if($conn->query($sql)){

          }else{}
        }
      }

      echo"<script language='javascript' type='text/javascript'>
          alert('Registro modificado com sucesso!');
          window.location.href='../busca.php';
      </script>";
    }
    else {
        echo"<script language='javascript' type='text/javascript'>
            alert('Erro!');
        </script>";
    }
    $conn->close();
    
  }
?>