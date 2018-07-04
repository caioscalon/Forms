<?php
    require_once "./connectBD.php";

    // $coordMun = $_POST['coordMun'];
    // $ouvidSMS = $_POST['ouvidSMS'];
    // $supAcoes = $_POST['supAcoes'];
    // $supAdm = $_POST['supAdm'];
    // $supAssist = $_POST['supAssist'];
    // $supAtSec = $_POST['supAtSec'];
    // $supAtTerc = $_POST['supAtTerc'];
    // $supPlan = $_POST['supPlan'];
    // $supReg = $_POST['supReg'];
    // $supVig = $_POST['supVig'];

    $assunto = $_POST['assunto'];
    $numero = $_POST['numero'];
    $dataReg = $_POST['dataReg'];
    $url = $_POST['url'];
    $resumo = $_POST['resumo'];
    $resolve = $_POST['resolve'];
    $recurso = $_POST['recurso'];
    $consideracoes = $_POST['consideracoes'];
    $entrega = $_POST['entrega'];

    $registrar = $_POST['btnReg'];

    
    if(isset($_POST['optradio'])){
        $tipoReg = $_POST['optradio'];
    }

    if(  isset($registrar) ){     
        $sql = "INSERT INTO `registro` (`REGISTRO_ID`, `TIPO`, `ASSUNTO`, `NUMERO`, `DATA_`, `URL_`, `RESUMO`, `OBJETO`, `RECURSO`, `CONSIDERACAO`, `RECEPTOR`) VALUES (NULL, '".$tipoReg."', '".$assunto."', '".$numero."', '".$dataReg."', '".$url."', '".$resumo."', '".$resolve."', '".$recurso."', '".$consideracoes."', '".$entrega."');";

        if($conn->query($sql)){
            if(isset($_POST['coordMun'])){
                $sql = "INSERT INTO `superintendencia` (`SUP_ID`, `REGISTRO_ID`, `NOME`) VALUES (NULL, '".$numero."', 'Coordenadoria Municipal do Sistema de Atenção às Urgências')";
                if($conn->query($sql)){

                }else{}
            }
            if(isset($_POST['ouvidSMS'])){
                $sql = "INSERT INTO `superintendencia` (`SUP_ID`, `REGISTRO_ID`, `NOME`) VALUES (NULL, '".$numero."', 'Ouvidoria da Secretaria Municipal de Saúde')";
                if($conn->query($sql)){

                }else{}
            }
            if(isset($_POST['supAcoes'])){
                $sql = "INSERT INTO `superintendencia` (`SUP_ID`, `REGISTRO_ID`, `NOME`) VALUES (NULL, '".$numero."', 'Superintendência de Ações em Saúde')";
                if($conn->query($sql)){

                }else{}
            }
            if(isset($_POST['supAdm'])){
                $sql = "INSERT INTO `superintendencia` (`SUP_ID`, `REGISTRO_ID`, `NOME`) VALUES (NULL, '".$numero."', 'Superintendência de Administração em Saúde')";
                if($conn->query($sql)){

                }else{}
            }
            if(isset($_POST['supAssist'])){
                $sql = "INSERT INTO `superintendencia` (`SUP_ID`, `REGISTRO_ID`, `NOME`) VALUES (NULL, '".$numero."', 'Superintendência de Assistência Farmacêutica, Insumos e Nutrição')";
                if($conn->query($sql)){

                }else{}
            }
            if(isset($_POST['supAtSec'])){
                $sql = "INSERT INTO `superintendencia` (`SUP_ID`, `REGISTRO_ID`, `NOME`) VALUES (NULL, '".$numero."', 'Superintendência de Atenção Secundária')";
                if($conn->query($sql)){

                }else{}
            }
            if(isset($_POST['supAtTerc'])){
                $sql = "INSERT INTO `superintendencia` (`SUP_ID`, `REGISTRO_ID`, `NOME`) VALUES (NULL, '".$numero."', 'Superintendência de Atenção Terciária')";
                if($conn->query($sql)){

                }else{}
            }
            if(isset($_POST['supPlan'])){
                $sql = "INSERT INTO `superintendencia` (`SUP_ID`, `REGISTRO_ID`, `NOME`) VALUES (NULL, '".$numero."', 'Superintendência de Planejamento e Finanças')";
                if($conn->query($sql)){

                }else{}
            }
            if(isset($_POST['supReg'])){
                $sql = "INSERT INTO `superintendencia` (`SUP_ID`, `REGISTRO_ID`, `NOME`) VALUES (NULL, '".$numero."', 'Superintendência de Regulação')";
                if($conn->query($sql)){

                }else{}
            }
            if(isset($_POST['supVig'])){
                $sql = "INSERT INTO `superintendencia` (`SUP_ID`, `REGISTRO_ID`, `NOME`) VALUES (NULL, '".$numero."', 'Superintendência de Vigilância em Saúde')";
                if($conn->query($sql)){

                }else{}
            }

            echo"<script language='javascript' type='text/javascript'>
                alert('Registro inserido com sucesso!');
                window.location.href='../registro.php';
            </script>";
        }else{
            echo"<script language='javascript' type='text/javascript'>
                alert('Erro!');
            </script>";
        }
        $conn->close();
        
    }
?>