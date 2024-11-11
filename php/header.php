<?php
session_start();
?>



<header>
  <a href="/copinho-bar/index.php">
    <img
      src="/copinho-bar/img/69af8601-6ff7-464b-a020-a8c336277bc1.png"
      alt="Logo Copinho Bar"
      class="logo"
    />
  </a>
  <nav class="nav-desktop">
    <ul>
      <li><a href="/copinho-bar/html/onde-estamos.php">Onde estamos</a></li>
      <li><a href="/copinho-bar/html/quem-somos.php">Quem somos</a></li>
      <li><a href="/copinho-bar/html/compras.php">Cervejas artesanais</a></li>
      <li><a href="/copinho-bar/html/contato.php">Contato</a></li>
    </ul>
  </nav>
  <nav class="nav-desktop">
    <button>
      <a href="/copinho-bar/html/carrinho.html"><img src="/copinho-bar/img/compras.png" alt="" /></a>
    </button>
    <button>
      <?php if (isset($_SESSION['usuario_id'])): ?>
        <!-- Usuário logado, ícone de perfil -->
        <a href="/copinho-bar/html/perfil.php"><img src="/copinho-bar/img/perfil.png" alt="Perfil" /></a>
      <?php else: ?>
        <!-- Usuário não logado, ícone de login -->
        <a href="/copinho-bar/html/login.php"><img src="/copinho-bar/img/login.png" alt="" /></a>
      <?php endif; ?>
    </button>
  </nav>
  <nav class="nav-mobile">
    <button class="menuham" id="abrirMenu"><img src="/copinho-bar/img/h-menu.png" alt="menu"></button>
  </nav>
  <div class="menu-fora" id="menuFora">
    <div class="hdr2">
      <button id="fecharMenu"><img src="/copinho-bar/img/fechar.png" alt="fechar"></button>
      <div class="hdr2">
        <?php if (isset($_SESSION['usuario_id'])): ?>
          <!-- Usuário logado, ícone de perfil -->
          <button><a href="/copinho-bar/html/perfil.php"><img src="/copinho-bar/img/perfil.png" alt="Perfil"></a></button>
        <?php else: ?>
          <!-- Usuário não logado, ícone de login -->
          <button><a href="/copinho-bar/html/login.php"><img src="/copinho-bar/img/login.png" alt=""></a></button>
        <?php endif; ?>
        <button><a href="/copinho-bar/html/carrinho.html"><img src="/copinho-bar/img/compras.png" alt=""></a></button>
      </div>
    </div>
    <ul>
      <li><a href="/copinho-bar/index.php">Página inicial</a></li>
      <li><a href="/copinho-bar/html/onde-estamos.php">Onde estamos</a></li>
      <li><a href="/copinho-bar/html/quem-somos.php">Quem somos</a></li>
      <li><a href="/copinho-bar/html/compras.php">Cervejas artesanais</a></li>
      <li><a href="/copinho-bar/html/contato.php">Contato</a></li>
    </ul>
  </div>
</header>
