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
    if(!($_COOKIE["idLOgado"] === "11145" || $_COOKIE["idLOgado"] === "11146" || $_COOKIE["idLOgado"] === "11147")) {
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
                "<li>
                  <a href=\"registro.php\">
                    <span class=\"glyphicon glyphicon-floppy-disk\"></span> Registro 
                  </a>
                </li>";
              }
              else if(($_COOKIE["idLOgado"] === "11147")) {
                echo 
                "<li>
                  <a href=\"registro.php\">
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

    <?php
      require_once "./php/connectBD.php";

      if(isset($_COOKIE["idREGISTRO"])) {
        $idRegistro = $_COOKIE["idREGISTRO"];

        $sql = "SELECT * FROM registro WHERE REGISTRO_ID = ".$idRegistro."";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();

          $data = explode("/", $row["DATA_"]);

          if ($data[1] == "1")
            $data[1] = "de janeiro de";
          else if ($data[1] == "2")
            $data[1] = "de fevereiro de";
          else if ($data[1] == "3")
            $data[1] = "de março de";
          else if ($data[1] == "4")
            $data[1] = "de abril de";
          else if ($data[1] == "5")
            $data[1] = "de maio de";
          else if ($data[1] == "6")
            $data[1] = "de junho de";
          else if ($data[1] == "7")
            $data[1] = "de julho de";
          else if ($data[1] == "8")
            $data[1] = "de agosto de";
          else if ($data[1] == "9")
            $data[1] = "de setembro de";
          else if ($data[1] == "10")
            $data[1] = "de outubro de";
          else if ($data[1] == "11")
            $data[1] = "de novembro de";
          else if ($data[1] == "12")
            $data[1] = "de dezembro de";

          echo
            "<div class=\"container\">
              <div class=\"resume\">
                <header class=\"page-header\">
                  <h1 class=\"page-title\"> ".$row["TIPO"]." N° ".$row["NUMERO"].", de ".$data[0]." ".$data[1]." ".$data[2]."</h1>
                  <small> <i class=\"fa fa-clock-o\"></i> Disponível em: <a href=\"".$row["URL_"]."\">".$row["URL_"]." </a> </small>
                </header>
                <div class=\"bs-callout bs-callout-danger\">
                  <li class=\"list-group-item\"><b>Assunto: </b>".$row["ASSUNTO"]."</li>
                  <li class=\"list-group-item\"><b>Entregue: </b>".$row["RECEPTOR"]."</li>
                </div>

                <!-- Superintendência(s) -->
                <div class=\"bs-callout bs-callout-danger\">
                  <h4> Superintendência(s): </h4>
                  <ul class=\"list-group\">";

          $sql2 = "SELECT superintendencia.NOME FROM superintendencia WHERE superintendencia.REGISTRO_ID = ".$row["REGISTRO_ID"]."";

          //$conn->close();

          $result2 = $conn->query($sql2);
          if ($result2->num_rows > 0) {
            while($row2 = $result2->fetch_assoc()) {
              echo 
              "<li class=\"list-group-item\">".$row2["NOME"]."</li>";
            }
          }
          //$conn->close();
          $sql = "SELECT * FROM registro WHERE REGISTRO_ID = ".$idRegistro."";

          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            echo
            "</ul>
              </div>

                <!-- Resumo -->
                <div class=\"bs-callout bs-callout-danger\">
                  <h4> Resumo: </h4>
                  <p> ".$row["RESUMO"]." </p>
                </div>

                <!-- Objeto/Resolve -->
                <div class=\"bs-callout bs-callout-danger\">
                  <h4> Objeto/Resolve: </h4>
                  <p> ".$row["OBJETO"]." </p>
                </div>
          
                <!-- Recurso -->
                <div class=\"bs-callout bs-callout-danger\">
                  <h4> Recurso: </h4>
                  <p> ".$row["RECURSO"]." </p>
                </div>
                
                <!-- Considerações -->
                <div class=\"bs-callout bs-callout-danger\">
                  <h4> Considerações: </h4>
                  <p> ".$row["CONSIDERACAO"]." </p>
                </div>
                
                <!-- Acompanhamento -->
                <div class=\"bs-callout bs-callout-danger\">
                  <h4> Acompanhamento: </h4>
                  <p> ".$row["ACOMPANHAMENTO"]." </p>
                </div>
              </div>
          
            </div>
            </div>
            </div>
            </div>
            
            <br><br>";
          }
        }
      }
    ?>

    <?php
      echo 
      "<script type=\"text/javascript\">
        if(location.search.indexOf('reloaded=yes') < 0) {
          var hash = window.location.hash;
          var loc = window.location.href.replace(hash, '');
          loc += (loc.indexOf('?') < 0? '?' : '&') + 'reloaded=yes';
          setTimeout(function(){window.location.href = loc + hash;}, 0);
        }
      </script>";
    ?>

    <!-- Rodapé -->
    <footer>
      <p><font size="3"> Em desenvolvimento </font></p>
    </footer>

    <!-- Scripts -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src='./js/bootstrapvalidator.min.js'></script>
    <script src="./js/index.js"></script>

  </body>
</html>