<?php
	require_once "./connectBD.php";

	// Variáveis
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

	// Botão
	$registrar = $_POST['btnReg'];
	
	// Tipo
	if (isset($_POST['optradio'])) {
		$tipoReg = $_POST['optradio'];
	} 

	if (isset($registrar) {  
		// Registro        
		$sql = "INSERT INTO `registro` (`REGISTRO_ID`, `TIPO`, `ASSUNTO`, `NUMERO`, `DATA_`, `URL_`, `RESUMO`, `OBJETO`, `RECURSO`, `CONSIDERACAO`, `RECEPTOR`, `ACOMPANHAMENTO`) VALUES (NULL, '".$tipoReg."', '".$assunto."', '".$numero."', '".$dataReg."', '".$url."', '".$resumo."', '".$resolve."', '".$recurso."', '".$consideracoes."', '".$entrega."', '".$acompanhamento."');";

		if ($conn->query($sql)) {
			$idRegistro = $conn->insert_id;

			// Superintendências
			if (isset($_POST['sup'])) {
				foreach ($_POST['sup'] as $value)
				{
					switch ($value)
					{
						case "coordMun":
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

					if ($conn->query($sql)) {}
					else {}
				}
			}
			echo
			"<script language='javascript' type='text/javascript'>
				alert('Registro inserido com sucesso!');
				window.location.href='../registro.php';
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