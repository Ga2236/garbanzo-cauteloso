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

    <a href="index.php" class="ls-go-next"><span class="ls-text">Voltar</a></span>

    <!-- Nome do produto/marca com sidebar -->
    <h1 class="ls-brand-name">
      <a href="index.php" class="ls-ico-earth">
        <small>Sistema de Finanças Pessoais</small>
        finanças pessoais
      </a>
    </h1>

    <!-- Nome do produto/marca sem sidebar quando for o pre-painel  -->
  </div>

  <aside class="ls-sidebar">

    <div class="ls-sidebar-inner">
      <a href="login.php" class="ls-go-prev"><span class="ls-text">Voltar à página inicial</span></a>

      <nav class="ls-menu">
        <ul>
          <li><a href="dashboard.php" class="ls-ico-dashboard" title="Dashboard">Dashboard</a></li>
          <li><a href="movimentacoes.php" class="ls-ico-users" title="Movimentações">Movimentações</a></li>
          <li><a href="relatorios.php" class="ls-ico-stats" title="Relatórios">Relatórios</a></li>
          <li>
            <a href="#" class="ls-ico-cog" title="Configurações">Configurações</a>
            <ul>
              <li><a href="usuario.php">Usuários</a></li>
              <li><a href="categoria.php">Categorias</a></li>
              <li><a href="Pagamento.php">Formas de Pagamento</a></li>
            </ul>
          </li>
        </ul>
      </nav>

    </div>
  </aside>
</body>  
