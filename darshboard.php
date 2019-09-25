<!DOCTYPE html>
<html lang="pt-br" class="ls-theme-blue">

<head>
  <title>dashboard</title>

  <meta charset="utf-8">
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta name="description" content="">
  <link href="http://assets.locaweb.com.br/locastyle/3.10.1/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
  <link rel="icon" sizes="192x192" href="/locawebstyle/assets/images/ico-boilerplate.png">
  <link rel="apple-touch-icon" href="/locawebstyle/assets/images/ico-boilerplate.png">

</head>

<body>
  <div class="ls-topbar">

    <!-- Barra de Notificações -->
    <div class="ls-notification-topbar">

      <!-- Links de apoio -->
      <div class="ls-alerts-list">
        <a href="#" class="" data-counter="8" data-ls-module="topbarCurtain" data-target="#ls-notification-curtain"></a>
        <a href="#" class="" data-ls-module="topbarCurtain" data-target="#ls-help-curtain"></a>
        <a href="#" class="" data-ls-module="topbarCurtain" data-target="#ls-feedback-curtain"></a>
      </div>

      <!-- Dropdown com detalhes da conta de usuário -->
      <div data-ls-module="dropdown" class="ls-dropdown ls-user-account">
        <a href="#" class="ls-ico-user">
          <img src="/locawebstyle/assets/images/locastyle/avatar-example.jpg" alt="" />
          <span class="ls-name"> Usuário </span> (nome usuário)
        </a>

        <nav class="ls-dropdown-nav ls-user-menu">
          <ul>
            <li><a href="usuario.php">Meus dados</a></li>
            <li><a href="logout.php">Sair</a></li>
          </ul>
        </nav>
      </div>
    </div>

    <span class="ls-show-sidebar ls-ico-menu"></span>

    <a href="principal.php" class="ls-go-next"><span class="ls-text">Voltar</a></span>

    <!-- Nome do produto/marca com sidebar -->
    <h1 class="ls-brand-name">
      <a href="index.php" class="ls-ico-earth">
        <small>Sistema de Finanças Pessoais</small>
        Finanças pessoais
      </a>
    </h1>

    <!-- Nome do produto/marca sem sidebar quando for o pre-painel  -->
  </div>

  <aside class="ls-sidebar">

    <div class="ls-sidebar-inner">
      <a href="index.php" class="ls-go-prev"><span class="ls-text">Voltar à página inicial</span></a>

    </div>
  </aside>

  <main class="ls-main ">
    <div class="container-fluid">
      <h1 class="ls-title-intro ls-ico-home">dashboard</h1>

<div class="row">
  <div class="col-md-6 col-sm-6"><h3>Resumo de suas finanças:</h3></div>
</div>

<div class="ls-clearfix"></div>

<div class="ls-board-box">

  <div id="sending-stats" class="row ls-box-group">
    <div class="col-sm-6 col-lg-3">
      <div class="ls-box">
        <div class="ls-box-head">
          <h6 class="ls-title-4">Data de pagamento</h6>
        </div>
        <div class="ls-box-body">
          <strong>99.999.999</strong>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-lg-3">
      <div class="ls-box">
        <div class="ls-box-head">
          <h6 class="ls-title-4">parcelas</h6>
        </div>
        <div class="ls-box-body">
          <div class="ls-half-board-data">
            <div id="board-chart-1" class="ls-box-chart">
            </div>
          </div>
          <div class="ls-half-board-data">
            <strong class="ls-color-theme">20.000</strong>
            <small>Valor</small>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-lg-3">
      <div class="ls-box">
        <div class="ls-box-head">
          <h6 class="ls-title-4">categorias de seus uso</h6>
        </div>
        <div class="ls-box-body">
          <div class="ls-half-board-data">
            <div id="board-chart-2" class="ls-box-chart">
            </div>
          </div>
          <div class="ls-half-board-data">
            <strong class="ls-color-info">10.000</strong>
            <small>dos e-mails entregues</small>
          </div>
        </div>
      </div>
    </div>
    </div>
  </main>
  <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="http://assets.locaweb.com.br/locastyle/3.10.1/javascripts/locastyle.js" type="text/javascript"></script>
</body>

</html>
