<!DOCTYPE html>

<?php
  require_once "./php/connectBD.php";

  if(!isset($_COOKIE["idLOgado"])) {
    echo 
    "<script language='javascript' type='text/javascript'>
      window.location.href='./index.html';
      alert('Você precisa estar logado para acessar essa página!');
    </script>";
  } 
  else {
    if(!($_COOKIE["idLOgado"] === "11146" || $_COOKIE["idLOgado"] === "11147")) {
      echo 
      "<script language='javascript' type='text/javascript'>
        window.location.href='./busca.php';
        alert('Você não tem permissão para acessar essa página!');
      </script>";
    }
    else {}
  }
?>

<html>
  <head>
    <title> Forms SMS </title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/forms.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/info.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  </head>

  <body>

    <!-- Barra superior -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span> 
            </button>
            <a class="navbar-brand" style="padding:0px;">
              <img src="./src/pmi.png" style="height:100%">
              <div class='navbar-brand' style="padding-top: 5px; padding-left: 20px">
                <span class='navbar-title'>
                  <font size="2.3"> SECRETARIA MUNICIPAL DE SAÚDE DE ITABIRA </font>
                  <br>
                  <font size="2"> Diretoria de Monitoramento e Apoio à Gestão </font>
                </span>
              </div>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="busca.php">
                  <span class="glyphicon glyphicon-search"></span> Pesquisar 
                </a>
              </li>

              <?php
                if(($_COOKIE["idLOgado"] === "11146")) {
                  echo 
                  "<li class=\"active\">
                    <a href=\"#\">
                      <span class=\"glyphicon glyphicon-floppy-disk\"></span> Registro 
                    </a>
                  </li>";
                }
                else if(($_COOKIE["idLOgado"] === "11147")) {
                  echo 
                  "<li class=\"active\">
                    <a href=\"#\">
                      <span class=\"glyphicon glyphicon-floppy-disk\"></span> Registro 
                    </a>
                  </li>
                  <li>
                    <a href=\"cadastro.php\">
                      <span class=\"glyphicon glyphicon-user\"></span> Cadastro 
                    </a>
                  </li>";
                }
              ?>

              <li>
                <a href="index.html" id="quitQuit">
                  <span class="glyphicon glyphicon-log-out"></span> Sair 
                </a>
              </li>

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
        <header class="page-header">
          <h1 class="page-title"> Registro de Regulação </h1>
        </header>
        
        <!-- Formulário -->
        <div class="col-md-10 col-xs-offset-1">
          <form class="form-horizontal" method="POST" action="./php/registro.php" id="registro_form">
            <div class="form-group" name="checkboxes">
              <div class="bs-callout bs-callout-danger">
                <!-- Superintendências -->
                <label><h4><b> Superintendência(s): </b></h4></label>

                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="sup[]" value="coordMun">
                    Coordenadoria Municipal do Sistema de Atenção às Urgências 
                  </label>
                </div>

                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="sup[]" value="ouvidSMS">
                    Ouvidoria da Secretaria Municipal de Saúde 
                  </label>
                </div>

                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="sup[]" value="supAcoes">
                    Superintendência de Ações em Saúde 
                   </label>
                </div>

                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="sup[]" value="supAdm">
                    Superintendência de Administração em Saúde
                  </label>
                </div>

                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="sup[]" value="supAssist">
                    Superintendência de Assistência Farmacêutica, Insumos e Nutrição
                  </label>
                </div>

                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="sup[]" value="supAtSec">
                    Superintendência de Atenção Secundária
                  </label>
                </div>

                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="sup[]" value="supAtTerc">
                    Superintendência de Atenção Terciária
                  </label>
                </div>

                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="sup[]" value="supPlan">
                    Superintendência de Planejamento e Finanças
                  </label>
                </div>

                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="sup[]" value="supReg">
                    Superintendência de Regulação
                  </label>
                </div>

                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="sup[]" value="supVig">
                    Superintendência de Vigilância em Saúde
                  </label>
                </div>
              </div>
            </div>

            <hr>

            <div class="form-group">
              <div class="bs-callout bs-callout-danger">
                <!-- Tipos de Regulação -->
                <label><h4><b> Tipo de Regulação: </b></h4></label>

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
            </div>

            <hr>

            <div class="form-group">
              <div class="bs-callout bs-callout-danger">
                <!-- Assunto -->
                <label><h4><b> Assunto: </b></h4></label>
                <textarea class="form-control" rows="5" name="assunto" id="assunto" placeholder="Insira o assunto..." maxlength="256"></textarea> 
              </div>
            </div> 

            <hr>

            <div class="form-group">
              <div class="bs-callout bs-callout-danger">
                <!-- Número -->
                <label><h4><b> Número: </b></h4></label>
                <input type='text' class="form-control" name="numero" id="numero" placeholder="Insira o número..." maxlength="16"></input>
              </div>
            </div>  

            <hr>

            <div class="form-group">
              <div class="bs-callout bs-callout-danger">
                <!-- Data -->
                <label><h4><b> Data: </b></h4></label>
                <input type='text' class="form-control" id="dataReg" name="dataReg" placeholder="dd/mm/aaaa"/ maxlength="16">
                <!-- <div class='input-group date'> -->
                  <!-- <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                  </span> -->
                <!-- </div> -->
              </div>
            </div>

            <!--?php
              echo 
              "<script>
                $(document).ready(function(){
                  var date_input=$('input[name=\"dataReg\"]'); //our date input has the name \"dataReg\"
                  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : \"body\";
                  var options={
                    format: 'dd/mm/yyyy',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                  };
                  date_input.datepicker(options);
                })
              </script>";
            ?-->

            <hr>

            <div class="form-group">
              <div class="bs-callout bs-callout-danger">
                <!-- Url -->
                <label><h4><b> Disponível em: </b></h4></label>
                <input type='text' class="form-control" id="url" name="url" placeholder="Insira a url..." maxlength="128"></input> 
              </div> 
            </div>

            <hr>

            <div class="form-group">
              <div class="bs-callout bs-callout-danger">
                <!-- Resumo -->
                <label><h4><b> Resumo: </b></h4></label>
                <textarea class="form-control" rows="5" name="resumo" id="resumo" placeholder="Insira o resumo..." maxlength="512"></textarea> 
              </div>
            </div>

            <hr>

            <div class="form-group">
              <div class="bs-callout bs-callout-danger">
                <!-- Resolve -->
                <label><h4><b> Resolve/Objeto: </b></h4></label>
                <textarea class="form-control" rows="3" name="resolve" id="resolve" placeholder="Insira o objeto..." maxlength="128"></textarea> 
              </div>
            </div>

            <hr>

            <div class="form-group">
              <div class="bs-callout bs-callout-danger">
                <!-- Recurso -->
                <label><h4><b> Recurso: </b></h4></label>
                <textarea class="form-control" rows="3" name="recurso" id="recurso" placeholder="Insira o recurso..." maxlength="64"></textarea>
              </div> 
            </div>

            <hr>

            <div class="form-group">
              <div class="bs-callout bs-callout-danger">
                <!-- Considerações -->
                <label><h4><b> Considerações: </b></h4></label>
                <textarea class="form-control" rows="5" name="consideracoes" id="consideracoes" placeholder="Insira as considerações..." maxlength="128"></textarea>
              </div>
            </div>
    
            <hr>

            <div class="form-group">
              <div class="bs-callout bs-callout-danger">
                <!-- Entrega -->
                <label><h4><b> Entregue e/ou Enviado para: </b></h4></label>
                <input type='text' class="form-control" name="entrega" id="entrega" placeholder="Insira o receptor..." maxlength="64"></input>  
              </div>
            </div>

            <hr>

            <div class="form-group">
              <div class="bs-callout bs-callout-danger">
                <!-- Acompanhamento -->
                <label style="padding-right: 700px"><h4><b> Acompanhamento <small>(Data, Situação, Observações)</small>: </b></h4></label>
                <textarea class="form-control" rows="5" name="acompanhamento" id="acompanhamento" placeholder="Insira o acompanhamento..." maxlength="512"></textarea>

                <!-- <button type="button" class="btn btn-info add-new" style="border-radius: 40px"><small><span class="glyphicon glyphicon-plus"></span><b> Novo acompanhamento </b></small></button>
                <table class="table table-striped table-responsive" id="acomp">
                  <thead>
                    <tr>
                      <th class="col-sm-2"> Data </th>
                      <th class="col-sm-2"> Status </th>
                      <th class="col-sm-3"> Observações </th>
                      <th class="col-sm-1"> + </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td style="padding-left: 20px; padding-right: 40px">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="dd/mm/aaaa" id="dataAcomp" name="dataAcomp"/>
                        </div>
                      </td>

                      <td style="padding-right: 25px">
                        <div class="form-group">
                          <select class="form-control" id="status" name="status"/>
                            <option name="andamento"> Em andamento </option>
                            <option name="finalizado"> Finalizado </option>
                            <option name="repassado"> Repassado </option>
                            <option name="recusado"> Recusado </option>
                          </select>
                        </div>
                      </td>

                      <td style="padding-right: 25px">
                        <textarea class="form-control" id="obsAcomp" name="obsAcomp" placeholder="Insira a observacao..."/></textarea>
                      </td>

                      <td>
                        <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                        <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                        <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div> -->
              
              <!-- <div class="bs-callout bs-callout-danger">
                <label style="padding-right: 700px"><h4><b> Acompanhamento: </b></h4></label>
                <button type="button" class="btn btn-info add-new" style="border-radius: 40px"><small><span class="glyphicon glyphicon-plus"></span> Novo acompanhamento </small></button>

                <table class="table table-striped table-responsive">
                  <thead>
                    <tr>
                      <th class="col-sm-2"> Data </font></th>
                      <th class="col-sm-3"> Status </font></th>
                      <th class="col-sm-4"> Observações </font></th>
                      <th class="col-sm-1"> + </font></th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td style="padding-right: 40px">
                        <div class="form-group">
                          <div class="input-group date" id="datetimepicker1">
                            <input type="text" class="form-control" placeholder="dd/mm/aaaa" name="data"/>
                            <span class="input-group-addon">
                              <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                          </div>
                        </div>
                      </td>

                      <td style="padding-right: 25px">
                        <div class="form-group">
                          <select class="form-control" id="status" name="status"/>
                            <option> Em andamento </option>
                            <option> Finalizado </option>
                            <option> Repassado </option>
                            <option> Recusado </option>
                          </select>
                        </div>
                      </td>

                      <td style="padding-right: 25px">
                        <textarea class="form-control" id="obs" name="obs" placeholder="Insira a observacao..."/></textarea>
                      </td>

                      <td>
                        <a class="add" title="Add" data-toggle="tooltip"><span class="glyphicon glyphicon-ok"></span></a>
                        <a class="edit" title="Edit" data-toggle="tooltip"><span class="glyphicon glyphicon-pencil"></span></a>
                      </td>
                    </tr>    
                  </tbody>
                </table>
              </div> -->
              
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

      </div>
    </div>

    <br><br>

    <!-- Rodapé -->
    <footer>
      <p><font size="3"> Em desenvolvimento </font></p>
    </footer>

    <!-- Scripts -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src='./js/bootstrapvalidator.min.js'></script>
    <script src="./js/forms.js"></script>
    <script src="./js/registro.js"></script>

  </body>
</html>