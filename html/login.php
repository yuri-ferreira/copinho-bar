<?php include 'D:/XAMP/htdocs/copinho-bar/php/header.php'; ?>
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
  <section class="login">
    <div class="caixa-login">
      <h1>LOGIN</h1>
      <form action="../php/authlogin.php" method="post">
        <label class="lblG" for="Email">Email</label>
        <input class="inptG" type="text" name="Email" />
        <label class="lblG" for="Senha">Senha</label>
        <input class="inptG" type="password" name="Senha" />
        <div class="lembrar-esqueceu">
          <div>
            <input type="checkbox" name="Lembrar" id="#" />
            <label for="Lembrar">Lembrar</label>
          </div>
          <a href="#">Esqueceu a senha?</a>
        </div>
        <input type="submit" value="Entrar" class="entrar-btn" />
        <p>
          Não tem conta?
          <a href="/copinho-bar/html/registro.html">registre-se</a>
        </p>
      </form>
    </div>
  </section>
  <script src="/copinho-bar/js/menuham.js"></script>
</body>
