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
    if(!($_COOKIE["idLOgado"] === "11147")) {
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge; charset=utf-8"/>
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
            <li>
              <a href="acomp.php">
                <span class="glyphicon glyphicon-arrow-right"></span> Acompanhamento 
              </a>
            </li>
            <li>
              <a href="registro.php">
                <span class="glyphicon glyphicon-floppy-disk"></span> Registro 
              </a>
            </li>
            <li class="active">
              <a href="#">
                <span class="glyphicon glyphicon-user"></span> Cadastro 
              </a>
            </li>
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

    <!-- Cadastro -->
    <div class="container">
      <div class="row main">
        <div class="col-md-4 col-xs-offset-4">
          <div class="panel-heading">
            <div class="panel-title text-center">
              <h2> Preencha os campos: </h2> <hr>
            </div>
          </div>

          <div class="main-login main-center">
            <form class="form-horizontal" action="./php/cadastro.php" method="POST" id="registro_form"> 
              <div class="form-group">
                <label class="cols-sm-2 control-label" for="usuario"> Usuário: </label>
                <div class="cols-sm-10">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input class="form-control" type="text"name="usuario" placeholder="Insira seu usuário...">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="cols-sm-2 control-label" for="senha"> Senha: </label>
                <div class="cols-sm-10">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input class="form-control" id="senha" type="password" placeholder="Insira sua senha..." name="senha" data-minLength="5" data-error="some error" required/>
                    <span class="glyphicon form-control-feedback"></span>
                    <span class="help-block with-errors"></span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="cols-sm-2 control-label" for="senha"> Confirme sua senha: </label>
                <div class="cols-sm-10">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input class="form-control {$borderColor}" id="senha2" type="password" placeholder="Confirme sua senha..." name="confirmarSenha" data-match="#confirmarSenha" data-minLength="5" data-match-error="some error 2" required/>
                    <span class="glyphicon form-control-feedback"></span>
                    <span class="help-block with-errors"></span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="cols-sm-2 control-label" for="codigo"> Código: </label>
                <div class="cols-sm-10">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-console"></i></span>
                    <input class="form-control" name="codigo" placeholder="Insira seu código..." type="text">
                  </div>
                </div>
              </div>

              <br>

              <div class="form-group">
                <a href="#" style="text-decoration: none">
                  <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnCad" id="btnCad"> Cadastrar </button>
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Rodapé -->
    <footer>
      <p><font size="3"> Em desenvolvimento </font></p>
    </footer>

    <!-- Scripts -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src='./js/bootstrapvalidator.min.js'></script>
    <script src="./js/validator.js"></script>

  </body>
</html>