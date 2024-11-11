<?php
include 'D:/XAMP/htdocs/copinho-bar/php/header.php';
include 'D:/XAMP/htdocs/copinho-bar/php/bd_connect.php';

if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../html/login.php");
    exit();
}

$user_id = $_SESSION['usuario_id'];
$sql = "SELECT * FROM usuarios WHERE id = $user_id";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "Erro ao buscar informações do usuário.";
    exit();
}
if($user['role'] === 'admin') {
  $btn_adm = true;
} else {
  $btn_adm = false;
}


?>


<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="/img/favicon.png" />
  <link rel="stylesheet" href="/copinho-bar/css/style.css" />
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
  <section class="perfil">
  <div class="caixa-perfil">
    <h1>Olá, <?php echo htmlspecialchars($user['nome']); ?></h1>
    <div class="info-login">
      <h1 class="pad">Informações de login</h1>
      <form class="info-login-form" action="../php/senha.php" method="post">
        <div>
          <label for="nome">Nome</label>
          <input type="text" name="nome" value="<?php echo htmlspecialchars($user['nome']); ?>" readonly />
        </div>
        <div>
          <label for="email">Email</label>
          <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" readonly />
        </div>
        <div>
          <label for="senha">Nova Senha</label>
          <input type="password" name="nova_senha" placeholder="Digite a nova senha" required />
        </div>
        <input type="submit" value="Atualizar Senha" />
      </form>
    </div>
    <div class="info-login">
      <h1>Informações de contato</h1>
      <form class="info-login-form">
        <div>
          <label for="telefone">Telefone</label>
          <input type="tel" name="telefone" value="<?php echo htmlspecialchars($user['telefone']); ?>" readonly />
        </div>
        <div>
          <label for="endereco">Endereço</label>
          <input type="text" name="endereco" value="<?php echo htmlspecialchars($user['endereco']); ?>" readonly />
        </div>
      </form>
    </div>
    <form action="../php/logout.php" method="post">
      <input class="logout" type="submit" value="LOGOUT" />
    </form>
    <?php if ($btn_adm): ?>
    <a class="a_adm" href="adm.php">
        <button class="btn_adm">ADMIN</button>
    </a>
<?php endif; ?>
  </div>
</section>
<script src="/copinho-bar/js/menuham.js"></script>


</body>
