<!DOCTYPE html>


<?php
  require_once "./php/connectBD.php";

  if(!isset($_COOKIE["idLOgado"])) {
    echo "<script language='javascript' type='text/javascript'>
      window.location.href='./index.html';
      alert('Você precisa estar logado para acessar essa página!');
    </script>";
  } else {
    if(!($_COOKIE["idLOgado"] === "11146") ){
      echo "<script language='javascript' type='text/javascript'>
        window.location.href='./busca.php';
        alert('Você não tem permissão para acessar essa página!');
      </script>";
    }else{

    }
  }
?>

<html>
<head>
  <title>Forms SMS</title>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/forms.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!--link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="  https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css"-->
</head>

<body>

  <!-- Barra superior -->
  <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
          </button>
          <a class="navbar-brand" href="test.html" style="padding:0px;">
            <img src="./src/pmi.jpg" style="height:100%">
            <span class="navbar-text">
              <div class="nav-row">
                <font size="2.3"> SECRETARIA MUNICIPAL DE SAÚDE DE ITABIRA </font>
              </div>
              <div class="nav-row">
                <font size="2"> Diretoria de Monitoramento e Apoio à Gestão </font>
              </div>
            </span>
          </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="busca.php"><span class="glyphicon glyphicon-search"></span> Pesquisar </a></li>
            <?php
            if(($_COOKIE["idLOgado"] === "11146")){
              echo "<li class=\"active\"><a href=\"registro.php\"><span class=\"glyphicon glyphicon-floppy-disk\"></span> Registro </a></li>";
            }else if (($_COOKIE["idLOgado"] === "11147")){
              echo "<li><a href=\"registro.php\"><span class=\"glyphicon glyphicon-floppy-disk\"></span> Registro </a></li>
              <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Cadastro </a></li>";
            }
          ?>
            <li><a href="index.html" id="quitQuit"><span class="glyphicon glyphicon-log-out"></span> Sair </a></li>
            <script>
                document.getElementById('quitQuit').onclick = function() {
                  document.cookie = 'idLOgado' + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                  window.open("./index.html","_self");
              };
            </script>
          </ul>
        </div>
      </div>
    </nav>

  <div class="container-fluid">
    <div class="row">

      <!-- Lateral esquerda -->
      <div class="col-sm-2 sidebar"></div>
      
      <!-- Formulário -->
      <div class="col-md-8 col-xs-offset-0">
        <form class="form-horizontal" method="POST" action="./php/registro.php" id="registro_form">
          <div class="form-group" name="checkboxes">
            <!-- Superintendências -->
            <label><font size="4"> Superintendência(s): </font></label>

            <div class="checkbox">
              <label><input type="checkbox" name="coordMun" id="coordMun">
                Coordenadoria Municipal do Sistema de Atenção às Urgências
              </label>
            </div>

            <div class="checkbox">
              <label><input type="checkbox" name="ouvidSMS" id="ouvidSMS">
                Ouvidoria da Secretaria Municipal de Saúde
              </label>
            </div>

            <div class="checkbox">
              <label><input type="checkbox" name="supAcoes" id="supAcoes">
                Superintendência de Ações em Saúde
              </label>
            </div>

            <div class="checkbox">
              <label><input type="checkbox" name="supAdm" id="supAdm">
                Superintendência de Administração em Saúde
              </label>
            </div>

            <div class="checkbox">
              <label><input type="checkbox" name="supAssist" id="supAssist">
                Superintendência de Assistência Farmacêutica, Insumos e Nutrição
              </label>
            </div>

            <div class="checkbox">
              <label><input type="checkbox" name="supAtSec" id="supAtSec">
                Superintendência de Atenção Secundária
              </label>
            </div>

            <div class="checkbox">
              <label><input type="checkbox" name="supAtTerc" id="supAtTerc">
                Superintendência de Atenção Terciária
              </label>
            </div>

            <div class="checkbox">
              <label><input type="checkbox" name="supPlan" id="supPlan">
                Superintendência de Planejamento e Finanças
              </label>
            </div>

            <div class="checkbox">
              <label><input type="checkbox" name="supReg" id="supReg">
                Superintendência de Regulação
              </label>
            </div>

            <div class="checkbox">
              <label><input type="checkbox" name="supVig" id="supVig">
                Superintendência de Vigilância em Saúde
              </label>
            </div>
          </div>

          <hr>

          <div class="form-group">
            <!-- Tipos de Regulação -->
            <label><font size="4"> Tipo de Regulação: </font></label>

            <div class="radio">
              <label><input type="radio" name="optradio" id="decreto" value="Decreto" checked> Decreto </label>
            </div>

            <div class="radio">
              <label><input type="radio" name="optradio" id="lei" value="Lei"> Lei </label>
            </div>

            <div class="radio">
              <label><input type="radio" name="optradio" id="notaInf" value="Nota Informativa"> Nota Informativa </label>
            </div>

            <div class="radio">
              <label><input type="radio" name="optradio" id="notaTec" value="Nota Técnica"> Nota Técnica </label>
            </div>

            <div class="radio">
              <label><input type="radio" name="optradio" id="portaria" value="Portaria"> Portaria </label>
            </div>

            <div class="radio">
              <label><input type="radio" name="optradio" id="resolucao" value="Resolução"> Resolução </label>
            </div>

            <div class="radio">
              <label><input type="radio" name="optradio" id="outro" value="Outro"> Outro </label> <!-- Caixa de texto -->
            </div>
          </div>

          <hr>

          <div class="form-group">
            <!-- Assunto -->
            <label><font size="4"> Assunto: </font></label>
            <textarea class="form-control" rows="5" name="assunto" id="assunto" placeholder="Insira o assunto..."></textarea> 
          </div> 

          <hr>

          <div class="form-group">
            <!-- Número -->
            <label><font size="4"> Número: </font></label>
            <textarea class="form-control" rows="1" name="numero" id="numero" placeholder="Insira o número..."></textarea>
          </div>  

          <hr>

          <!-- Data -->
          <label><font size="4"> Data: </font></label><br>
          <div class="form-group">
            <div class='input-group date' id='dataReg'>
              <input type='text' class="form-control" name="dataReg" id="dataReg" placeholder="dd/mm/aaaa">
              <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
              </span>
            </div>
          </div>
          <!--script type="text/javascript">
            $(function () {
                $('#dataReg').datetimepicker();
            });
          </script-->

          <hr>

          <div class="form-group">
            <!-- Url -->
            <label><font size="4"> Disponível em: </font></label>
            <textarea class="form-control" rows="1" id="url" name="url" placeholder="Insira a url..."></textarea> 
          </div> 

          <hr>

          <div class="form-group">
            <!-- Resumo -->
            <label><font size="4"> Resumo: </font></label>
            <textarea class="form-control" rows="5" name="resumo" id="resumo" placeholder="Insira o resumo..."></textarea> 
          </div>

          <hr>

          <div class="form-group">
            <!-- Resolve -->
            <label><font size="4"> Resolve/Objeto: </font></label>
            <textarea class="form-control" rows="3" name="resolve" id="resolve" placeholder="Insira o objeto..."></textarea> 
          </div>

          <hr>

          <div class="form-group">
            <!-- Recurso -->
            <label><font size="4"> Recurso: </font></label>
            <textarea class="form-control" rows="3" name="recurso" id="recurso" placeholder="Insira o recurso..."></textarea>
          </div> 

          <hr>

          <div class="form-group">
            <!-- Considerações -->
            <label><font size="4"> Considerações: </font></label>
            <textarea class="form-control" rows="5" name="consideracoes" id="consideracoes" placeholder="Insira as considerações..."></textarea>
          </div>
  
          <hr>

          <div class="form-group">
            <!-- Entrega -->
            <label><font size="4"> Entregue e/ou Enviado para: </font></label>
            <textarea class="form-control" rows="1" name="entrega" id="entrega" placeholder="Insira o receptor..."></textarea>  
          </div>

          <hr>

          <div class="form-group">
            <!-- Acompanhamento -->
            <div class="table-wrapper">
              <div class="table-title">
                <div class="row">
                  <div class="col-sm-8"><font size="4"><b> Acompanhamento: </b></font>
                </div>

                <div class="col-sm-3">
                  <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Novo acompanhamento </button>
                </div>
              </div>

              <table class="table table-hover">
                <thead>
                  <tr>
                    <th class="col-sm-2"><font size="3"> Data </font></th>
                    <th class="col-sm-2"><font size="3"> Status </font></th>
                    <th class="col-sm-3"><font size="3"> Observações </font></th>
                    <th class="col-sm-1"><font size="3"> + </font></th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>
                      <div class="form-group">
                        <div class="input-group date" id="datetimepicker1">
                          <input type="text" class="form-control" placeholder="dd/mm/aaaa" name="data"/>
                          <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                          </span>
                        </div>
                      </div>
                    </td>

                    <td>
                      <div class="form-group">
                        <select class="form-control" id="status" name="status"/>
                          <option> Em andamento </option>
                          <option> Finalizado </option>
                          <option> Repassado </option>
                          <option> Recusado </option>
                        </select>
                      </div>
                    </td>

                    <td>
                      <textarea class="form-control" id="obs" name="obs" placeholder="Insira a observacao..."/></textarea>
                    </td>

                    <td>
                      <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                      <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                    </td>
                  </tr>    
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Botão Registrar -->
        <div class="form-group">
          <div class="col-lg-12">
            <a href="./registro.php">
              <button type="submit" class="btn btn-primary btn-lg" style="float: right" name="btnReg" id="btnReg"> Registrar </button>
            </a>
          </div>
        </div>
      </form>

      <!-- Lateral direita -->
      <div class="col-sm-2 sidenav"></div>

    </div>
  </div>

  <br><br>

  <!-- Rodapé -->
  <footer>
    <p><font size="3"> Em desenvolvimento </font></p>
  </footer>

  <script src="./js/jquery.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src='./js/bootstrapvalidator.min.js'></script>
  <!--script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script-->
  <script src="./js/forms.js"></script>
  <script src="./js/registro.js"></script>

</body>
</html>