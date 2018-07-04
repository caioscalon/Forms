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
            <li class="active"><a href="#"><span class="glyphicon glyphicon-search"></span> Pesquisar </a></li>
            <?php
            if(($_COOKIE["idLOgado"] === "11146")){
              echo "<li><a href=\"registro.php\"><span class=\"glyphicon glyphicon-floppy-disk\"></span> Registro </a></li>";
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
        <form class="form-inline" method="POST" action="./php/busca.php" id="registro_form">
          <!-- Superintendências -->
          <label><font size="2"> Superintendência(s): </font></label>

            <div class="form-group">
                <select class="form-control" id="super" name="super"/>
                    <option value="Todas"> Todas </option>
                    <option value="Coordenadoria Municipal do Sistema de Atenção às Urgências"> Coordenadoria Municipal do Sistema de Atenção às Urgências </option>
                    <option value="Ouvidoria da Secretaria Municipal de Saúde"> Ouvidoria da Secretaria Municipal de Saúde </option>
                    <option value="Superintendência de Ações em Saúde"> Superintendência de Ações em Saúde </option>
                    <option value="Superintendência de Administração em Saúde"> Superintendência de Administração em Saúde </option>
                    <option value="Superintendência de Assistência Farmacêutica, Insumos e Nutrição"> Superintendência de Assistência Farmacêutica, Insumos e Nutrição </option>
                    <option value="Superintendência de Atenção Secundária"> Superintendência de Atenção Secundária </option>
                    <option value="Superintendência de Atenção Terciária"> Superintendência de Atenção Terciária </option>
                    <option value="Superintendência de Planejamento e Finanças"> Superintendência de Planejamento e Finanças </option>
                    <option value="Superintendência de Regulação"> Superintendência de Regulação </option>
                    <option value="Superintendência de Vigilância em Saúde"> Superintendência de Vigilância em Saúde </option>
                </select>
            </div>
    
            <br><br>

          <!-- Tipos de Regulação -->
          <label><font size="2"> Tipo de Regulação: </font></label>

            <div class="form-group">
                <select class="form-control" id="status" name="status"/>
                    <option value="Todos"> Todos </option>
                    <option value="Decreto"> Decreto </option>
                    <option value="Lei"> Lei </option>
                    <option value="Nota Informativa"> Nota Informativa </option>
                    <option value="Nota Técnica"> Nota Técnica </option>
                    <option value="Portaria"> Portaria </option>
                    <option value="Resolução"> Resolução </option>
                    <option value="Outro"> Outro </option>
                </select>
            </div>

          <!-- Nome -->
          <label><font size="2"> Ano: </font></label>
          <textarea class="form-control" rows="1" name="ano" id="ano" placeholder="Insira o ano..."></textarea>  

          <!-- Número -->
          <label><font size="2"> Número: </font></label>
          <textarea class="form-control" rows="1" name="numero" id="numero" placeholder="Insira o número..."></textarea>  

          <hr>

        </div>

        <!-- Botão Pesquisar -->
        <div class="col-lg-10">
          <a href="#">
            <button type="submit" class="btn btn-primary btn-lg" style="float: right" name="btnPes" id="btnPes"> Pesquisar </button>
          </a>
        </div>
      </form>
      <br><br>
      <div id="tabelaResultado">

      <?php
        if(isset($_COOKIE["buscaQUERY"])) {
          $prot = $_COOKIE["buscaQUERY"];

          $prot = explode("-", $prot);

          // echo 
          // "<script language='javascript' type='text/javascript'>
          //     alert('".$prot[0]." ".$prot[1]." ".$prot[2]." ".$prot[3]." ".$prot[4]."');
          // </script>";

          // Sup == Todos && Tipo == Todos
          if($prot[0] === '0'){
            $sql = "SELECT REGISTRO_ID, NUMERO, TIPO, DATA_, ASSUNTO FROM registro";
          }else if($prot[0] === '1'){
              $sql = "SELECT REGISTRO_ID, NUMERO, TIPO, DATA_, ASSUNTO FROM registro WHERE DATA_ LIKE '%".$prot[3]."'";
          }else if($prot[0] === '2'){
              $sql= "SELECT REGISTRO_ID, NUMERO, TIPO, DATA_, ASSUNTO FROM registro WHERE NUMERO = '".$prot[4]."'";
          }else if($prot[0] === '3'){
              $sql = "SELECT REGISTRO_ID, NUMERO, TIPO, DATA_, ASSUNTO FROM registro WHERE DATA_ LIKE '%".$prot[3]."' AND NUMERO = '".$prot[4]."'";
          }
          // Sup == Todos && Tipo != Todos
          else if($prot[0] === '4'){
              $sql = "SELECT REGISTRO_ID, NUMERO, TIPO, DATA_, ASSUNTO FROM registro WHERE TIPO = '".$prot[2]."'";
          }else if($prot[0] === '5'){
              $sql = "SELECT REGISTRO_ID, NUMERO, TIPO, DATA_, ASSUNTO FROM registro WHERE TIPO = '".$prot[2]."' AND DATA_ LIKE '%".$prot[3]."'";
          }else if($prot[0] === '6'){
              $sql = "SELECT REGISTRO_ID, NUMERO, TIPO, DATA_, ASSUNTO FROM registro WHERE TIPO = '".$prot[2]."' AND NUMERO = '".$prot[4]."'";
          }else if($prot[0] === '7'){
              $sql = "SELECT REGISTRO_ID, NUMERO, TIPO, DATA_, ASSUNTO FROM registro WHERE TIPO = '".$prot[2]."' AND DATA_ LIKE '%".$prot[3]."' AND NUMERO = '".$prot[4]."'";
          }
          // Sup != Todos && Tipo == Todos
          else if($prot[0] === '8'){
              $sql = "SELECT registro.REGISTRO_ID, registro.NUMERO, registro.TIPO, registro.DATA_, registro.ASSUNTO FROM registro, superintendencia WHERE superintendencia.NOME = '".$prot[1]."' AND superintendencia.REGISTRO_ID = registro.NUMERO";
          }else if($prot[0] === '9'){
            $sql = "SELECT registro.REGISTRO_ID, registro.NUMERO, registro.TIPO, registro.DATA_, registro.ASSUNTO FROM registro, superintendencia WHERE superintendencia.NOME = '".$prot[1]."' AND superintendencia.REGISTRO_ID = registro.NUMERO AND DATA_ LIKE '%".$prot[3]."'";
          }else if($prot[0] === '10'){
              $sql = "SELECT registro.REGISTRO_ID, registro.NUMERO, registro.TIPO, registro.DATA_, registro.ASSUNTO FROM registro,  superintendencia WHERE superintendencia.NOME = '".$prot[1]."' AND superintendencia.REGISTRO_ID = registro.NUMERO AND NUMERO = '".$prot[4]."'";
          }else if($prot[0] === '11'){
              $sql = "SELECT registro.REGISTRO_ID, registro.NUMERO, registro.TIPO, registro.DATA_, registro.ASSUNTO FROM registro, superintendencia WHERE superintendencia.NOME = '".$prot[1]."' AND superintendencia.REGISTRO_ID = registro.NUMERO AND DATA_ LIKE '%".$prot[3]."' AND NUMERO = '".$prot[4]."'";
          }
          // Sup != Todos && Tipo != Todos
          else if($prot[0] === '12'){
              $sql = "SELECT registro.REGISTRO_ID, registro.NUMERO, registro.TIPO, registro.DATA_, registro.ASSUNTO FROM registro, superintendencia WHERE superintendencia.NOME = '".$prot[1]."' AND superintendencia.REGISTRO_ID = registro.NUMERO AND registro.TIPO = '".$prot[2]."'";
          }else if($prot[0] === '13'){
            $sql = "SELECT registro.REGISTRO_ID, registro.NUMERO, registro.TIPO, registro.DATA_, registro.ASSUNTO FROM registro, superintendencia WHERE superintendencia.NOME = '".$prot[1]."' AND superintendencia.REGISTRO_ID = registro.NUMERO AND DATA_ LIKE '%".$prot[3]."' AND registro.TIPO = '".$prot[2]."'";
          }else if($prot[0] === '14'){
              $sql = "SELECT registro.REGISTRO_ID, registro.NUMERO, registro.TIPO, registro.DATA_, registro.ASSUNTO FROM registro,  superintendencia WHERE superintendencia.NOME = '".$prot[1]."' AND superintendencia.REGISTRO_ID = registro.NUMERO AND NUMERO = '".$prot[4]."' AND registro.TIPO = '".$prot[2]."'";
          }else if($prot[0] === '15'){
              $sql = "SELECT registro.REGISTRO_ID, registro.NUMERO, registro.TIPO, registro.DATA_, registro.ASSUNTO FROM registro, superintendencia WHERE superintendencia.NOME = '".$prot[1]."' AND superintendencia.REGISTRO_ID = registro.NUMERO AND DATA_ LIKE '%".$prot[3]."' AND NUMERO = '".$prot[4]."' AND registro.TIPO = '".$prot[2]."'";
          }

          // $ano = "1995";
          // $sql = "SELECT REGISTRO_ID, NUMERO, TIPO, DATA_, ASSUNTO FROM registro WHERE DATA_ LIKE '%".$ano."'";
          $result = $conn->query($sql);
          $count = 0;

          if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            if($count===0)
            echo "
              <div class=\"tables\">
                <div class=\"row\">
                  <div class=\"col-md-8 col-xs-offset-2\">
                    <table class=\"table table-striped\">
                      <thead>
                          <tr>
                          <th scope=\"col\">Numero</th>
                          <th scope=\"col\">Tipo</th>
                          <th scope=\"col\">Data</th>
                          <th scope=\"col\">Assunto</th>
                          </tr>
                      </thead>";
                      echo
                        "<tbody>
                          <tr>
                            <th scope=\"row\">". $row["NUMERO"]. "</th>
                            <td>". $row["TIPO"]. "</td>
                            <td>". $row["DATA_"]. "</td>
                            <td>". $row["ASSUNTO"]. "</td>
                            <td><button type=\"button\" class=\"btn btn-primary\" id=\"vslzRegistro".$count."\">Visualizar</button></td>
                          </tr>
                          <script>
                            document.getElementById('vslzRegistro".$count."').onclick = function() {
                            var cname = \"idREGISTRO\";
                            var cvalue = ". $row["REGISTRO_ID"]. ";
                            var d = new Date();
                            d.setTime(d.getTime() + (10*60*1000));
                            var expires = \"expires=\"+ d.toUTCString();
                            document.cookie = cname + \"=\" + cvalue + \";\" + expires + \";path=/\";;
                            window.open(\"./info.php\",\"_self\");
                            };
                          </script>
                        </tbody>";
            $count = $count+1;
              
          }
          } else {
              echo "<tr><td>Nenhum registro encontrado!</td></tr>";
          }
          $conn->close();
        }

      ?>
              </table>
            </div>
          </div>
        </div>
      </div>

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
  <!--script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script-->
  <script src="./js/forms.js"></script>

</body>
</html>
