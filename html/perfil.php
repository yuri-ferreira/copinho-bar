<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="/img/favicon.png" />
  <link rel="stylesheet" href="/css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
    rel="stylesheet"
  />
  <script
    src="https://kit.fontawesome.com/1393f63ea6.js"
    crossorigin="anonymous"
  ></script>
  <title>Copinho Bar</title>
</head>
<body>
  <header>
    <a href="/index.html">
      <img
        src="/img/69af8601-6ff7-464b-a020-a8c336277bc1.png"
        alt="Logo Copinho Bar"
        class="logo"
      />
    </a>
    <nav class="nav-desktop">
      <ul>
        <li><a href="/html/onde-estamos.html">Onde estamos</a></li>
        <li><a href="/html/quem-somos.html">Quem somos</a></li>
        <li>
          <a href="/html/compras.html">Cervejas artesanais</a>
        </li>
        <li><a href="/html/contato.html">Contato</a></li>
      </ul>
    </nav>
    <nav class="nav-desktop">
      <button>
        <a href="/html/carrinho.html"><img src="/img/compras.png" alt="" /></a>
      </button>
      <button>
        <a href="/html/login.php"><img src="/img/login.png" alt="" /></a>
      </button>
    </nav>
    <nav class="nav-mobile">
      <button class="menuham" id="abrirMenu">
        <img src="/img/h-menu.png" alt="menu" />
      </button>
    </nav>
    <div class="menu-fora" id="menuFora">
      <div class="hdr2">
        <button id="fecharMenu">
          <img src="/img/fechar.png" alt="fechar" />
        </button>
        <div class="hdr2">
          <button>
            <a href="/html/login.php"><img src="/img/login.png" alt="" /></a>
          </button>
          <button>
            <a href="/html/carrinho.html"
              ><img src="/img/compras.png" alt=""
            /></a>
          </button>
        </div>
      </div>
      <ul>
        <li><a href="index.html">Página inicial</a></li>
        <li><a href="/html/onde-estamos.html">Onde estamos</a></li>
        <li><a href="/html/quem-somos.html">Quem somos</a></li>
        <li>
          <a href="/html/compras.html">Cervejas artesanais</a>
        </li>
        <li><a href="/html/contato.html">Contato</a></li>
      </ul>
    </div>
  </header>
  <section class="perfil">
    <div class="caixa-perfil">
      <h1>Olá, NOME USUÁRIO</h1>
      <div class="info-login">
        <h1 class="pad">Informações de login</h1>
        <form class="info-login-form" action="#" method="post">
          <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" />
          </div>
          <div>
            <label for="email">Email</label>
            <input type="email" name="email" />
          </div>
          <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha" />
          </div>
        </form>
      </div>
      <div class="info-login">
        <h1>Informações de contato</h1>
        <form class="info-login-form" action="#" method="post">
          <div>
            <label for="telefone">Telefone</label>
            <input type="tel" name="telefone" />
          </div>
          <div>
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" />
          </div>
        </form>
      </div>
      <input class="logout" type="submit" value="LOGOUT" />
    </div>
  </section>
</body>
