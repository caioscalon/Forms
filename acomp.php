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
                    <a href=\"acomp.php\">
                      <span class=\"glyphicon glyphicon-arrow-right\"></span> Acompanhamento
                    </a>
                  </li>
                  <li class=\"active\">
                    <a href=\"#\">
                      <span class=\"glyphicon glyphicon-floppy-disk\"></span> Registro 
                    </a>
                  </li>";
                }
                else if(($_COOKIE["idLOgado"] === "11147")) {
                  echo 
                  "<li class=\"active\">
                    <a href=\"acomp.php\">
                      <span class=\"glyphicon glyphicon-arrow-right\"></span> Acompanhamento
                    </a>
                  </li>
                  <li>
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

    <div class="container-fluid">
      <div class="row">
        <header class="page-header">
          <h1 class="page-title"> Acompanhamentos </h1>
        </header>

        <!-- ... -->

      </div>
    </div>

    <br><br>

    <button class="btn btn-primary" onclick="topFunction()" id="myBtn" title="Início">
      <span class="glyphicon glyphicon-chevron-up"></span> 
    </button>

    <!-- Rodapé -->
    <footer>
      <p><font size="3"> Em desenvolvimento </font></p>
    </footer>

    <!-- Scripts -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/jquery.mask.js"></script>
    <script src="./js/jquery.mask.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src='./js/bootstrapvalidator.min.js'></script>
    <script src="./js/validator.js"></script>
    <script src="./js/forms.js"></script>

  </body>
</html>